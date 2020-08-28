<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Question extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Form_model','Form');
        $this->load->model('Category_model','Category');
        $this->load->model('QuestionGroup_model','QuestionGroup');
        $this->load->model('Question_model','Question');
    }
    
    function index(){
        $this->questions();
       
    }
    
    function questions(){
        $this->data['error'] = $this->db->error(); 
        $this->data['questions'] = $this->Question->getQuestions();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการคำถาม',   base_url().'Question/questions');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการคำถาม";
        $this->loadData();
        $this->loadViewWithScript(array('question/questions_view'), array());      
    }

    function question($question_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['question'] = $this->Question->getQuestion($question_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการคำถาม',   base_url().'Question/questions');  
        $this->breadcrumb->add('รายละเอียดคำถาม',   base_url().'Question/question/' . $question_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดคำถาม";
        $this->loadData();
        $this->loadViewWithScript(array('question/question_view'), array());      
    }

    function addQuestion(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();
        $this->data['categories'] = $this->Category->getCategories();
        $this->data['question_groups'] = $this->QuestionGroup->getQuestionGroups();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการคำถาม',   base_url().'Question/questions');    
        $this->breadcrumb->add('เพิ่ม คำถาม',   base_url().'Question/addQuestion');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม คำถาม";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('question/question_form_view'), array('question/question_form_script'));      
    }

    function addQuestionDo(){
        
        $result = $this->Question->addQuestion();
        
        if(!$result){
            $this->addQuestion();
        }else{
            $this->Questions(); 
        }
    }

    function updateQuestion($question_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();
        $this->data['categories'] = $this->Category->getCategories();
        $this->data['question_groups'] = $this->QuestionGroup->getQuestionGroups();
        $this->data['questions'] = $this->Question->getQuestionsByGroupId($question_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการคำถาม',   base_url().'Question/questions');    
        $this->breadcrumb->add('แก้ไข คำถาม',   base_url().'Question/updateQuestion/' . $question_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข คำถาม";
        $this->data['question'] = $this->Question->getQuestion($question_id);
        $this->loadData();
        $this->loadViewWithScript(array('question/question_form_view'), array('question/question_form_script'));      
    }
    
    function updateQuestionDo(){
        
        $result = $this->Question->updateQuestion();
        //echo $result;
        if(!$result){
            //$this->addQuestion();
            $this->Questions(); 
        }else{
            $this->Questions(); 
        }
    }

    function deleteQuestionDo($question_id){
        
        $result = $this->Question->deleteQuestions($question_id);
        $result = $this->Question->deleteQuestion($question_id);
        
        if(!$result){
            //$this->addQuestion();
            $this->Questions(); 
        }else{
            $this->Questions(); 
        }
    }
}