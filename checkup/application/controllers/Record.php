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

		$this->data['history_tab'] = "[]";
		$this->data['exam_tab'] = "[]";
		$this->data['input_lab_tab'] = "[]";
		$this->data['exam_result_tab'] = "[]";
		$this->data['exam_lab_tab'] = "[]";
		$this->data['exam_xray_tab'] = "[]";
		$this->data['exam_ekg_tab'] = "[]";
		$this->data['suggest_tab'] = "[]";

		if(!empty($records[0])){
			if(!empty($records[0]->history_tab)) {
				$this->data['history_tab'] = $records[0]->history_tab;
			}

			if(!empty($records[0]->exam_tab)) {
				$this->data['exam_tab'] = $records[0]->exam_tab;
			}

			if(!empty($records[0]->input_lab_tab)) {
				$this->data['input_lab_tab'] = $records[0]->input_lab_tab;
			}

			if(!empty($records[0]->exam_result_tab)) {
				$this->data['exam_result_tab'] = $records[0]->exam_result_tab;
			}

			if(!empty($records[0]->exam_lab_tab)) {
				$this->data['exam_lab_tab'] = $records[0]->exam_lab_tab;
			}

			if(!empty($records[0]->exam_xray_tab)) {
				$this->data['exam_xray_tab'] = $records[0]->exam_xray_tab;
			}

			if(!empty($records[0]->exam_ekg_tab)) {
				$this->data['exam_ekg_tab'] = $records[0]->exam_ekg_tab;
			}

			if(!empty($records[0]->suggest_tab)) {
				$this->data['suggest_tab'] = $records[0]->suggest_tab;
			}
		}
		
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
		$this->breadcrumb->add('หน้าหลัก', base_url() .'Record/records/' . $checkup_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "ประวัติสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/records_view'), array('record/records_script','common/record_script'));    
    }

	function recordFiles($checkup_id){

		$this->data['checkup_id'] = $checkup_id;
		$this->data['record_files'] = $this->File->getFiles($checkup_id);
		
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');  
		$this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups');   
		$this->breadcrumb->add('ไฟล์ตรวจสุขภาพ', base_url() .'Record/recordFiles/' . $checkup_id);    
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "ไฟล์รูปภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/record_files_view'), array('record/record_files_script'));    
    }

	function recordAddFiles($checkup_id){

		$this->data['checkup_id'] = $checkup_id;
		
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');  
		$this->breadcrumb->add('ไฟล์ตรวจสุขภาพ', base_url() .'Record/recordFiles/' . $checkup_id);    
		$this->breadcrumb->add('เพิ่มไฟล์ตรวจสุขภาพ', base_url() .'Record/recordAddFiles/' . $checkup_id); 
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "ไฟล์รูปภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('record/record_add_files_view'), array('record/record_add_files_script'));    
    }
	
	function serviceUploadImageFiles(){
		$checkup_id = $this->input->post("checkup_id");
		$tab_id = $this->input->post("tab_id");
		$images = $this->input->post("base_64_image");
		if((!empty($images) )){
			$destination_folder = $_SERVER['DOCUMENT_ROOT'].'/cmex_system/checkup/uploads/' . $tab_id . "/";
			for($i=0;$i<sizeof($images);$i++){
				$image = str_replace('data:image/png;base64,', '', $images[$i]);
				$image = str_replace(' ', '+', $image);
				$data = base64_decode($image);

				$source_img = imagecreatefromstring($data);

				$rotated_img = imagerotate($source_img, 90, 0); 

				$file_name=   $checkup_id . "_" . uniqid() . ".jpg";

				$imageSave = imagejpeg($rotated_img, $file_name, 10);

				imagedestroy($source_img);


				// $file_name =   $checkup_id . "_" . uniqid() . ".png";
				$file_url = $destination_folder . $file_name;
				echo $file_url . "<br>";
				$file = fopen($file_url, "w");

				if ($file) {
					fwrite($file, $data);
					fclose($file);
					echo $file . ": Success to save the file.";
					$result = $this->File->addFile($file_name, $file_url, $checkup_id, $tab_id);
					if($result){
						echo $file . ": Saved.";
					}
				}
				else{
					echo $file . ": Unable to save the file.";
				}
			}
		
		}else{
			echo "No Image";
		}
	}

	function testUpload($checkup_id){
		$this->data['checkup_id'] = $checkup_id;
		// $records = $this->Record->getRecords($checkup_id);
		// $this->data['records'] = $records;

		$this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->data['breadcrumb'] = $this->breadcrumb->output();

		$this->data['head_title'] = "ประวัติสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('test/test_upload_view'), array('test/test_upload_script'));    
	}

	function testUploadDo(){
		$images = $this->input->post('base_64_image');
		print_r($images);
		if((!empty($images)) ){
			$destination_folder = $_SERVER['DOCUMENT_ROOT'].'/cmex_system/checkup/uploads/';
			for($i=0;$i<sizeof($images);$i++){

				$image = str_replace('data:image/png;base64,', '', $images[$i]);
				$image = str_replace(' ', '+', $image);
				$data = base64_decode($image);
				$file_url = $destination_folder . "test_" . 34 . "_" . uniqid() . ".png";
				echo $file_url . "<br>";
				$file = fopen($file_url, "w");

				if ($file) {
					fwrite($file, $data);
					fclose($file);
					echo "Success: " . $file;
				}
				else{
					echo $file . ": Unable to save the file.";
				}
			}
		
		}else{
			echo "No Image";
		}
		// redirect("Record/testUpload/34");
	}

	function serviceTestUpload(){

		$images = $this->input->post("base_64_image");
		if((!empty($images) )){
			$destination_folder = $_SERVER['DOCUMENT_ROOT'].'/cmex_system/checkup/uploads/';
			for($i=0;$i<sizeof($images);$i++){
				$image = str_replace('data:image/png;base64,', '', $images[$i]);
				$image = str_replace(' ', '+', $image);
				$data = base64_decode($image);
				$file_url = $destination_folder . "test_" . 34 . "_" . uniqid() . ".png";
				echo $file_url . "<br>";
				$file = fopen($file_url, "w");

				if ($file) {
					fwrite($file, $data);
					fclose($file);
					echo $file . ": Success to save the file.";
				}
				else{
					echo $file . ": Unable to save the file.";
				}
			}
		
		}else{
			echo "No Image";
		}
	}

	function serviceGetLabMeaning($lab_id, $value){
		$lab_meaning = $this->Lab->getLabMeaning($lab_id, $value);
		echo json_encode($lab_meaning, JSON_UNESCAPED_UNICODE);
	}

	function serviceUpdateTab(){
		$data = $this->input->post();
		$checkup_id = $data['checkup_id'];
		$tab_id = $data['tab_id'];
		$input_data = $data['data'];
		$result = $this->Record->updateTab($checkup_id,$tab_id,$input_data);
		// echo "";
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}

	function serviceGetLab($checkup_id){
		$data = $this->input->post();
		$checkup_id = $data['checkup_id'];
		$lab_result = $this->Record->getLabResult($checkup_id);
		// print_r($lab_result->input_lab_tab);
		echo json_encode($lab_result->input_lab_tab);
	}

	function serviceDeleteFile(){
        $file_id = $this->input->post("file_id");
        $result = $this->File->deleteFile($file_id);
		echo $result;
    }
 }
 ?>
