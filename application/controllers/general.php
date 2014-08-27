<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Добавлять в отчет все PHP ошибки
error_reporting(-1);

require_once APPPATH . "/third_party/PHPExcel.php";

class General extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();

        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('url', 'form', 'text', 'file', 'download');
    }

    public function index() {
        $data['title'] = '';

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        } else {

            $data['user'] = $this->ion_auth->user($this->session->userdata('user_id'))->row();
            $data['group'] = $this->ion_auth->get_users_groups($this->session->userdata('user_id'))->row();

            $this->load->view('header', $data);
            $this->load->view('general');
        }
    }

    function fileList() {
        $data['title'] = 'Список договоров';

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        } else {

            $data['user'] = $this->ion_auth->user($this->session->userdata('user_id'))->row();
            $data['group'] = $this->ion_auth->get_users_groups($this->session->userdata('user_id'))->row();


            $this->load->view('header', $data);
            $this->load->view('fileList');
        }
    }
    
    function delete_user() {
        $id = $this->input->post('id');
        $this->load->model('general_model');
        $this->general_model->deleteUserRecord($id);
        $this->session->set_flashdata('message', "Пользователь удален");
    }
    
     public function sendMail() {
        $this->load->library('email');
        
        $attachment = $this->input->post('attachment');
        $mail = $this->input->post('mail');
        
        
        
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.dialog64.ru';
            $config['smtp_user'] = 'ermashevsky@dialog64.ru';
            $config['smtp_pass'] = 'kk6k29';
            $config['smtp_port'] = '25';
            $config['smtp_timeout'] = '30';

            $config['charset'] = 'utf-8';
            $config['crlf'] = "\r\n";
            $config['newline'] = "\r\n";
            $config['wordwrap'] = TRUE;

        $this->email->initialize($config);
        
        $this->email->from('ermashevsky@dialog64.ru', 'Автоинформатор');
        $this->email->to($mail);
        $this->email->subject('Файл договора');
        $this->email->attach($attachment);
        $message = "Вы выбрали опцию 'Отправить на почту' в системе заполнения договоров. Высылаем Вам файл. Файл во вложении";
        $this->email->message('Здравствуйте! '.$message);
        
        $this->email->send();
        return true;
    }
    
    
    function formatSizeUnits($bytes) {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }

    public function dn() {
        $this->load->view('header');
        $this->load->view('dn_application_page');
    }

    public function getAssortmensDN() {
        $this->load->model('general_model');
        return $this->general_model->getAssortmensDN();
    }

    public function getTariffList() {
        $id_assortment = $this->input->post('id_assortment');
        $this->load->model('general_model');
        $tariffList = $this->general_model->getTariffList($id_assortment);
        echo json_encode($tariffList);
    }

    public function getManagers() {

        $this->load->model('general_model');
        return $this->general_model->getManagers();
    }

    public function getPosition() {
        $id = $this->input->post('id');
        $this->load->model('general_model');
        echo json_encode($this->general_model->getPosition($id));
    }

    public function tk() {
        $this->load->view('header');
        $this->load->view('tk_application_page');
    }

    public function va() {
        $this->load->view('header');
        $this->load->view('va_application_page');
    }

    /**
     * Склонение слов по падежам. С использованием api Яндекса
     * @var string $text - текст 
     * @var integer $numForm - нужный падеж. Число от 0 до 5
     *
     * @return - вернет false при неудаче. При успехе вернет нужную форму слова
     */
    function getNewFormText($text, $numForm) {
        $urlXml = "http://export.yandex.ru/inflect.xml?name=" . urlencode($text);
        $result = simplexml_load_file($urlXml);
        if ($result) {
            $arrData = array();
            foreach ($result->inflection as $one) {
                $arrData[] = (string) $one;
            }
            return $arrData[$numForm];
        }
        return false;
    }

    public function aggregateDocx() {

        $data['user'] = $this->ion_auth->user($this->session->userdata('user_id'))->row();
        $data['group'] = $this->ion_auth->get_users_groups($this->session->userdata('user_id'))->row();
        $structure = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/uploads/' . $data['user']->username . '/';

        if (!file_exists($structure)) {
            mkdir($structure, 0777, true);
        }

        //Указываем путь до подготовленного документа
        $template = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/document.docx';
        $newfile = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/uploads/' . $data['user']->username . '/dogovor_' . $this->input->post('contract_number') . '.docx';
        $f_name = 'dogovor_' . $this->input->post('contract_number') . '.docx';
        copy($template, $newfile);
        $docxFile = $newfile;

        $boss_name_genetive = $this->getNewFormText($this->input->post('boss_name'), 1);
        $boss_work_position_genetive = $this->getNewFormText($this->input->post('boss_work_position'), 1);
        $basis_name_genetive = $this->getNewFormText($this->input->post('basis_name'), 1);

        $boss_name_short = preg_replace('/(\w+) (\w)\w+ (\w)\w+/iu', '$1 $2.$3.', $this->input->post('boss_name'));


        //Список параметров
        $params = array(
            '{CONTRACT_NUMBER}' => $this->input->post('contract_number'),
            '{CONTRACT_DATE}' => $this->input->post('contract_date'),
            '{ORGANIZATION_SHORT_NAME}' => $this->input->post('organization_short_name'),
            '{ORGANIZATION_FULL_NAME}' => $this->input->post('organization_full_name'),
            '{BOSS_NAME}' => $boss_name_short,
            '{BOSS_WORK_POSITION}' => $this->input->post('boss_work_position'),
            '{BASIS_NAME}' => $this->input->post('basis_name'),
            '{ADDRESS}' => $this->input->post('address'),
            '{INN_KPP}' => $this->input->post('inn_kpp'),
            '{CURRENT_ACCOUNT}' => $this->input->post('current_account'),
            '{BANK}' => $this->input->post('bank'),
            '{CORRESPONDENT_ACCOUNT}' => $this->input->post('correspondent_account'),
            '{BIK}' => $this->input->post('bik'),
            '{PHONE_NUMBER}' => $this->input->post('phone_number'),
            '{EMAIL}' => $this->input->post('email'),
            '{BOSS_NAME_GENETIVE}' => $boss_name_genetive,
            '{BOSS_WORK_GENETIVE}' => $boss_work_position_genetive,
            '{BASIS_GENETIVE}' => $basis_name_genetive,
            '{POST_ZIPCODE}' => $this->input->post('post_zipcode'),
            '{POST_CITY}' => $this->input->post('post_city'),
            '{POST_STREET}' => $this->input->post('post_street'),
            '{POST_HOUSE}' => $this->input->post('post_house'),
            '{POST_HOUSE_BLOCK}' => $this->input->post('post_house_block'),
            '{POST_OFFICE}' => $this->input->post('post_office'),
            '{POST_BOX}' => $this->input->post('post_box'),
            '{POST_APPARTMENT}' => $this->input->post('post_appartment'),
            '{MANAGER}' => $data['user']->last_name." ".$data['user']->first_name." ".$data['user']->middle_name,
        );

        if (!file_exists($docxFile)) {
            die('File not found.');
        }

        $zip = new ZipArchive();

        if (!$zip->open($docxFile)) {
            die('File not open.');
        }

        $documentXml = $zip->getFromName('word/document.xml');

//Заменяем все найденные переменные в файле на значения
        $documentXml_replaced = str_replace(array_keys($params), array_values($params), $documentXml);

        $zip->deleteName('word/document.xml');
        $zip->addFromString('word/document.xml', $documentXml_replaced);

//Закрываем и сохраняем архив
        $zip->close();

        echo json_encode($f_name);
    }
    
    function deleteFile(){
        $file = $this->input->post('file');
        
        if($this->input->post('file')){
            unlink($file);
        }
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/general.php */