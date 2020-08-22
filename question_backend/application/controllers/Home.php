<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "หน้าแรก";
        $this->loadData();
        $this->loadView(array("home_view"));
    }
    
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('/Login');
    }
    
 }
 ?>