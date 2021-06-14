<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Record extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper('../../common/helpers/thai_date');
        // $this->load->model('Record_model','Record');

		$this->load->model('Lab_model','Lab');
        $this->load->model('File_model','File');

        $config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
        $config['max_size']      = 256000; 
        $this->load->library('upload', $config);

    }
    
    function index(){
		
    }

    function records($checkup_id){

		$this->data['checkup_id'] = $checkup_id;
		$this->data['labs'] = $this->Lab->getLabs();
		// $records = $this->Record->getRecords($checkup_id);
		// $this->data['records'] = $records;
		// $this->data['med_historys'] = json_decode($records->medical_history);
		// $this->data['examinations'] = json_decode($records->examination);
		// $this->data['exam_results'] = json_decode($records->exam_result);
		// $this->data['lab_results'] = json_decode($records->lab_results);
		// $this->data['xray_results'] = json_decode($records->xray_results);
		// $this->data['ekg_results'] = json_decode($records->ekg_results);
		// $this->data['summary_results'] = json_decode($records->summary_results);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "ประวัติสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/records_view'), array('record/records_script'));    
    }

	
    function recordsLocation($location_id, $record_date = NULL){
		if($record_date == NULL){
        	$this->data['records'] = $this->Record->getRecordsLocationDate($location_id, date("Y-m-d", time()));
		}
		else{
			$this->data['records'] = $this->Record->getRecordsLocationDate($location_id, $record_date);
		}

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Record/records/'. $record_date);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/records_view'), array());    
	}

    function record($record_id){
        $this->data['record_id'] = $record_id;
        $this->data['record'] = $this->Record->getRecord($record_id);
        $this->data['record_persons'] = $this->RecordPerson->getRecordPersons($record_id);
        $this->data['record_persons_with_files'] = $this->RecordPerson->getRecordPersonsWithFiles($record_id);
        $this->data['files'] = $this->File->getRecordFiles($record_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Record/records/');  
        $this->breadcrumb->add('รายละเอียดการตรวจสุขภาพ',   base_url().'Record/record/' . $record_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดการตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/record_view'), array());    
    }
    

    function addRecord(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['packages'] = $this->Package->getPackages();
		$this->data['locations'] = $this->Location->getLocations();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Record/records');    
        $this->breadcrumb->add('เพิ่ม การตรวจสุขภาพ',   base_url().'Record/addRecord');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/record_form_view'), array('record/record_form_script'));      
    }

    function addRecordDo(){
        
        $result = $this->Record->addRecord();

        if(!$result){
            $this->addRecord();
        }else{
            $this->records();
            
        }
        
    }

    function updateRecord($record_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";

		$this->data['packages'] = $this->Package->getPackages();
		$this->data['locations'] = $this->Location->getLocations();

        $this->data['record_id'] = $record_id;
        $this->data['record'] = $this->Record->getRecord($record_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Record/records');    
        $this->breadcrumb->add('แก้ไข การตรวจสุขภาพ',   base_url().'Record/updateRecord/' . $record_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/record_form_view'), array('record/record_form_script'));      

    }


	function serviceGetLabMeaning($lab_id, $value){
		$lab_meaning = $this->Lab->getLabMeaning($lab_id, $value);
		echo json_encode($lab_meaning);
	}
 }
 ?>
