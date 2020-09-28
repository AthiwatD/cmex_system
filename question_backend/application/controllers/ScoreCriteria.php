<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class ScoreCriteria extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('ScoreCriteria_model','ScoreCriteria');
    }
    
    function index(){
        $this->scoreCriterias();
       
    }
    
    function scoreCriterias(){
        
        $this->data['error'] = $this->db->error(); 
        $this->data['scoreCriterias'] = $this->ScoreCriteria->getScoreCriterias();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการเกณฑ์คะแนน',   base_url().'ScoreCriteria/scoreCriterias');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();
        
        $this->data['head_title'] = "รายการเกณฑ์คะแนน";
        $this->loadData();
        $this->loadViewWithScript(array('score_criteria/score_criterias_view'), array());      
    }

    function scoreCriteria($scoreCriteria_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['scoreCriteria'] = $this->ScoreCriteria->getScoreCriteria($scoreCriteria_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการเกณฑ์คะแนน',   base_url().'ScoreCriteria/scoreCriterias');  
        $this->breadcrumb->add('รายละเอียดเกณฑ์คะแนน',   base_url().'ScoreCriteria/scoreCriteria/' . $scoreCriteria_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดเกณฑ์คะแนน";
        $this->loadData();
        $this->loadViewWithScript(array('score_criteria/score_criteria_view'), array());      
    }

    function addScoreCriteria(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['scoreCriteria'] = array();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการเกณฑ์คะแนน',   base_url().'ScoreCriteria/scoreCriterias');    
        $this->breadcrumb->add('เพิ่ม เกณฑ์คะแนน',   base_url().'ScoreCriteria/addScoreCriteria');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม เกณฑ์คะแนน";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('score_criteria/score_criteria_form_view'), array('score_criteria/score_criteria_form_script'));      
    }

    function addScoreCriteriaDo(){
        
        $result = $this->ScoreCriteria->addScoreCriteria();
        
        if(!$result){
            $this->addScoreCriteria();
        }else{
            $this->ScoreCriterias(); 
        }
    }

    function updateScoreCriteria($scoreCriteria_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();
        $this->data['categories'] = $this->Category->getCategories();
        $this->data['scoreCriteria'] = $this->ScoreCriteria->getScoreCriteria($scoreCriteria_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการเกณฑ์คะแนน',   base_url().'ScoreCriteria/scoreCriterias');    
        $this->breadcrumb->add('แก้ไข เกณฑ์คะแนน',   base_url().'ScoreCriteria/updateScoreCriteria/' . $scoreCriteria_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข เกณฑ์คะแนน";
        $this->loadData();
        $this->loadViewWithScript(array('score_criteria/score_criteria_form_view'), array('score_criteria/score_criteria_form_script'));      
    }
    
    function updateScoreCriteriaDo(){
        
        $result = $this->ScoreCriteria->updateScoreCriteria();
        //echo $result;
        if(!$result){
            //$this->addScoreCriteria();
            $this->ScoreCriterias(); 
        }else{
            $this->ScoreCriterias(); 
        }
    }

    function deleteScoreCriteriaDo($scoreCriteria_id){
        
        $result = $this->ScoreCriteria->deleteScoreCriterias($scoreCriteria_id);
        $result = $this->ScoreCriteria->deleteScoreCriteria($scoreCriteria_id);
        
        if(!$result){
            //$this->addScoreCriteria();
            $this->ScoreCriterias(); 
        }else{
            $this->ScoreCriterias(); 
        }
    }
}