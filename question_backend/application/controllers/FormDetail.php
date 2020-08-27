<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class FormDetail extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Form_model','Form');
        $this->load->model('FormDetail_model','FormDetail');
    }
    
    function index(){
        $this->formDetails();
       
    }
    
    function formDetails(){
        $this->data['error'] = $this->db->error(); 
        $this->data['form_details'] = $this->FormDetail->getFormDetails();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลแบบสำรวจ',   base_url().'FormDetail/formDetails');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการข้อมูลแบบสำรวจ";
        $this->loadData();
        $this->loadViewWithScript(array('form_detail/form_details_view'), array());      
    }

    function formDetail($form_detail_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['form_detail'] = $this->FormDetail->getFormDetail($form_detail_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลแบบสำรวจ',   base_url().'FormDetail/formDetails');  
        $this->breadcrumb->add('รายละเอียดข้อมูลแบบสำรวจ',   base_url().'FormDetail/formDetail/' . $form_detail_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดข้อมูลแบบสำรวจ";
        $this->loadData();
        $this->loadViewWithScript(array('form_detail/form_detail_view'), array());      
    }

    function addFormDetail(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลแบบสำรวจ',   base_url().'FormDetail/formDetails');    
        $this->breadcrumb->add('เพิ่ม ข้อมูลแบบสำรวจ',   base_url().'FormDetail/addFormDetail');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม ข้อมูลแบบสำรวจ";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('form_detail/form_detail_form_view'), array('form_detail/form_detail_form_script'));      
    }

    function addFormDetailDo(){
        
        $result = $this->FormDetail->addFormDetail();
        
        if(!$result){
            $this->addFormDetail();
        }else{
            $this->FormDetails(); 
        }
    }

    function updateFormDetail($form_detail_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลแบบสำรวจ',   base_url().'FormDetail/formDetails');    
        $this->breadcrumb->add('แก้ไข ข้อมูลแบบสำรวจ',   base_url().'FormDetail/updateFormDetail/' . $form_detail_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข ข้อมูลแบบสำรวจ";
        $this->data['form_detail'] = $this->FormDetail->getFormDetail($form_detail_id);
        $this->loadData();
        $this->loadViewWithScript(array('form_detail/form_detail_form_view'), array('form_detail/form_detail_form_script'));      
    }
    
    function updateFormDetailDo(){
        
        $result = $this->FormDetail->updateFormDetail();
        //echo $result;
        if(!$result){
            //$this->addFormDetail();
            $this->FormDetails(); 
        }else{
            $this->FormDetails(); 
        }
    }

    function deleteFormDetailDo($form_detail_id){
        
        $result = $this->FormDetail->deleteFormDetail($form_detail_id);
        
        if(!$result){
            //$this->addFormDetail();
            $this->FormDetails(); 
        }else{
            $this->FormDetails(); 
        }
    }
}