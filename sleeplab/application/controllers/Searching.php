<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Searching extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Closing_model','Closing');
        $this->load->model('Booking_model','Booking');
        $this->load->model('Searching_model','Searching');
    }
    
    function index(){
        $this->searching();
       
    }
    
    function searching(){
        $this->data['error'] = $this->db->error(); 
        $this->data['bookings'] = $this->Searching->getSearching();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('ค้นหารายการนัดหมาย',   base_url().'Searching/searching');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        

        $this->data['head_title'] = "ค้นหารายการนัดหมาย";
        $this->loadData();
        $this->loadViewWithScript(array('searching/searching_view'), array('searching/searching_script'));      
    }

}