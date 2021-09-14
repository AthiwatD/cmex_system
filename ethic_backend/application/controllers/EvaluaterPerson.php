<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EvaluaterPerson extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('EvaluaterPerson_model','EvaluaterPerson');
		$this->load->model('EvaluatePerson_model','EvaluatePerson');
		$this->load->model('Evaluation_model','Evaluation');
        $this->load->model('Person_model','Person');
    }
    
    function index(){
        $this->selectEvaluation();
       
    }
    function selectEvaluation(){
        
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluations'] = $this->Evaluation->getEvaluations();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'EvaluatePerson/selectEvaluation');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluater_person/select_evaluation_view'), array());      
    }

    function evaluaterPersons($evaluation_id){
        $this->data['error'] = $this->db->error(); 
		$this->data['evaluation_id'] = $evaluation_id;
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);
        $this->data['evaluater_persons'] = $this->EvaluaterPerson->getEvaluatersPersons($evaluation_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'EvaluatePerson/selectEvaluation');           
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/evaluaterPersons/' . $evaluation_id );      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการผู้ทำแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluater_person/evaluater_persons_view'), array());      
    }
    
    
    function updateEvaluaterPersons($evaluation_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['evaluation_id'] = $evaluation_id;
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);
        $this->data['evaluate_persons'] = $this->EvaluatePerson->getEvaluatePersons($evaluation_id);
        $this->data['persons'] = $this->Person->getPersons();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluaterPerson/selectEvaluation');    
        $this->breadcrumb->add('แก้ไข ผู้ทำแบบประเมิน',   base_url().'EvaluaterPerson/updateEvaluaterPersons/' . $evaluation_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข ผู้ทำแบบประเมิน";
        
        $this->loadData();
        $this->loadViewWithScript(array('evaluater_person/evaluater_persons_form_view'), array('evaluater_person/evaluater_persons_form_script'));      
    }
    
    function updateEvaluaterPersonsDo(){
        $result = $this->EvaluaterPerson->updateEvaluaterPersons();
        $response = json_encode($result);
        header('Content-Type: application/json');
        echo $response;
    }
}
