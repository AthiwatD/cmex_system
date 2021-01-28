<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends MY_Controller{
    public function __construct(){
        parent::__construct();
        //$this->load->model('Meeting_model','Meeting');
        // $this->load->model('Board_model','Board');
    }
    
    function index(){
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->data['breadcrumb'] = $this->breadcrumb->output();
        $this->data['head_title'] = "ระบบเงินเดือน";

        $this->loadData();
        $this->loadViewWithScript(array('home_view'), array());    
    }


    public function do_logout(){
        $this->session->sess_destroy();
        redirect('/Home');
        // header("location:" .  base_url() . 'Home/');
    }
    
 }
 ?>