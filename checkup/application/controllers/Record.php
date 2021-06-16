<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Record extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Record_model','Record');

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
		$records = $this->Record->getRecords($checkup_id);
		$this->data['records'] = $records;
		// print_r($records);
		$this->data['history_tab'] = $records[0]->history_tab;
		// $this->data['exam_tab'] = $records->exam_tab;
		// $this->data['input_lab_tab'] = $records->input_lab_tab;
		// $this->data['exam_result_tab'] = $records->exam_result_tab;
		// $this->data['exam_lab_tab'] = $records->exam_lab_tab;
		// $this->data['exam_xray_tab'] = $records->exam_xray_tab;
		// $this->data['exam_ekg_tab'] = $records->exam_ekg_tab;
		// $this->data['suggest_tab'] = $records->suggest_tab;
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "ประวัติสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/records_view'), array('record/records_script','common/record_script'));    
    }

	function serviceGetLabMeaning($lab_id, $value){
		$lab_meaning = $this->Lab->getLabMeaning($lab_id, $value);
		echo json_encode($lab_meaning);
	}

	function serviceUpdateTab($checkup_id, $tab_id){
		$data = $this->input->post();
		$checkup_id = $data['checkup_id'];
		$tab_id = $data['tab_id'];
		$input_data = $data['data'];
		$result = $this->Record->updateTab($checkup_id,$tab_id,$input_data);
		echo json_encode($result);
	}

 }
 ?>
