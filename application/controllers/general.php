<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
error_reporting(E_ALL);
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
        $this->load->helper('url', 'form', 'text', 'file');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('general');
    }
    
    public function dn(){
        $this->load->view('header');
        $this->load->view('dn_application_page');
    }
    
    public function tk(){
        $this->load->view('header');
        $this->load->view('tk_application_page');
    }
    
    public function va(){
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
        //Указываем путь до подготовленного документа
        $template = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/document.docx';
        $newfile = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/dogovor.docx';
        copy($template, $newfile);
        $docxFile = $newfile;
        
        $boss_name_genetive = $this->getNewFormText($this->input->post('boss_name'), 1);
        $boss_work_position_genetive = $this->getNewFormText($this->input->post('boss_work_position'),1);
        $basis_name_genetive = $this->getNewFormText($this->input->post('basis_name'),1);
        
        $boss_name_short = preg_replace('/(\w+) (\w)\w+ (\w)\w+/iu', '$1 $2.$3.', $this->input->post('boss_name'));
        echo $this->input->post('organization_full_name');
       
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
        );
        print_r($params);
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
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/general.php */