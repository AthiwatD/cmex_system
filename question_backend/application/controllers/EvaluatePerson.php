<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class EvaluatePerson extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Evaluation_model','Evaluation');
        $this->load->model('EvaluatePerson_model','EvaluatePerson');
        $this->load->model('Person_model','Person');
    }
    
    function index(){
        $this->selectEvaluation();
       
    }
    function selectEvaluation(){
        
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluations'] = $this->EvaluatePerson->getEvaluations();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'EvaluatePerson/selectEvaluation');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluate_person/select_evaluation_view'), array());      
    }

    function evaluatePersons($evaluation_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);
        $this->data['evaluate_persons'] = $this->EvaluatePerson->getEvaluatePersons($evaluation_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'EvaluatePerson/selectEvaluation');           
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/evaluatePersons/' . $evaluation_id );      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการผู้ทำแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluate_person/evaluate_persons_view'), array());      
    }

    function updateEvaluatePersons($evaluation_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['evaluation_id'] = $evaluation_id;
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);
        $this->data['evaluate_persons'] = $this->EvaluatePerson->getEvaluatePersons($evaluation_id);
        $this->data['persons'] = $this->Person->getPersons();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/selectEvaluation');    
        $this->breadcrumb->add('แก้ไข ผู้ทำแบบประเมิน',   base_url().'EvaluatePerson/updateEvaluatePersons/' . $evaluation_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข ผู้ทำแบบประเมิน";
        
        $this->loadData();
        $this->loadViewWithScript(array('evaluate_person/evaluate_persons_form_view'), array('evaluate_person/evaluate_persons_form_script'));      
    }
    
    function updateEvaluatePersonsDo(){
        $result = $this->EvaluatePerson->updateEvaluatePersons();
        $response = json_encode($result);
        header('Content-Type: application/json');
        echo $response;
    }

}