<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class Home extends MY_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Bookonline_model','BookonlineModel');
        }
        
        function index($sys="back"){
            if($sys=="back") $this->breadcrumb->add('หน้าหลัก', base_url());
            if($sys=="back") $this->breadcrumb->add('หนังสือเวียน',   base_url().'bookonline/bookonlines');
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            if($sys=="back") $this->data['system']="backend"; 
            else if($sys=="front") $this->data['system']="frontend";

            $this->data['method']="view";
            $this->data['head_title']="ประกาศหนังสือเวียน";
                        
            $this->data['Users'] = $this->BookonlineModel->getUsers();
            $this->data['locations'] = $this->BookonlineModel->getLocations();
            $this->data['Types'] = $this->BookonlineModel->getPublishTypes();
            $this->data['Bookonlines'] = $this->BookonlineModel->getBookonlineHds();
            $this->loadData();

            $this->loadViewWithScript(array('bookonline/bookonlines_view'),array());

            // if($this->check_isvalidated()) $this->loadViewWithScript(array('bookonline/bookonlines_view'),array());
            // else if(!$this->check_isvalidated()) $this->front_loadViewWithScript(array('bookonline/bookonlines_view'),array());
        }

        public function do_logout(){
            $this->session->sess_destroy();
            $url=base_url()."Login/index/back";
            redirect($url);
        }

        //[Athiwat][24/06/2564][add logout frontend]
        public function frontend_logout(){
            $this->session->sess_destroy();
            $url=base_url()."Login/index/front";
            redirect($url);
        }
        
     }

 ?>