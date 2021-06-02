<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Checkup extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Checkup_model','Checkup');
		$this->load->model('Package_model','Package');
		$this->load->model('Location_model','Location');
        $this->load->model('File_model','File');

        $config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
        $config['max_size']      = 256000; 
        $this->load->library('upload', $config);

    }
    
    function index(){
		$this->checkups();
    }

    function checkups($checkup_date = NULL){
		if($checkup_date == NULL){
        	$this->data['checkups'] = $this->Checkup->getCheckupsDate(date("Y-m-d", time()));
		}
		else{
			$this->data['checkups'] = $this->Checkup->getCheckupsDate($checkup_date);
		}

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups/'. $checkup_date);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkups_view'), array());    
    }

	
    function checkupsLocation($location_id, $checkup_date = NULL){
		if($checkup_date == NULL){
        	$this->data['checkups'] = $this->Checkup->getCheckupsLocationDate($location_id, date("Y-m-d", time()));
		}
		else{
			$this->data['checkups'] = $this->Checkup->getCheckupsLocationDate($location_id, $checkup_date);
		}

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups/'. $checkup_date);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkups_view'), array());    
	}

    function checkup($checkup_id){
        $this->data['checkup_id'] = $checkup_id;
        $this->data['checkup'] = $this->Checkup->getCheckup($checkup_id);
        $this->data['checkup_persons'] = $this->CheckupPerson->getCheckupPersons($checkup_id);
        $this->data['checkup_persons_with_files'] = $this->CheckupPerson->getCheckupPersonsWithFiles($checkup_id);
        $this->data['files'] = $this->File->getCheckupFiles($checkup_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups/');  
        $this->breadcrumb->add('รายละเอียดการตรวจสุขภาพ',   base_url().'Checkup/checkup/' . $checkup_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดการตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkup_view'), array());    
    }
    

    function addCheckup(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['packages'] = $this->Package->getPackages();
		$this->data['locations'] = $this->Location->getLocations();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups');    
        $this->breadcrumb->add('เพิ่ม การตรวจสุขภาพ',   base_url().'Checkup/addCheckup');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkup_form_view'), array('checkup/checkup_form_script'));      
    }

    function addCheckupDo(){
        
        $result = $this->Checkup->addCheckup();

        if(!$result){
            $this->addCheckup();
        }else{
            $this->checkups();
            
        }
        
    }

    function updateCheckup($checkup_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";

		$this->data['packages'] = $this->Package->getPackages();
		$this->data['locations'] = $this->Location->getLocations();

        $this->data['checkup_id'] = $checkup_id;
        $this->data['checkup'] = $this->Checkup->getCheckup($checkup_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups');    
        $this->breadcrumb->add('แก้ไข การตรวจสุขภาพ',   base_url().'Checkup/updateCheckup/' . $checkup_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkup_form_view'), array('checkup/checkup_form_script'));      

    }
    
    function updateCheckupDo(){
        $result = $this->Checkup->updateCheckup();
        if(!$result){
            $this->checkups(); 
        }else{
            $this->checkups(); 
        }
    }

    function deleteCheckupDo($checkup_id){
        
        $result = $this->Checkup->deleteCheckup($checkup_id);
        
        if(!$result){
            $this->checkups(); 
        }else{
            $this->checkups(); 
        }
    }

 }
 ?>
