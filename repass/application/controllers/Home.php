<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class Home extends MY_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Repass_model','RepassModel');
        }
        
        function index(){
            $this->breadcrumb->add('หน้าหลัก', base_url());
            $this->breadcrumb->add('ข้อมูลผู้ใช้',   base_url().'Repass/repass');
            $this->data['breadcrumb'] = $this->breadcrumb->output();
            
            $this->data['system']="b";
            $this->data['page']="home";
            $this->data['method']="view";
            $this->data['head_title'] = "ระบบจัดการรหัสผ่าน";
            $this->data['numot']=$this->session->numot;
            $this->data['TB']=$this->RepassModel->getTBs($this->session->numot);
            $this->data['SEV']=$this->RepassModel->getSEVs($this->session->numot);
            $this->data['error']=$this->db->error();
            $this->loadData();
            $this->loadViewWithScript(array('repass/repass_view'), array());
        }

        public function do_logout(){
            $this->session->sess_destroy();
            $url=base_url(); //[ton][24/04/2564][create and use $url]
            redirect($url);
        }
        
     }

 ?>