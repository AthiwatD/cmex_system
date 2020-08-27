<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class ChoiceGroup extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('ChoiceGroup_model','ChoiceGroup');
    }
    
    function index(){
        $this->choiceGroups();
       
    }
    
    function choiceGroups(){
        $this->data['error'] = $this->db->error(); 
        $this->data['choice_groups'] = $this->ChoiceGroup->getChoiceGroups();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลกลุ่มคำตอบ',   base_url().'ChoiceGroup/choiceGroups');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการข้อมูลกลุ่มคำตอบ";
        $this->loadData();
        $this->loadViewWithScript(array('choice_group/choice_groups_view'), array());      
    }

    function choiceGroup($choice_group_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['choice_group'] = $this->ChoiceGroup->getChoiceGroup($choice_group_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลกลุ่มคำตอบ',   base_url().'ChoiceGroup/choiceGroups');  
        $this->breadcrumb->add('รายละเอียดข้อมูลกลุ่มคำตอบ',   base_url().'ChoiceGroup/choiceGroup/' . $choice_group_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดข้อมูลกลุ่มคำตอบ";
        $this->loadData();
        $this->loadViewWithScript(array('choice_group/choice_group_view'), array());      
    }

    function addChoiceGroup(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลกลุ่มคำตอบ',   base_url().'ChoiceGroup/choiceGroups');    
        $this->breadcrumb->add('เพิ่ม ข้อมูลกลุ่มคำตอบ',   base_url().'ChoiceGroup/addChoiceGroup');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม ข้อมูลกลุ่มคำตอบ";
        $this->loadData();
        $this->loadViewWithScript(array('choice_group/choice_group_form_view'), array('choice_group/choice_group_form_script'));      
    }

    function addChoiceGroupDo(){
        
        $result = $this->ChoiceGroup->addChoiceGroup();
        
        if(!$result){
            $this->addChoiceGroup();
        }else{
            $this->ChoiceGroups(); 
        }
    }

    function updateChoiceGroup($choice_group_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['choice_group'] = $this->ChoiceGroup->getChoiceGroup($choice_group_id);
        
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการข้อมูลกลุ่มคำตอบ',   base_url().'ChoiceGroup/choiceGroups');    
        $this->breadcrumb->add('แก้ไข ข้อมูลกลุ่มคำตอบ',   base_url().'ChoiceGroup/updateChoiceGroup/' . $choice_group_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข ข้อมูลกลุ่มคำตอบ";
        
        $this->loadData();
        $this->loadViewWithScript(array('choice_group/choice_group_form_view'), array('choice_group/choice_group_form_script'));      
    }
    
    function updateChoiceGroupDo(){
        
        $result = $this->ChoiceGroup->updateChoiceGroup();
        //echo $result;
        if(!$result){
            //$this->addChoiceGroup();
            $this->ChoiceGroups(); 
        }else{
            $this->ChoiceGroups(); 
        }
    }

    function deleteChoiceGroupDo($choice_group_id){
        
        $result = $this->ChoiceGroup->deleteChoiceGroup($choice_group_id);
        
        if(!$result){
            //$this->addChoiceGroup();
            $this->ChoiceGroups(); 
        }else{
            $this->ChoiceGroups(); 
        }
    }
}