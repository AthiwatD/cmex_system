<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class QuestionGroup extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Form_model','Form');
        $this->load->model('QuestionGroup_model','QuestionGroup');
    }
    
    function index(){
        $this->questionGroups();
       
    }
    
    function questionGroups(){
        $this->data['error'] = $this->db->error(); 
        $this->data['question_groups'] = $this->QuestionGroup->getQuestionGroups();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการกลุ่มคำถาม',   base_url().'QuestionGroup/questionGroups');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการกลุ่มคำถาม";
        $this->loadData();
        $this->loadViewWithScript(array('question_group/question_groups_view'), array());      
    }

    function questionGroup($question_group_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['question_group'] = $this->QuestionGroup->getQuestionGroup($question_group_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการกลุ่มคำถาม',   base_url().'QuestionGroup/questionGroups');  
        $this->breadcrumb->add('รายละเอียดกลุ่มคำถาม',   base_url().'QuestionGroup/questionGroup/' . $question_group_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดกลุ่มคำถาม";
        $this->loadData();
        $this->loadViewWithScript(array('question_group/question_group_view'), array());      
    }

    function addQuestionGroup(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการกลุ่มคำถาม',   base_url().'QuestionGroup/questionGroups');    
        $this->breadcrumb->add('เพิ่ม กลุ่มคำถาม',   base_url().'QuestionGroup/addQuestionGroup');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม กลุ่มคำถาม";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('question_group/question_group_form_view'), array('question_group/question_group_form_script'));      
    }

    function addQuestionGroupDo(){
        
        $result = $this->QuestionGroup->addQuestionGroup();
        
        if(!$result){
            $this->addQuestionGroup();
        }else{
            $this->QuestionGroups(); 
        }
    }

    function updateQuestionGroup($question_group_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการกลุ่มคำถาม',   base_url().'QuestionGroup/questionGroups');    
        $this->breadcrumb->add('แก้ไข กลุ่มคำถาม',   base_url().'QuestionGroup/updateQuestionGroup/' . $question_group_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข กลุ่มคำถาม";
        $this->data['question_group'] = $this->QuestionGroup->getQuestionGroup($question_group_id);
        $this->loadData();
        $this->loadViewWithScript(array('question_group/question_group_form_view'), array('question_group/question_group_form_script'));      
    }
    
    function updateQuestionGroupDo(){
        
        $result = $this->QuestionGroup->updateQuestionGroup();
        //echo $result;
        if(!$result){
            //$this->addQuestionGroup();
            $this->QuestionGroups(); 
        }else{
            $this->QuestionGroups(); 
        }
    }

    function deleteQuestionGroupDo($question_group_id){
        
        $result = $this->QuestionGroup->deleteQuestionGroup($question_group_id);
        
        if(!$result){
            //$this->addQuestionGroup();
            $this->QuestionGroups(); 
        }else{
            $this->QuestionGroups(); 
        }
    }
}