<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    function __construct()
    {

        parent::__construct();

        //Initialization code that affects all controllers
        if($this->check_isvalidated()){
            $this->load->library('Breadcrumb');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->helper('cookie');
            $this->load->helper('../../common/helpers/thai_date');
        }
    }

    protected function loadData(){
        $this->data['session_username'] = $this->session->username;
        $this->data['session_name'] = $this->session->name;
        $this->data['session_position_name'] = $this->session->position_name;
        $this->data['session_center_name'] = $this->session->center_name;
        $this->data['session_center_abbre'] = $this->session->center_abbre;
        $this->data['validated'] = $this->session->validated;
    }
    
    protected function loadView($body_views,$body_scripts){
        $this->load->view('common/header', $this->data);
        $this->load->view('common/navbar', $this->data);
        $this->load->view('common/sidebar', $this->data);
        $this->load->view('common/main_head', $this->data);
        foreach($body_views as $body_view){
            $this->load->view($body_view, $this->data);
        }
        $this->load->view('common/footer',$this->data);
        foreach($body_scripts as $body_script){
            $this->load->view($body_script, $this->data);
        }
        $this->load->view('common/end',$this->data);
    }

    protected function check_isvalidated(){
        if((!isset($this->session->validated)) || (!$this->session->validated)){
            $this->load->view('login_view', $this->data);
            //redirect( base_url() . 'Login');
            return false;
        }else{
            //redirect( base_url() . 'Home');
            return true;
        }
    }

    protected function check_canAccess($class_name, $method_name){
        // $tmp = $class_name . "/" . $method_name;
        // if(in_array($tmp,$this->session->access, TRUE)){
        //     return true;
        // }
        header("location:javascript://history.go(-1)");
    }

}
