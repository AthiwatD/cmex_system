<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends Node_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Site_model','Site');
		$this->load->model('Department_model','Department');
        // $this->load->model('Board_model','Board');
    }
    
    function index(){
        // $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        // $this->data['breadcrumb'] = $this->breadcrumb->output();
        // $this->data['head_title'] = "ระบบคิว";

        // $this->loadData();
        // $this->loadViewWithScript(array('home_view'), array());    

		$this->sites();
    }

	function sites(){
		$sites = $this->Site->getSites();
        $this->data['sites'] = $sites;
        $this->data['head_title'] = "เลือกศูนย์";

        $this->breadcrumb->add('เลือกศูนย์', base_url() .'Home/sites');     
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->loadData();
        $this->loadViewWithScript(array('sites_view'), array());   
	}

	function departments($site_id){
		$departments = $this->Department->getDepartments($site_id);
		$this->data['site_id'] = $site_id;
        $this->data['departments'] = $departments;
        $this->data['head_title'] = "เลือกแผนก";

        $this->breadcrumb->add('เลือกศูนย์', base_url() .'Home/sites');    
		$this->breadcrumb->add('เลือกแผนก', base_url() .'Home/departments/' . $site_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->loadData();
        $this->loadViewWithScript(array('departments_view'), array());   
	}

    public function do_logout(){
        $this->session->sess_destroy();
        redirect('/Home');
        // header("location:" .  base_url() . 'Home/');
    }
    
 }
 ?>
