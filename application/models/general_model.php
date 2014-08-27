<?php

/**
 * Clients_model
 *
 * PHP version 5
 *
 * @category PHP
 * @package  Models.Report_Model
 * @author   Ермашевский Денис <ermashevsky@gmail.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link     http://www.ci2.lcl/
 */
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * Класс Report содержит методы работы  с отчетами
 *
 * @category PHP
 * @package  Models.Clients_Model
 * @author   Ермашевский Денис <ermashevsky@gmail.com>
 * @access   public
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 145
 * @link     http://www.reportsender.lcl/
 */
class General_model extends CI_Model {

    /**
     * Унифицированный метод-конструктор __construct()
     *
     * @author Ермашевский Денис
     */
    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

    function getAssortmensDN() {
        $assortment_dn = array();
        
        $this->db->select('id, payment_name, tariff');
        $this->db->from('assortment');
        $this->db->where('marker_service', "ДН");
        $managers = $this->db->get();
        if (0 < $managers->num_rows) {
            foreach ($managers->result() as $values) {
                $tmp = new General_model();
                $tmp->id = $values->id;
                $tmp->payment_name = $values->payment_name;
                $tmp->tariff = $values->tariff;
                
                $assortment_dn[$tmp->id] = $tmp;
            }
        }
        return $assortment_dn;
    }
    
    function deleteUserRecord($id){
        $this->db->delete('users', array('id' => $id));
        $this->db->delete('users_groups', array('user_id' => $id));
    }
    
    function getTariffList($id_assortment){
        
        $tariffList = array();
        
        $this->db->select('id, tariff_name, id_assortment');
        $this->db->from('tariffs');
        $this->db->where('id_assortment', $id_assortment);
        $tariff = $this->db->get();
        if (0 < $tariff->num_rows) {
            foreach ($tariff->result() as $values) {
                $tmp = new General_model();
                $tmp->id = $values->id;
                $tmp->tariff_name = $values->tariff_name;
                $tmp->id_assortment = $values->id_assortment;
                
                $tariffList[$tmp->id] = $tmp;
            }
        }
        return $tariffList;
    }
    
    function getManagers(){
         $managersList = array();
        
        $this->db->select('id, full_name, job_position');
        $this->db->from('managers');
        
        $managers = $this->db->get();
        if (0 < $managers->num_rows) {
            foreach ($managers->result() as $values) {
                $tmp = new General_model();
                $tmp->id = $values->id;
                $tmp->full_name = $values->full_name;
                $tmp->job_position = $values->job_position;
                
                $managersList[$tmp->id] = $tmp;
            }
        }
        return $managersList;
    }
    
    function getPosition($id){
         $managersList = array();
        
        $this->db->select('id, job_position');
        $this->db->from('managers');
        $this->db->where('id', $id);
        $managers = $this->db->get();
        if (0 < $managers->num_rows) {
            foreach ($managers->result() as $values) {
                $tmp = new General_model();
                $tmp->id = $values->id;
                $tmp->job_position = $values->job_position;
                
                $managersList[$tmp->id] = $tmp;
            }
        }
        return $managersList;
    }

}

//End of file report_model.php
//Location: ./models/report_model.php