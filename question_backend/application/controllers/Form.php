<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Form extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Form_model','Form');
    }
    
    function index(){
        $this->forms();
       
    }
    
    function forms(){
        $this->data['error'] = $this->db->error(); 
        $this->data['forms'] = $this->Form->getForms();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบสำรวจ',   base_url().'Form/forms');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการแบบสำรวจ";
        $this->loadData();
        $this->loadViewWithScript(array('form/forms_view'), array());      
    }

    function form($form_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['form'] = $this->Form->getForm($form_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบสำรวจ',   base_url().'Form/forms');  
        $this->breadcrumb->add('รายละเอียดแบบสำรวจ',   base_url().'Form/form');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดแบบสำรวจ";
        $this->loadData();
        $this->loadViewWithScript(array('form/form_view'), array());      
    }

    function getFormsWizard(){
        $result = $this->Form->getFormsWizard();
        $response = json_encode($result);
        header('Content-Type: application/json');
        echo $response;
    }

    function addForm(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบสำรวจ',   base_url().'Form/forms');    
        $this->breadcrumb->add('เพิ่ม แบบสำรวจ',   base_url().'Form/addForm');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม แบบสำรวจ";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('form/form_form_view'), array());      
    }

    function addFormDo(){
        
        $result = $this->Form->addForm();
        
        if(!$result){
            $this->addForm();
        }else{
            $this->forms(); 
        }
    }

    function addFormWizardDo(){
        $result = $this->Form->addFormWizard();
        $data = $this->Form->getFormsWizard();
        echo json_encode($data);
    }

    function updateForm($form_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบสำรวจ',   base_url().'Form/forms');    
        $this->breadcrumb->add('แก้ไข แบบสำรวจ',   base_url().'Form/updateForm/' . $form_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข แบบสำรวจ";
        $this->data['form'] = $this->Form->getForm($form_id);
        $this->loadData();
        $this->loadViewWithScript(array('form/form_form_view'), array());      
    }
    
    function updateFormDo(){
        
        $result = $this->Form->updateForm();
        //echo $result;
        if(!$result){
            //$this->addForm();
            $this->forms(); 
        }else{
            $this->forms(); 
        }
    }

    function deleteFormDo($form_id){
        
        $result = $this->Form->deleteForm($form_id);
        
        if(!$result){
            //$this->addForm();
            $this->forms(); 
        }else{
            $this->forms(); 
        }
    }
}