<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class Home extends MY_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Hrcost_model','HrcostModel');
        }
        
        function index($sys="back"){
            if($sys=="back") $this->breadcrumb->add('หน้าหลัก',base_url()."Home");
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            if($sys=="back") $this->data['system']="backend"; 
            else if($sys=="front") $this->data['system']="frontend";

            $this->data['page']="home";
            $this->data['method']="view";
            $this->data['head_title']=IS_PJNAME_DT;
                        
            $this->loadData();
            $this->loadViewWithScript(array('hrcost/hrcost_home_view'),array());
        }

        public function do_logout(){
            $this->session->sess_destroy();
            $url=base_url()."Login/index";
            redirect($url);
        }

        //[Athiwat][24/06/2564][add logout frontend]
        public function frontend_logout(){
            $this->session->sess_destroy();
            $url=base_url()."Login/index";
            redirect($url);
        }
        
     }

 ?>