<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class EvaluatePerson extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Form_model','Form');
        $this->load->model('Evaluation_model','Evaluation');
        $this->load->model('EvaluatePerson_model','EvaluatePerson');
        $this->load->model('Person_model','Person');
    }
    
    function index(){
        $this->evaluatePersons();
       
    }
    
    function evaluatePersons(){
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluate_persons'] = $this->EvaluatePerson->getEvaluatePersons();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/evaluatePersons');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการผู้ทำแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluate_person/evaluate_persons_view'), array());      
    }

    function evaluatePerson($evaluate_person_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluate_person'] = $this->EvaluatePerson->getEvaluatePerson($evaluate_person_id);
        $this->data['questions'] = $this->Question->getQuestionsByGroupId($evaluate_person_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/evaluatePersons');  
        $this->breadcrumb->add('รายละเอียดผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/evaluatePerson/' . $evaluate_person_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดผู้ทำแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluate_person/evaluate_person_view'), array());      
    }

    function addEvaluatePerson(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();
        $this->data['categories'] = $this->Category->getCategories();
        $this->data['choice_groups'] = $this->ChoiceGroup->getChoiceGroupsOnly();
        $this->data['evaluate_person'] = array();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/evaluatePersons');    
        $this->breadcrumb->add('เพิ่ม ผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/addEvaluatePerson');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม ผู้ทำแบบประเมิน";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('evaluate_person/evaluate_person_form_view'), array('evaluate_person/evaluate_person_form_script'));      
    }

    function addEvaluatePersonDo(){
        
        $result = $this->EvaluatePerson->addEvaluatePerson();
        
        if(!$result){
            $this->addEvaluatePerson();
        }else{
            $this->EvaluatePersons(); 
        }
    }

    function updateEvaluatePerson($evaluate_person_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();
        $this->data['categories'] = $this->Category->getCategories();
        $this->data['choice_groups'] = $this->ChoiceGroup->getChoiceGroupsOnly();
        $this->data['evaluate_person'] = $this->EvaluatePerson->getEvaluatePerson($evaluate_person_id);
        $this->data['questions'] = $this->Question->getQuestionsByGroupId($evaluate_person_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/evaluatePersons');    
        $this->breadcrumb->add('แก้ไข ผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/updateEvaluatePerson/' . $evaluate_person_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข ผู้ทำแบบประเมิน";
        
        $this->loadData();
        $this->loadViewWithScript(array('evaluate_person/evaluate_person_form_view'), array('evaluate_person/evaluate_person_form_script'));      
    }
    
    function updateEvaluatePersonDo(){
        
        $result = $this->EvaluatePerson->updateEvaluatePerson();
        //echo $result;
        if(!$result){
            //$this->addEvaluatePerson();
            $this->evaluatePersons(); 
        }else{
            $this->evaluatePersons(); 
        }
    }

    function deleteEvaluatePersonDo($evaluate_person_id){
        
        $result = $this->Question->deleteQuestions($evaluate_person_id);
        $result = $this->EvaluatePerson->deleteEvaluatePerson($evaluate_person_id);
        
        if(!$result){
            //$this->addEvaluatePerson();
            $this->evaluatePersons(); 
        }else{
            $this->evaluatePersons(); 
        }
    }
}