<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Recruit extends MY_Controller{

		public function __contruct(){
			parent ::__contruct();
			
			$this->load->model('Recruit_model','RecruitModel');
			$this->load->helper('../../common/helpers/thai_date');
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');

			// [config file]
			$config['upload_path']   = './uploads/'; 
	        $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
	        $config['max_size']      = 256000; 
	        $this->load->library('upload', $config);
		}

		public function destruct() {
			parent ::__destruct();
		}

		public function index($publish_id=null){
			// if($publish_id!=null) $this->recruit($publish_id);
			// else $this->recruit();
		}

		function addRecruit(){
			$this->breadcrumb->add('หน้าหลัก', base_url() .'Home');
	        $this->breadcrumb->add('เพิ่ม ประกาศรับสมัครงาน',   base_url().'addRecruit'); 

			$this->data['error']=$this->db->error();
			$this->data['add']="add";
			$this->data['head_title'] = "เพิ่ม ประกาศรับสมัครงาน";
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            $publish_statuses=unserialize(PUBLISH_STATUSES);
            $this->data['publish_statuses']=$publish_statuses;

            $this->loadData();
            $this->loadViewWithScript(array('recruit/recruit_form_view'), array('recruit/recruit_form_script'));
		}

		function addRecruitProcess(){
			$formDataHd=array();
			$formDataDt=array();
			$formDataFiles=array();
			$response=array();
			// $response['come kk'];
			// echo json_encode($response);
			exit();
			if(!empty($_FILES['publish_dt_file']['name']) && count(array_filter($_FILES['publish_dt_file']['name']))>0 ){
				//[setting files][dt]
				for($i=0;$i<count(array_filter($_FILES['publish_dt_file']['name']));$i++){
					$_FILES['files']['name']		=$_FILES['publish_dt_file']['name'][$i];
					$_FILES['files']['tmp_name']	=$_FILES['publish_dt_file']['tmp_name'][$i];
					$_FILES['files']['type']		=$_FILES['publish_dt_file']['type'][$i];
					$_FILES['files']['size']		=$_FILES['publish_dt_file']['size'][$i];
					$_FILES['files']['error']		= $_FILES['publish_dt_file']['error'][$i];

					$config['upload_path']   = './uploads/';
	                $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
	                $config['max_size']      = 256000; 
	                $config['upload_path'] 	 = './uploads/';
	                $config['max_width'] 	 = '4096';
	                $config['max_height'] 	 = '4096';

	                $this->uploadinitialize($config);
	                if(!$this->upload->do_upload()) $files_error=array('files_error'=>$this->upload->display_errors());
	                else $formArrayFiles[]=$this->upload->data();
				}

				//[insert hd][hd]
				if(isset($_POST['ward_code'])) $formArrayHD['ward_code']=$this->security->xss_clean($this->input->post('ward_code'));
				if(isset($_POST['position_id'])) $formArrayHD['position_id']=$this->security->xss_clean($this->input->post('position_id'));
				if(isset($_POST['position_type_id'])) $formArrayHD['position_type_id']=$this->security->xss_clean($this->input->post('position_type_id'));
				if(isset($_POST['start_date'])) $formArrayHD['start_date']=$this->security->xss_clean($this->input->post('start_date'));
				if(isset($_POST['start_time'])) $formArrayHD['start_time']=$this->security->xss_clean($this->input->post('start_time'));
				if(isset($_POST['end_date'])) $formArrayHD['end_date']=$this->security->xss_clean($this->input->post('end_date'));
				if(isset($_POST['end_time'])) $formArrayHD['end_time']=$this->security->xss_clean($this->input->post('end_time'));
				if(isset($_POST['publish_name'])) $formArrayHD['publish_name']=$this->security->xss_clean($this->input->post('publish_name'));
				if(isset($_POST['publish_status'])) $formArrayHD['publish_status']=$this->security->xss_clean($this->input->post('publish_status'));
				if(isset($_POST['publish_remark'])) $formArrayHD['publish_remark']=$this->security->xss_clean($this->input->post('publish_remark'));
				if(isset($_POST['position_number'])) $formArrayHD['position_number']=$this->security->xss_clean($this->input->post('position_number'));
				if(isset($_POST['position_rate'])) $formArrayHD['position_rate']=$this->security->xss_clean($this->input->post('position_rate'));
				if(isset($_POST['position_amount'])) $formArrayHD['position_amount']=$this->security->xss_clean($this->input->post('position_amount'));
				// [exam1_status exam2_status exam3_status][hd]
				$formArrayDT['exam1_status'] = isset($_POST['exam1_status'])? $_POST['exam1_status']=="on" ? "Y" : "N" : null;
				$formArrayDT['exam2_status'] = isset($_POST['exam2_status'])? $_POST['exam2_status']=="on" ? "Y" : "N" : null;
				$formArrayDT['exam3_status'] = isset($_POST['exam3_status'])? $_POST['exam3_status']=="on" ? "Y" : "N" : null;
				//[exam_date][hd]
				if(isset($_POST['exam1_date'])) $formArrayHD['exam1_date']=$this->security->xss_clean($this->input->post('exam1_date'));
				if(isset($_POST['exam1_publish_date'])) $formArrayHD['exam1_publish_date']=$this->security->xss_clean($this->input->post('exam1_publish_date'));
				if(isset($_POST['exam2_date'])) $formArrayHD['exam2_date']=$this->security->xss_clean($this->input->post('exam2_date'));
				if(isset($_POST['exam2_publish_date'])) $formArrayHD['exam2_publish_date']=$this->security->xss_clean($this->input->post('exam2_publish_date'));
				if(isset($_POST['exam3_date'])) $formArrayHD['exam3_date']=$this->security->xss_clean($this->input->post('exam3_date'));
				if(isset($_POST['exam3_publish_date'])) $formArrayHD['exam3_publish_date']=$this->security->xss_clean($this->input->post('exam3_publish_date'));
				
				//[insert dt][dt]
				if(isset($_POST['publish_dt_id'])) $formArrayDT['publish_dt_id']=$this->security->xss_clean($this->input->post('publish_dt_id'));
				if(isset($_POST['publish_dt_name'])) $formArrayDT['publish_dt_name']=$this->security->xss_clean($this->input->post('publish_dt_name'));
				if(isset($_POST['publish_dt_date'])) $formArrayDT['publish_dt_date']=$this->security->xss_clean($this->input->post('publish_dt_date'));

				if(!empty($formArrayDT['publish_dt_name'])){
					//[get max hd id]
					$sql="select max(publish_hd_id) as max_hd_id from rc_publish_hd";
					$max_hd_id=$this->db->query($sql)->row()->max_hd_id;
					$max_hd_id+=1;
					$countloopdt=1;
					foreach($formArrayDT['publish_dt_name'] as $index =>$publish_dt_name){
						$dataDt=array(
							'publish_hd_id'=>$max_hd_id[$index],
							'publish_dt_id'=>$countloopdt[$index],
							'publish_dt_name'=>$formArrayDT['publish_dt_name'][$index],
							'publish_dt_date'=>$formArrayDT['publish_dt_date'][$index]
						);
						$countloopdt+=1;
					}
				}
			
				//[insert files]
				// $isnert_status=$this->RecruitModel->addRecruit($formArrayHD,$dataDt,$formArrayFiles);
				if(!$isnert_status) $response['insert_error']="process isnert error.";
				else $response['insert_error']="process isnert complete.";

				if($result) $this->recruit(); else $this->addRecruit();

				echo json_encode($response);
			}else{
				$response['files_error']="files not enter.";
				echo json_encode($response);
			}
		}
		

	}
?>
