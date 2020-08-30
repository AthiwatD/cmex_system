<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Evaluation extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Evaluation_model','Evaluation');
        $this->load->model('Form_model','Form');
    }
    
    function index(){
        $this->evaluations();
       
    }
    
    function evaluations(){
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluations'] = $this->Evaluation->getEvaluations();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Evaluation/evaluations');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluation/evaluations_view'), array());      
    }

    function evaluation($evaluation_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Evaluation/evaluations');  
        $this->breadcrumb->add('รายละเอียดแบบประเมิน',   base_url().'Evaluation/evaluation/' . $evaluation_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluation/evaluation_view'), array());      
    }

    function getEvaluationsWizard(){
        $result = $this->Evaluation->getEvaluationsWizard();
        $response = json_encode($result);
        header('Content-Type: application/json');
        echo $response;
    }

    function addEvaluation(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Evaluation/evaluations');    
        $this->breadcrumb->add('เพิ่ม แบบประเมิน',   base_url().'Evaluation/addEvaluation');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม แบบประเมิน";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('evaluation/evaluation_form_view'), array());      
    }

    function addEvaluationDo(){
        
        $result = $this->Evaluation->addEvaluation();
        
        if(!$result){
            $this->addEvaluation();
        }else{
            $this->evaluations(); 
        }
    }

    function addEvaluationWizardDo(){
        $result = $this->Evaluation->addEvaluationWizard();
        $data = $this->Evaluation->getEvaluationsWizard();
        echo json_encode($data);
    }

    function updateEvaluation($evaluation_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Evaluation/evaluations');    
        $this->breadcrumb->add('แก้ไข แบบประเมิน',   base_url().'Evaluation/updateEvaluation/' . $evaluation_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข แบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('evaluation/evaluation_form_view'), array());      
    }
    
    function updateEvaluationDo(){
        
        $result = $this->Evaluation->updateEvaluation();
        //echo $result;
        if(!$result){
            //$this->addEvaluation();
            $this->evaluations(); 
        }else{
            $this->evaluations(); 
        }
    }

    function deleteEvaluationDo($evaluation_id){
        
        $result = $this->Evaluation->deleteEvaluation($evaluation_id);
        
        if(!$result){
            //$this->addEvaluation();
            $this->evaluations(); 
        }else{
            $this->evaluations(); 
        }
    }
}