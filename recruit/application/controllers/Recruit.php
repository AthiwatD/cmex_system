<?php
	/*====================================================================================================== 
		Create by  : Athiwat Duliganon
 		Create Date: 05/04/2564
 		Description: Add Controller Class Recruit.
	======================================================================================================*/

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 	class Recruit extends MY_Controller{

    	public function __construct(){
    		parent::__construct();
			$this->load->model('Recruit_model','RecruitModel');
			
			$config['upload_path']   = './uploads/';
	        $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv';
	        $config['max_size']      = 256000;
	        $this->load->library('upload', $config);
		}

		//[Athiwat][01/07/2564][add funcion check permission active users]
		public function check_userPermission(){
			$permission_status=false;
			$activeUsers=unserialize(ACTIVE_USERS);
			foreach($activeUsers as $user){
					if($user==$this->session->numot) $permission_status=true;
			}
        	return $permission_status;
    	}

		function index($publish_id=null,$iframe=true){
			if((!isset($this->session->validated)) || (!$this->session->validated)){	//[ton][23/04/2564][add frontend recruit]
				if($iframe) $this->recruit_iframe_front(); 								//[ton][13/05/2564][add iframe frontend recruit]
			 	else $this->recruits_front();
			}else if($publish_id==null){ 												//[ton][23/04/2564][add blackend recruit]
				if($this->check_userPermission()){ 										//[Athiwat][01/07/2564][add check active users]
					$this->recruits();
				}else{
					$this->session->set_flashdata('failure','User account cannot access system.');
					$direct_link=base_url()."Login";
					redirect($direct_link);
				}				 															
			}else $this->updateRecruit($publish_id); 									//[ton][22/04/2564][add else to updateRecruit]
		}

		//[ton][13/05/2564][add iframe view]
		function recruit_iframe_front(){
			$this->data['system']= "frontend";
			$this->data['iframe']= true;
			$this->data['method']="view";
            $this->data['breadcrumb'] = $this->breadcrumb->output();
            $this->data['recruits']=$this->RecruitModel->getRecruitHds();
            $this->data['head_title'] = "";

            $this->loadData();
            $this->front_loadViewWithScript(array('recruit/recruits_iframe_view'),array());
		}

		// [ton][24/04/2564][Add control Frontend Recruit]
		function recruits_front(){
			// $this->breadcrumb->add('หน้าหลัก', base_url());
            // $this->breadcrumb->add('ประกาศรับสมัคร',   base_url().'Recruit/recruits');
            $this->data['method']="view";
            $this->data['breadcrumb'] = $this->breadcrumb->output();
            $this->data['recruits']=$this->RecruitModel->getRecruitHds();
            $this->data['head_title'] = "ประกาศรับสมัคร";

            $this->loadData();
            $this->front_loadViewWithScript(array('recruit/recruits_view'),array());
		}

		function recruit($publish_hd_id,$system){
			if($system=="backend") $this->breadcrumb->add('หน้าหลัก', base_url());
            if($system=="backend") $this->breadcrumb->add('ประกาศรับสมัคร',   base_url().'Recruit/recruits');
            if($system=="backend") $this->breadcrumb->add('รายละเอียดประกาศรับสมัคร',   base_url().'Recruit/recruit/'.$publish_hd_id.'/'.$system);
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            $this->data['error']=$this->db->error();
			$this->data['method']="view_detail";
			$this->data['system']= $system=="backend"? "backend":"frontend";
			$this->data['head_title'] = "รายละเอียดประกาศรับสมัคร";
			$this->data['head_title_s1'] = "ข้อมูลประกาศรับสมัคร";
			$this->data['publish_hd_id']=$publish_hd_id;

			$this->data['recruitHd']=$this->RecruitModel->getRecruitHd($publish_hd_id);
			$this->data['recruitDt']=$this->RecruitModel->getRecruitDt($publish_hd_id);
			$this->data['recruitFile']=$this->RecruitModel->getRecruitFile($publish_hd_id);
            $this->loadData();

            if($system=="backend") $this->loadViewWithScript(array('recruit/recruit_view'), array());
            else if($system=="frontend"){
            	// [add view]
            	$formArrayHD=array();
            	$sql="SELECT viewed from rc_publish_hd where publish_hd_id=".$publish_hd_id;
            	$viewed=$this->db->query($sql)->row()->viewed;
            	$formArrayHD["viewed"]=$viewed+=1;

            	$result=$this->RecruitModel->addRecruitAudience($publish_hd_id,$formArrayHD);
            	if($result)$this->front_loadViewWithScript(array('recruit/recruit_view'), array());	
            } 
		}

		function recruits(){
            $this->breadcrumb->add('หน้าหลัก', base_url());
            $this->breadcrumb->add('ประกาศรับสมัคร',   base_url().'Recruit/recruits');

            $this->data['method']="view";
            $this->data['breadcrumb'] = $this->breadcrumb->output();
            $this->data['recruits']=$this->RecruitModel->getRecruitHds();
            $this->data['head_title'] = "ประกาศรับสมัคร";

            $this->loadData();
            $this->loadViewWithScript(array('recruit/recruits_view'),array());
		}
		
		// ------------------------------ [Delete process] ------------------------------			
		function deleteRecruitProcess($publish_hd_id,$numot){
			// echo "cl deleteRecruitProcess p is : ".$publish_hd_id." and  numot : ".$numot;
			date_default_timezone_set('Asia/Bangkok');
			$formArrayHD=array(); $formArrayDT=array();
			
			$formArrayHD['deleted']=1; $formArrayDT['deleted']=1;
			$formArrayHD['modify_date']=date('Y-m-d H:i:s');
			$formArrayDT['modify_date']=date('Y-m-d H:i:s');
			$formArrayHD['modify_by']=$numot;
			$formArrayDT['modify_by']=$numot;

			if($this->RecruitModel->deleteRecruit($publish_hd_id,$formArrayHD,$formArrayDT)) $response['delete_status']=true;
			else $response['delete_status']=false;

			echo json_encode($response);
		}

		// ------------------------------ [Update process] ------------------------------
		function updateRecruitProcess($publish_hd_id,$numot){
			$formArrayHD=array(); $formArrayDT=array();
			$formUploadFiles=array(); $formArrayFiles=array();
			date_default_timezone_set('Asia/Bangkok');

			//[setting upload files dt to service]
			if(!empty($_FILES["publish_dt_file"]["name"]) && count(array_filter($_FILES["publish_dt_file"]["name"]))>0){
				// echo "C > updateRecruitProcess > !empty file : ".$publish_hd_id." and numot : ".$numot."<br>";
				for($i=0;$i<count(array_filter($_FILES["publish_dt_file"]["name"]));$i++){
					// [Athiwat][01/07/2564][add process substring filename]
					if(strlen($_FILES['publish_dt_file']['name'][$i])>SUBSTR_MAXIMUM){
						$maxfile 	=strlen($_FILES['publish_dt_file']['name'][$i]);
	                    $type 		=strlen($_FILES['publish_dt_file']['name'][$i])-SUBSTR_FILETYPE;
	                    $typefile 	=substr($_FILES['publish_dt_file']['name'][$i],$type,$maxfile);
	                    $name		=substr($_FILES['publish_dt_file']['name'][$i],SUBSTR_MINIMUM,$type);
	                    $filename   =mb_substr(substr($name,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name,SUBSTR_MINIMUM,SUBSTR_MAXIMUM))-1,CHA_UTF8 );
	                    $filename   =$filename."".$typefile;
						$_FILES['files']['name']=$filename;
					}else $_FILES['files']['name']	=$_FILES['publish_dt_file']['name'][$i];

					$_FILES['files']['tmp_name']	=$_FILES['publish_dt_file']['tmp_name'][$i];
					$_FILES['files']['type']		=$_FILES['publish_dt_file']['type'][$i];
					$_FILES['files']['size']		=$_FILES['publish_dt_file']['size'][$i];
					$_FILES['files']['error']		= $_FILES['publish_dt_file']['error'][$i];

					$config['upload_path']   = './uploads/';
	                $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv';
	                $config['max_size']      = 256000; 
	                // $config['upload_path'] 	 = './uploads/'; [Athiwat][22/06/2564][add comment]
	                $config['max_width'] 	 = '4096';
	                $config['max_height'] 	 = '4096';
					
					$this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('files')){$files_error=array('files_error'=>$this->upload->display_errors()); $response['fiels_status']=0;}
	                else{$formUploadFiles[]=$this->upload->data(); $response['fiels_status']=1;}
				}
			}
			// echo "C > updateRecruitProcess > !issue file : ".$publish_hd_id." and numot : ".$numot;
			//[receive dt,files]
			if(!empty($_POST['publish_dt_id'])) $formArrayDT['publish_dt_id']=$this->security->xss_clean($this->input->post('publish_dt_id'));
			if(!empty($_POST['publish_dt_name'])) $formArrayDT['publish_dt_name']=$this->security->xss_clean($this->input->post('publish_dt_name'));
			if(!empty($_POST['publish_dt_date'])) $startdate_dt=$this->security->xss_clean($this->input->post('publish_dt_date'));
			if(!empty($_POST['publish_dt_time'])) $starttime_dt=$this->security->xss_clean($this->input->post('publish_dt_time'));
			//[setting dt,files]
			if(!empty($formArrayDT['publish_dt_name'])){
				$sql="SELECT max(publish_dt_id) as dt_id from rc_publish_dt where publish_hd_id ='$publish_hd_id'";
				$dt_id=$this->db->query($sql)->row()->dt_id;
				$dt_id+=1;
				for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
					// [set formArrayDT]
					$formArrayDT['create_by'][$i]=$numot;
					$formArrayDT['publish_hd_id'][$i]=$publish_hd_id;
					$formArrayDT['publish_dt_id'][$i]=$dt_id;
					$formArrayDT['start_date'][$i]=date("Y-m-d H:i:s",strtotime("$startdate_dt[$i] $starttime_dt[$i]")); //[ton][28/04/2564][add start_date]
					$formArrayDT['create_date'][$i]=date("Y-m-d H:i:s");
					// [set formArrayFiles]
					$formArrayFiles['publish_hd_id'][$i]=$publish_hd_id;
					$formArrayFiles['publish_dt_id'][$i]=$dt_id;
					$formArrayFiles['file_name'][$i]=$formUploadFiles[$i]['file_name'];
					$formArrayFiles['file_date'][$i]=date('Y-m-d H:i:s');
					$dt_id+=1;
				}
			}

			//[setting hd]
			if(!empty($_POST['ward_code'])) $formArrayHD['ward_code']=$this->security->xss_clean($this->input->post('ward_code'));
			if(!empty($_POST['position_id'])) $formArrayHD['position_id']=$this->security->xss_clean($this->input->post('position_id'));
			if(!empty($_POST['position_type_id'])) $formArrayHD['position_type_id']=$this->security->xss_clean($this->input->post('position_type_id'));
			if(!empty($_POST['publish_name'])) $formArrayHD['publish_name']=$this->security->xss_clean($this->input->post('publish_name'));
			if(!empty($_POST['publish_status'])) $formArrayHD['publish_status']=$this->security->xss_clean($this->input->post('publish_status'));
			if(!empty($_POST['position_number'])) $formArrayHD['position_number']=$this->security->xss_clean($this->input->post('position_number'));
			if(!empty($_POST['position_rate'])) $formArrayHD['position_rate']=$this->security->xss_clean($this->input->post('position_rate'));

			if(isset($_POST['publish_remark'])) $formArrayHD['publish_remark']=$this->security->xss_clean($this->input->post('publish_remark'));    // [ton][22/04/2564][allow "" value]
			if(isset($_POST['position_amount'])) $formArrayHD['position_amount']=$this->security->xss_clean($this->input->post('position_amount')); // [ton][22/04/2564][allow "" value]

			// [exam1_status exam2_status exam3_status][hd]
			$formArrayHD['exam1_status'] = !empty($_POST['exam1_status'])? $_POST['exam1_status']=="on" ? "Y" : "N" : null;
			$formArrayHD['exam2_status'] = !empty($_POST['exam2_status'])? $_POST['exam2_status']=="on" ? "Y" : "N" : null;
			$formArrayHD['exam3_status'] = !empty($_POST['exam3_status'])? $_POST['exam3_status']=="on" ? "Y" : "N" : null;
			//[exam_date][hd]
			if(!empty($_POST['exam1_date'])) $formArrayHD['exam1_date']=$this->security->xss_clean($this->input->post('exam1_date'));
			if(!empty($_POST['exam1_publish_date'])) $formArrayHD['exam1_publish_date']=$this->security->xss_clean($this->input->post('exam1_publish_date'));
			if(!empty($_POST['exam2_date'])) $formArrayHD['exam2_date']=$this->security->xss_clean($this->input->post('exam2_date'));
			if(!empty($_POST['exam2_publish_date'])) $formArrayHD['exam2_publish_date']=$this->security->xss_clean($this->input->post('exam2_publish_date'));
			if(!empty($_POST['exam3_date'])) $formArrayHD['exam3_date']=$this->security->xss_clean($this->input->post('exam3_date'));
			if(!empty($_POST['exam3_publish_date'])) $formArrayHD['exam3_publish_date']=$this->security->xss_clean($this->input->post('exam3_publish_date'));
			
			if(!empty($_POST['start_date'])) $startdate=$this->security->xss_clean($this->input->post('start_date'));
			if(!empty($_POST['start_time'])) $starttime=$this->security->xss_clean($this->input->post('start_time'));
			if(!empty($_POST['end_date'])) $enddate=$this->security->xss_clean($this->input->post('end_date'));
			if(!empty($_POST['end_time'])) $endtime=$this->security->xss_clean($this->input->post('end_time'));
			$formArrayHD['start_date']=date("Y-m-d H:i:s",strtotime("$startdate $starttime"));
			$formArrayHD['end_date']=date("Y-m-d H:i:s",strtotime("$enddate $endtime"));

			// [#set signature publis hd]
			$formArrayHD['modify_by']=$numot;
			$formArrayHD['modify_date']=date('Y-m-d H:i:s');

			// [#update hd]
			$status_dt=true; $status_files=true;
			$update_hd_status=$this->RecruitModel->updateRecruitHd($formArrayHD,$publish_hd_id);
			// [#update insert new dt and files]
			if(!empty($formArrayDT['publish_dt_name'])){
				for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
					$dataDt=array(	"publish_hd_id"=>$formArrayDT['publish_hd_id'][$i],
									"publish_dt_id"=>$formArrayDT['publish_dt_id'][$i],
									"publish_dt_name"=>$formArrayDT['publish_dt_name'][$i],
									"start_date"=>$formArrayDT['start_date'][$i], //[ton][28/04/2564][add start_date]
									"create_date"=>$formArrayDT['create_date'][$i],
									"create_by"=>$formArrayDT['create_by'][$i]
					);
					$dataFile=array( "publish_hd_id"=>$formArrayFiles['publish_hd_id'][$i],
									 "publish_dt_id"=>$formArrayFiles['publish_dt_id'][$i],
									 "file_name"=>$formArrayFiles['file_name'][$i],
									 "file_date"=>$formArrayFiles['file_date'][$i]
					);
					$insert_dt_status=$this->RecruitModel->addRecruitDt($dataDt);  
					$insert_file_status=$this->RecruitModel->addRecruitFile($dataFile);
					if(!$insert_dt_status) $status_dt=false;
					if(!$insert_file_status) $status_files=false;
				}
			}

			//[set session result for the update form]
			if(!$update_hd_status && !$status_dt && !$status_files){
				$this->session->set_flashdata('failure','อัพเดตข้อมูลไม่สำเร็จ !');
				$response['update_status']="process update error.";
			}else{
				$response['update_status']="process update complete.";
				$this->session->set_flashdata('success','อัพเดตข้อมูลสำเร็จ !');
				redirect(base_url());
			}

		}

		function deleteRecruitDt($hd_id,$dt_id,$numot){
			date_default_timezone_set('Asia/Bangkok');
			$formArrayDT=array();

			$formArrayDT['deleted']=1;
			$formArrayDT['modify_date']=date('Y-m-d H:i:s');
			$formArrayDT['modify_by']=$numot;

			if($this->RecruitModel->deleteRecruitDt($hd_id,$dt_id,$formArrayDT)) $response['delete_status']=true;
			else $response['delete_status']=false;

			echo json_encode($response);
		}

		function updateRecruit($publish_hd_id){
			$this->breadcrumb->add('หน้าหลัก', base_url());
			$this->breadcrumb->add('ประกาศรับสมัครงาน',   base_url().'Recruit/recruits');
	        $this->breadcrumb->add('แก้ไข ประกาศรับสมัครงาน',   base_url().'Recruit/updateRecruit/'.$publish_hd_id);
	        $this->data['breadcrumb'] = $this->breadcrumb->output();

			$this->data['error']=$this->db->error();
			$this->data['method']="update";
			$this->data['head_title'] = "แก้ไข ประกาศรับสมัครงาน";
			$this->data['publish_hd_id']=$publish_hd_id;

			$this->data['recruitHd']=$this->RecruitModel->getRecruitHd($publish_hd_id);
			$this->data['recruitDt']=$this->RecruitModel->getRecruitDt($publish_hd_id);
			$this->data['recruitFile']=$this->RecruitModel->getRecruitFile($publish_hd_id);
            
            // [add constants publish status]
            $publish_statuses=unserialize(PUBLISH_STATUSES);
            $this->data['publish_statuses']=$publish_statuses;

            $this->loadData();
            $this->loadViewWithScript(array('recruit/recruit_form_view'), array('recruit/recruit_form_script'));
		}

		// ------------------------------ [Add process] ------------------------------
		function addRecruit(){
			$this->breadcrumb->add('หน้าหลัก', base_url());
			$this->breadcrumb->add('ประกาศรับสมัครงาน',   base_url().'Recruit/recruits');
	        $this->breadcrumb->add('เพิ่ม ประกาศรับสมัครงาน',   base_url().'Recruit/addRecruit');
			$this->data['breadcrumb'] = $this->breadcrumb->output();

			$this->data['error']=$this->db->error();
			
			$this->data['method']="add";
			$this->data['head_title'] = "เพิ่ม ประกาศรับสมัครงาน";
            
            // [add constants publish status]
            $publish_statuses=unserialize(PUBLISH_STATUSES);
            $this->data['publish_statuses']=$publish_statuses;

            $this->loadData();
            $this->loadViewWithScript(array('recruit/recruit_form_view'), array('recruit/recruit_form_script'));
		}

		function addRecruitProcess($numot){
			if(!empty($_FILES["publish_dt_file"]["name"]) && count(array_filter($_FILES["publish_dt_file"]["name"]))>0){
				$formArrayHD=array();
				$formArrayDT=array();
				$formUploadFiles=array();
				$formArrayFiles=array();
				//[setting files][dt]
				for($i=0;$i<count(array_filter($_FILES["publish_dt_file"]["name"]));$i++){
					// [Athiwat][01/07/2564][add process substring filename]
					if(strlen($_FILES['publish_dt_file']['name'][$i])>SUBSTR_MAXIMUM){
						$maxfile 	=strlen($_FILES['publish_dt_file']['name'][$i]);
	                    $type 		=strlen($_FILES['publish_dt_file']['name'][$i])-SUBSTR_FILETYPE;
	                    $typefile 	=substr($_FILES['publish_dt_file']['name'][$i],$type,$maxfile);
	                    $name		=substr($_FILES['publish_dt_file']['name'][$i],SUBSTR_MINIMUM,$type);
	                    $filename   =mb_substr(substr($name,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name,SUBSTR_MINIMUM,SUBSTR_MAXIMUM))-1,CHA_UTF8 );
	                    $filename   =$filename."".$typefile;
						$_FILES['files']['name']=$filename;
					}else $_FILES['files']['name']	=$_FILES['publish_dt_file']['name'][$i];

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
					
					$this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('files')){$files_error=array('files_error'=>$this->upload->display_errors()); $response['fiels_status']=0;}
	                else{$formUploadFiles[]=$this->upload->data(); $response['fiels_status']=1;}
				}

				//[ton][30/04/2564][test can't isnert file]
				// print_r($formUploadFiles);
				// exit();

				//[insert hd][hd]
				if(!empty($_POST['ward_code'])) $formArrayHD['ward_code']=$this->security->xss_clean($this->input->post('ward_code'));
				if(!empty($_POST['position_id'])) $formArrayHD['position_id']=$this->security->xss_clean($this->input->post('position_id'));
				if(!empty($_POST['position_type_id'])) $formArrayHD['position_type_id']=$this->security->xss_clean($this->input->post('position_type_id'));
				if(!empty($_POST['publish_name'])) $formArrayHD['publish_name']=$this->security->xss_clean($this->input->post('publish_name'));
				if(!empty($_POST['publish_status'])) $formArrayHD['publish_status']=$this->security->xss_clean($this->input->post('publish_status'));
				if(!empty($_POST['publish_remark'])) $formArrayHD['publish_remark']=$this->security->xss_clean($this->input->post('publish_remark'));
				if(!empty($_POST['position_number'])) $formArrayHD['position_number']=$this->security->xss_clean($this->input->post('position_number'));
				if(!empty($_POST['position_rate'])) $formArrayHD['position_rate']=$this->security->xss_clean($this->input->post('position_rate'));
				if(!empty($_POST['position_amount'])) $formArrayHD['position_amount']=$this->security->xss_clean($this->input->post('position_amount'));

				// [exam1_status exam2_status exam3_status][hd]
				$formArrayHD['exam1_status'] = !empty($_POST['exam1_status'])? $_POST['exam1_status']=="on" ? "Y" : "N" : null;
				$formArrayHD['exam2_status'] = !empty($_POST['exam2_status'])? $_POST['exam2_status']=="on" ? "Y" : "N" : null;
				$formArrayHD['exam3_status'] = !empty($_POST['exam3_status'])? $_POST['exam3_status']=="on" ? "Y" : "N" : null;

				//[exam_date][hd]
				if(!empty($_POST['exam1_date'])) $formArrayHD['exam1_date']=$this->security->xss_clean($this->input->post('exam1_date'));
				if(!empty($_POST['exam1_publish_date'])) $formArrayHD['exam1_publish_date']=$this->security->xss_clean($this->input->post('exam1_publish_date'));
				if(!empty($_POST['exam2_date'])) $formArrayHD['exam2_date']=$this->security->xss_clean($this->input->post('exam2_date'));
				if(!empty($_POST['exam2_publish_date'])) $formArrayHD['exam2_publish_date']=$this->security->xss_clean($this->input->post('exam2_publish_date'));
				if(!empty($_POST['exam3_date'])) $formArrayHD['exam3_date']=$this->security->xss_clean($this->input->post('exam3_date'));
				if(!empty($_POST['exam3_publish_date'])) $formArrayHD['exam3_publish_date']=$this->security->xss_clean($this->input->post('exam3_publish_date'));
				
				// [#set signature publis hd]
				if(!empty($_POST['start_date'])) $startdate=$this->security->xss_clean($this->input->post('start_date'));
				if(!empty($_POST['start_time'])) $starttime=$this->security->xss_clean($this->input->post('start_time'));
				if(!empty($_POST['end_date'])) $enddate=$this->security->xss_clean($this->input->post('end_date'));
				if(!empty($_POST['end_time'])) $endtime=$this->security->xss_clean($this->input->post('end_time'));

				date_default_timezone_set('Asia/Bangkok'); // [#set timezone]
				$formArrayHD['start_date']=date("Y-m-d H:i:s",strtotime("$startdate $starttime"));
				$formArrayHD['end_date']=date("Y-m-d H:i:s",strtotime("$enddate $endtime"));
				$formArrayHD['create_date']=date('Y-m-d H:i:s');

				//[ton][19/04/2564][change num_ot]
				// $formArrayHD['create_by']=$formArrayHD['ward_code'];
				$formArrayHD['create_by']=$numot;

				//[setting dt]
				if(!empty($_POST['publish_dt_id'])) $formArrayDT['publish_dt_id']=$this->security->xss_clean($this->input->post('publish_dt_id'));
				if(!empty($_POST['publish_dt_name'])) $formArrayDT['publish_dt_name']=$this->security->xss_clean($this->input->post('publish_dt_name'));
				if(!empty($_POST['publish_dt_date'])) $startdate_dt=$this->security->xss_clean($this->input->post('publish_dt_date'));
				if(!empty($_POST['publish_dt_time'])) $starttime_dt=$this->security->xss_clean($this->input->post('publish_dt_time'));

				if(!empty($formArrayDT['publish_dt_name'])){
					//[get max hd id]
					$sql="select max(publish_hd_id) as max_hd_id from rc_publish_hd";
					$max_hd_id=$this->db->query($sql)->row()->max_hd_id;
					$max_hd_id+=1;
					//[set maxid and listno to formArrayDT ,formArrayFiles]
					$listno=1;
					for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
						// [set formArrayDT]
						$formArrayDT['publish_hd_id'][$i]=$max_hd_id;
						$formArrayDT['publish_dt_id'][$i]=$listno;
						$formArrayDT['start_date'][$i]=date("Y-m-d H:i:s",strtotime("$startdate_dt[$i] $starttime_dt[$i]")); //[ton][28/04/2564][add start_date]
						$formArrayDT['create_date'][$i]=date("Y-m-d H:i:s");
						
						//[ton][19/04/2564][change num_ot]
						// $formArrayDT['create_by'][$i]=$formArrayHD['ward_code'];
						$formArrayDT['create_by'][$i]=$numot;

						// [set formArrayFiles]
						$formArrayFiles['publish_hd_id'][$i]=$max_hd_id;
						$formArrayFiles['publish_dt_id'][$i]=$listno;
						$formArrayFiles['file_name'][$i]=$formUploadFiles[$i]['file_name'];
						$formArrayFiles['file_date'][$i]=date('Y-m-d H:i:s');
						$listno+=1;
					}
				}

				// print_r($formArrayHD); 
				// print_r($formArrayHD); print_r($formArrayDT); print_r($formArrayFiles); exit();
				// print_r($formArrayHD['exam1_status']);
				// echo "ccc : ".count($formArrayHD['exam1_status']);
				// exit();
				
				// [#insert hd,dt,files]
				$status_dt=true; $status_files=true;
				$isnert_hd_status=$this->RecruitModel->addRecruitHd($formArrayHD);

				for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
					$dataDt=array(	"publish_hd_id"=>$formArrayDT['publish_hd_id'][$i],
									"publish_dt_id"=>$formArrayDT['publish_dt_id'][$i],
									"publish_dt_name"=>$formArrayDT['publish_dt_name'][$i],
									"start_date"=>$formArrayDT['start_date'][$i], //[ton][28/04/2564][add start_date]
									"create_date"=>$formArrayDT['create_date'][$i],
									"create_by"=>$formArrayDT['create_by'][$i]
					);
					$dataFile=array( "publish_hd_id"=>$formArrayFiles['publish_hd_id'][$i],
									 "publish_dt_id"=>$formArrayFiles['publish_dt_id'][$i],
									 "file_name"=>$formArrayFiles['file_name'][$i],
									 "file_date"=>$formArrayFiles['file_date'][$i]
					);
					$insert_dt_status=$this->RecruitModel->addRecruitDt($dataDt);
					$insert_file_status=$this->RecruitModel->addRecruitFile($dataFile);
					if(!$insert_dt_status) $status_dt=false;
					if(!$insert_file_status) $status_files=false;
				}
				
				if(!$isnert_hd_status && !$status_dt && !$status_files){
					$this->session->set_flashdata('failure','เพิ่มข้อมูลไม่สำเร็จ !');
					$response['insert_status']="process insert error.";
				}else{
					$response['insert_status']="process insert complete.";
					$this->session->set_flashdata('success','เพิ่มข้อมูลสำเร็จ !');
					redirect(base_url());
				}				
			}
		}
	}
?>
