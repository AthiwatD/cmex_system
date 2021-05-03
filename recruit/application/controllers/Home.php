<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class Home extends MY_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Recruit_model','RecruitModel');
        }
        
        function index(){
            if($this->check_isvalidated()) $this->breadcrumb->add('หน้าหลัก', base_url());
            if($this->check_isvalidated()) $this->breadcrumb->add('ประกาศรับสมัคร',   base_url().'Recruit/recruits');
            
            $this->data['method']="view";
            $this->data['breadcrumb'] = $this->breadcrumb->output();
            $this->data['recruits']=$this->RecruitModel->getRecruitHds();
            $this->data['head_title'] = "ประกาศรับสมัคร";

            $this->loadData();
            if($this->check_isvalidated()) $this->loadViewWithScript(array('recruit/recruits_view'),array());
            else if(!$this->check_isvalidated()) $this->front_loadViewWithScript(array('recruit/recruits_view'),array());
        }


        public function do_logout(){
            $this->session->sess_destroy();
            $url=base_url(); //[ton][24/04/2564][create and use $url]
            redirect($url);
            // header("location:" .  base_url() . 'Home/');
        }
        
     }

 ?>