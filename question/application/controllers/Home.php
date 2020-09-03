<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('EvaluatePerson_model','EvaluatePerson');
        $this->load->model('Evaluation_model','Evaluation');
    }
    
    function index($evaluation_id = NULL){
        if($evaluation_id == NULL){
            $this->forms();
        }
        else{
           $this->form($evaluation_id);
        }
       
    }

    function forms(){
        $this->data['evaluates'] = $this->EvaluatePerson->getNotEvaluatesPerson($this->session->username);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "หน้าหลัก";
        $this->loadData();
        $this->loadViewWithScript(array('home_view'), array());    
    }
    
    function form($evaluation_id){
        $this->data['evaluation'] = $this->EvaluatePerson->

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('แบบประเมิน',   base_url().'Main/form/' . $evaluation_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "หน้าหลัก";
        $this->loadData();
        $this->loadViewWithScript(array('home_view'), array());    
    }

    public function do_logout(){
        $this->session->sess_destroy();
        redirect('/Login');
    }
    
 }
 ?>