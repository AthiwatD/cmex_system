<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class Home extends MY_Controller{

        public function __construct(){
            parent::__construct();
            // $this->load->model('Recruit_model','Recruit');
        }
        
        function index(){
            $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
            $this->data['breadcrumb'] = $this->breadcrumb->output();
            $this->data['head_title'] = "ตำแหน่งที่เปิดรับสมัครงาน";
            $this->loadData();
            $this->loadViewWithScript(array('recruit/recruit_views'),array());
            // $this->loadViewWithScript(array('recruit/recruit_form_view'),array());
            // $this->loadViewWithScript(array('home_view'), array());
        }


        public function do_logout(){
            $this->session->sess_destroy();
            redirect('/Home');
            // header("location:" .  base_url() . 'Home/');
        }
        
     }

 ?>