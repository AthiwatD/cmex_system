<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Wizard extends MY_Controller {
    
    function __construct(){
        parent::__construct();

        $this->load->model('Form_model','Form');
        $this->load->model('Category_model','Category');
        $this->load->model('QuestionGroup_model','QuestionGroup');
        $this->load->model('Question_model','Question');
        $this->load->model('ChoiceGroup_model','ChoiceGroup');
        $this->load->model('Wizard_model','Wizard');
        //$this->check_isvalidated();
    }
    
    function index(){
        $this->wizard();
       
    }
    
    function wizard(){
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add"; 
        $this->data['choice_groups'] = $this->ChoiceGroup->getChoiceGroupsOnly();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('สร้างแบบฟอร์มประเมิน',   base_url().'Wizard/wizard');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "สร้างแบบฟอร์มประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('wizard/wizard_view'), array('wizard/wizard_script'));          
    }

    function addWizardDo(){
        $result = $this->Wizard->addWizard();
        $response = json_encode($result);
        header('Content-Type: application/json');
        echo $response;
    }

   
}