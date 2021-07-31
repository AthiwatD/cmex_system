<?php
/*====================================================================================================== 
	Create by  : Athiwat Duliganon
	Create Date: 21/06/2564
	Description: Add Controller Class Bookonline.
======================================================================================================*/

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 	class Bookonline extends MY_Controller{

    	public function __construct(){
    		parent::__construct();
    		date_default_timezone_set('Asia/Bangkok');
			$this->load->model('Bookonline_model','BookonlineModel');
			
			$config['max_size']      = 256000;
            $config['max_width'] 	 = '4096';
            $config['max_height'] 	 = '4096';
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv';
            
	        $this->load->library('upload', $config);
		}

		//[Athiwat][29/06/2564][add funcion check permission active users]
		public function check_userPermission($sys){
			$permission_status=false;
			$activeUsers=unserialize(ACTIVE_USERS);
			foreach($activeUsers as $user){
					if($user==$this->session->numot) $permission_status=true;
			}
        	return $permission_status;
    	}

		public function index($sys){
			if($sys=="front") $this->bookonlines_frontend();
			else if($sys=="back"){
				//[Athiwat][29/06/2564][set check permission on system backend]
				if($this->check_userPermission($sys)){
					$this->bookonlines();
				}else{
					$this->session->set_flashdata('failure','User account cannot access system.');
					$direct_link=base_url()."Login/index/".$sys;
					redirect($direct_link);
				}
			}
		}

		//[Athiwat][13/05/2564][add frontend view iframe]
		public function bookonline_frontend(){
			$this->data['iframe']= true;
			$this->data['method']="view";
			$this->data['system']= "frontend";
			
			$this->data['head_title'] = "";
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            $this->data['Users'] = $this->BookonlineModel->getUsers();
			$this->data['locations']=$this->BookonlineModel->getLocations();
			$this->data['Types'] = $this->BookonlineModel->getPublishTypes();
            $this->data['Bookonlines']=$this->BookonlineModel->getBookonlineHds();
            
            $this->loadData();
            $this->front_loadViewWithScript(array('bookonline/bookonline_iframe_view'),array());
		}

		// [Athiwat][24/06/2564][Add control for Frontend Bookonline]
		public function bookonlines_frontend(){
			$this->data['sys']="front";
			$this->data['method']="view";
			$this->data['system']="frontend";
            $this->data['head_title']="ประกาศหนังสือเวียน";

            $this->data['head_title'] = "";
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            $this->data['Users'] = $this->BookonlineModel->getUsers();
			$this->data['locations']=$this->BookonlineModel->getLocations();
			$this->data['Types'] = $this->BookonlineModel->getPublishTypes();
            $this->data['Bookonlines']=$this->BookonlineModel->getBookonlineHds();
            $this->data['error']=$this->db->error();
            $this->loadData();
		
            $this->front_loadViewWithScript(array('bookonline/bookonlines_view'),array());
		}

		public function bookonline($publish_hd_id,$system,$numot){
			if($system=="backend") $this->breadcrumb->add('หน้าหลัก', base_url()."Bookonline/index/".$system);
            if($system=="backend") $this->breadcrumb->add('ประกาศหนังสือเวียน',   base_url().'bookonline/bookonlines');
            if($system=="backend") $this->breadcrumb->add('รายละเอียดประกาศหนังสือเวียน',   base_url().'bookonline/bookonline/'.$publish_hd_id.'/'.$system);
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            $this->data['error']=$this->db->error();
			$this->data['method']="view_detail";
			$this->data['system']=$system=="backend"? "backend":"frontend";

			$this->data['head_title'] = "รายละเอียดประกาศหนังสือเวียน";
			$this->data['head_title_s1'] = "ข้อมูลประกาศ";
			$this->data['publish_hd_id'] = $publish_hd_id;
			$this->data['Users'] = $this->BookonlineModel->getUsers();
			$this->data['locations']=$this->BookonlineModel->getLocations();
			$this->data['Types'] = $this->BookonlineModel->getPublishTypes();
			$this->data['BookonlineHd']=$this->BookonlineModel->getBookonlineHd($publish_hd_id);
			$this->data['BookonlineFile']=$this->BookonlineModel->getBookonlineFile($publish_hd_id);
            $this->loadData();

            if($system=="backend") $this->loadViewWithScript(array('bookonline/bookonline_view'), array());
            else if($system=="frontend"){
            	//[Athiwat][25/06/2564][add process add viewed bko_publish_hd]
            	$formArrayHD=array();
            	$viewed=$this->BookonlineModel->getViewd($publish_hd_id);
            	$formArrayHD["viewed"]=$viewed+=1;
            	$result=$this->BookonlineModel->addBookonlineAudience($publish_hd_id,$formArrayHD);

            	//[Athiwat][25/06/2564][add system viewed]
            	$formArrayViewed=array();
            	$formArrayViewed["num_ot"]=$numot;
            	$formArrayViewed["publish_hd_id"]=$publish_hd_id;
            	$formArrayViewed["viewed_datetime"]=date("Y-m-d H:i:s");
            	$this->data['insert_viewed_status']="";
            	$check=$this->BookonlineModel->checkBookonlineViewed($publish_hd_id,$numot); //[Athiwat][25/06/2564][have : true && not have : false]
            	if(!$check){
            		if($this->BookonlineModel->addBookonlineViewed($formArrayViewed)) $this->data['insert_viewed_status']="inserted";
            		else $this->data['insert_viewed_status']="insert viewed error";
            	}
            	
            	if($result) $this->front_loadViewWithScript(array('bookonline/bookonline_view'), array()); else $this->data['update_hd_status']="update error";
            } 
		}

		// [Athiwat][25/06/2564][For backend]
		public function bookonlines(){
			$this->data['sys']="back";
			$this->data['system']="backend";
            $this->breadcrumb->add('หน้าหลัก', base_url()."Bookonline/index/".$this->data['sys']);
            $this->breadcrumb->add('หนังสือเวียน',   base_url().'bookonline/bookonlines');
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            $this->data['method']="view";
            $this->data['head_title']="ประกาศหนังสือเวียน";
            $this->data['Users'] = $this->BookonlineModel->getUsers();
            $this->data['Types'] = $this->BookonlineModel->getPublishTypes();
            $this->data['locations']=$this->BookonlineModel->getLocations();
            $this->data['Bookonlines'] = $this->BookonlineModel->getBookonlineHds();
            $this->loadData();
            $this->loadViewWithScript(array('bookonline/bookonlines_view'),array());
		}
		
		// ------------------------------ [Delete process] ------------------------------		
		public function deleteBookonlineProcess($publish_hd_id,$numot){
			$formArray=array();
			$formArray['modify_datetime']=date('Y-m-d H:i:s');
			$formArray['modify_by']=$numot;
			$formArray['deleted']=1;
			
			if($this->BookonlineModel->deleteBookonline($publish_hd_id,$formArray)) $response['delete_status']=true;
			else $response['delete_status']=false;

			echo json_encode($response);
		}

		// ------------------------------ [Update process] ------------------------------
		public function updateBookonlineProcess($publish_hd_id,$numot){
			$formArrayHD=array();
			$formArrayDT=array();
			$formUploadFiles=array();
			$formArrayFiles=array();

			if(!empty($_FILES["publish_dt_file"]["name"]) && count(array_filter($_FILES["publish_dt_file"]["name"]))>0){
				//[Athwiat][23/06/2564][create folder for upload files]
				$foldername=(date("Y")+543);
				$path='uploads/'.$foldername;
				if(!file_exists($path)) mkdir($path);

				for($i=0;$i<count(array_filter($_FILES["publish_dt_file"]["name"]));$i++){
					// [Athiwat][30/06/2564][add process substring filename]
					if(strlen($_FILES['publish_dt_file']['name'][$i])>SUBSTR_MAXIMUM){
						$maxfile 	=strlen($_FILES['publish_dt_file']['name'][$i]);
	                    $type 		=strlen($_FILES['publish_dt_file']['name'][$i])-SUBSTR_FILETYPE;
	                    $typefile 	=substr($_FILES['publish_dt_file']['name'][$i],$type,$maxfile);
	                    $name		=substr($_FILES['publish_dt_file']['name'][$i],SUBSTR_MINIMUM,$type);
	                    $filename   =mb_substr(substr($name,SUBSTR_MINIMUM,SUBSTR_MAXIMUM),SUBSTR_MINIMUM,mb_strlen(substr($name,SUBSTR_MINIMUM,SUBSTR_MAXIMUM))-1,CHA_UTF8 );
	                    $filename   =$filename."".$typefile;
						$_FILES['files']['name']=$filename;

						// echo "len max : ".$maxfile; echo "</br>";
						// echo "len type : ".$type; echo "</br>";
						// echo "type file : ".$typefile; echo "</br>";
						// echo "name : ".$name; echo "</br>";
						// echo "filename : ".$filename;
						// exit();

					}else $_FILES['files']['name']	=$_FILES['publish_dt_file']['name'][$i];

					$_FILES['files']['tmp_name']	=$_FILES['publish_dt_file']['tmp_name'][$i];
					$_FILES['files']['type']		=$_FILES['publish_dt_file']['type'][$i];
					$_FILES['files']['size']		=$_FILES['publish_dt_file']['size'][$i];
					$_FILES['files']['error']		=$_FILES['publish_dt_file']['error'][$i];

					$config['max_size']      = 256000;
		            $config['max_width'] 	 = '4096';
		            $config['max_height'] 	 = '4096';
		            $config['upload_path']   = './uploads/'.$foldername.'/';
		            $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv';

					$this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('files')){$files_error=array('files_error'=>$this->upload->display_errors()); $response['fiels_status']=0;}
	                else{$formUploadFiles[]=$this->upload->data(); $response['fiels_status']=1;}
				}
			}

			// print_r($formUploadFiles);
			// exit();
			
			//[prepare save files]
			if(!empty($_POST['publish_dt_id'])) $formArrayDT['publish_dt_id']=$this->security->xss_clean($this->input->post('publish_dt_id'));
			if(!empty($_POST['publish_dt_name'])) $formArrayDT['publish_dt_name']=$this->security->xss_clean($this->input->post('publish_dt_name'));
			if(!empty($formArrayDT['publish_dt_name'])){
				for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
					$formArrayFiles['publish_hd_id'][$i]		=$publish_hd_id;
					$formArrayFiles['publish_filename'][$i]		=$formArrayDT['publish_dt_name'][$i];
					$formArrayFiles['publish_file'][$i]			=$formUploadFiles[$i]['file_name'];
					$formArrayFiles['publish_filepath'][$i]		=base_url().$path."/".$formUploadFiles[$i]['file_name']; //[Athiwat][29/06/2564][add filepath]
					$formArrayFiles['create_datetime'][$i]		=date('Y-m-d H:i:s');
					$formArrayFiles['create_by'][$i]			=$numot;
				}
			}

			//[prepare save hd]
			if(!empty($_POST['start_date'])) $startdate=$this->security->xss_clean($this->input->post('start_date'));
			if(!empty($_POST['start_time'])) $starttime=$this->security->xss_clean($this->input->post('start_time'));
			$formArrayHD['publish_datetime']=date("Y-m-d H:i:s",strtotime("$startdate $starttime"));

			if(!empty($_POST['ward_code'])) $formArrayHD['ward_code']=$this->security->xss_clean($this->input->post('ward_code'));
			if(!empty($_POST['publish_types'])) $formArrayHD['publish_type_id']=$this->security->xss_clean($this->input->post('publish_types'));
			if(!empty($_POST['publish_name'])) $formArrayHD['publish_name']=$this->security->xss_clean($this->input->post('publish_name'));
			$formArrayHD['publish_status']=$this->security->xss_clean($this->input->post('publish_status')); 										//[Athiwat][30/06/2564][edit status can save with empty]
			if(!empty($_POST['publish_remark'])) $formArrayHD['publish_remark']=$this->security->xss_clean($this->input->post('publish_remark'));
			$formArrayHD['publish_pin_status'] = !empty($_POST['pin_status'])? $_POST['pin_status']=="on" ? 1 : 0 : 0;
			$formArrayHD['modify_datetime']=date('Y-m-d H:i:s');
			$formArrayHD['modify_by']=$numot;

			// [#save hd,files]
			$status_files=true;
			$update_hd_status=$this->BookonlineModel->updateBookonlineHd($formArrayHD,$publish_hd_id);
			
			if(!empty($formArrayDT['publish_dt_name'])){
				for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
					$dataFile=array( "publish_hd_id"	=>$formArrayFiles['publish_hd_id'][$i],
									 "publish_file"		=>$formArrayFiles['publish_file'][$i],
									 "publish_filename"	=>$formArrayFiles['publish_filename'][$i],
									 "publish_filepath" =>$formArrayFiles['publish_filepath'][$i],
									 "create_by"		=>$formArrayFiles['create_by'][$i],
									 "create_datetime"	=>$formArrayFiles['create_datetime'][$i]
					);
					$insert_file_status=$this->BookonlineModel->addBookonlineFile($dataFile);
					if(!$insert_file_status) $status_files=false;
				}
			}

			//[Set callback session result for the update form]
			if(!$update_hd_status && !$status_files){
				$this->session->set_flashdata('failure','อัพเดตข้อมูลไม่สำเร็จ !');
				$response['update_status']="process update error.";
			}else{
				$response['update_status']="process update complete.";
				$this->session->set_flashdata('success','อัพเดตข้อมูลสำเร็จ !');
				redirect(base_url()."Bookonline/index/back");
			}

		}

		public function deleteBookonlineFile($hd_id,$file_id,$numot){
			$formArrayFile=array();
			$formArrayFile['deleted']=1;
			$formArrayFile['modify_datetime']=date('Y-m-d H:i:s');
			$formArrayFile['modify_by']=$numot;

			if($this->BookonlineModel->deleteBookonlineFile($hd_id,$file_id,$formArrayFile)) $response['delete_status']=true;
			else $response['delete_status']=false;

			echo json_encode($response);
		}

		public function updateBookonline($publish_hd_id,$sys){
			$this->breadcrumb->add('หน้าหลัก', base_url());
			$this->breadcrumb->add('ประกาศหนังสือเวียน',   base_url().'bookonline/bookonlines');
	        $this->breadcrumb->add('แก้ไข ประกาศหนังสือเวียน',   base_url().'bookonline/updateBookonline/'.$publish_hd_id."/".$sys);
	        $this->data['breadcrumb'] = $this->breadcrumb->output();
	        $this->data['error']=$this->db->error();

	        //[Athiwat][22/06/2564][add constants bookonline status]
            $publish_statuses=unserialize(PUBLISH_STATUSES);
            $this->data['publish_statuses']=$publish_statuses;

            $this->data['system']=$sys;
			$this->data['method']="update";
			$this->data['head_title'] = "แก้ไข ประกาศหนังสือเวียน";
			$this->data['publish_hd_id']=$publish_hd_id;
			$this->data['locations']=$this->BookonlineModel->getLocations();
            $this->data['types']=$this->BookonlineModel->getPublishTypes();

			$this->data['BookonlineHd']=$this->BookonlineModel->getBookonlineHd($publish_hd_id);
			$this->data['BookonlineFile']=$this->BookonlineModel->getBookonlineFile($publish_hd_id);
            
            $this->loadData();
            $this->loadViewWithScript(array('bookonline/bookonline_form_view'), array('bookonline/bookonline_form_script'));
		}

		// ------------------------------ [Add process] ------------------------------
		public function addBookonline($sys){
			$this->breadcrumb->add('หน้าหลัก', base_url());
			$this->breadcrumb->add('ประกาศหนังสือเวียน',   base_url().'Bookonline/Bookonlines');
	        $this->breadcrumb->add('เพิ่ม ประกาศหนังสือเวียน',   base_url().'Bookonline/addBookonline');
			$this->data['breadcrumb'] = $this->breadcrumb->output();

			$this->data['system']=$sys;
			$this->data['method']="add";
			$this->data['head_title'] = "เพิ่ม หนังสือเวียน";
            
            // [add constants publish status]
            $publish_statuses=unserialize(PUBLISH_STATUSES);
            $this->data['publish_statuses']=$publish_statuses;
            $this->data['locations']=$this->BookonlineModel->getLocations();
            $this->data['types']=$this->BookonlineModel->getPublishTypes();
            $this->data['error']=$this->db->error();

            $this->loadData();
            $this->loadViewWithScript(array('bookonline/bookonline_form_view'), array('bookonline/bookonline_form_script'));
		}

		public function addBookonlineProcess($numot){
			if(!empty($_FILES["publish_dt_file"]["name"]) && count(array_filter($_FILES["publish_dt_file"]["name"]))>0){
				$formArrayHD=array();
				$formUploadFiles=array();
				$formArrayFiles=array();

				//[Athwiat][22/06/2564][create folder for upload files]
				$foldername=(date("Y")+543);
				$path='uploads/'.$foldername;
				if(!file_exists($path)) mkdir($path);
	
				for($i=0;$i<count(array_filter($_FILES["publish_dt_file"]["name"]));$i++){
					// [Athiwat][30/06/2564][add process substring filename]
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
					$_FILES['files']['error']		=$_FILES['publish_dt_file']['error'][$i];

					$config['max_size']      = 256000;
		            $config['max_width'] 	 = '4096';
		            $config['max_height'] 	 = '4096';
		            $config['upload_path']   = './uploads/'.$foldername.'/'; //[Athwiat][22/06/2564][change path]
		            $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv';

					$this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                if(!$this->upload->do_upload('files')){$files_error=array('files_error'=>$this->upload->display_errors()); $response['fiels_status']=0;}
	                else{$formUploadFiles[]=$this->upload->data(); $response['fiels_status']=1;}
				}

				// print_r($formUploadFiles);
				// exit();
				
				//[prepare save hd]
				if(!empty($_POST['start_date'])) $startdate=$this->security->xss_clean($this->input->post('start_date'));
				if(!empty($_POST['start_time'])) $starttime=$this->security->xss_clean($this->input->post('start_time'));
				$formArrayHD['publish_datetime']=date("Y-m-d H:i:s",strtotime("$startdate $starttime"));

				if(!empty($_POST['ward_code'])) $formArrayHD['ward_code']=$this->security->xss_clean($this->input->post('ward_code'));
				if(!empty($_POST['publish_types'])) $formArrayHD['publish_type_id']=$this->security->xss_clean($this->input->post('publish_types'));
				if(!empty($_POST['publish_name'])) $formArrayHD['publish_name']=$this->security->xss_clean($this->input->post('publish_name'));
				if(!empty($_POST['publish_status'])) $formArrayHD['publish_status']=$this->security->xss_clean($this->input->post('publish_status'));
				if(!empty($_POST['publish_remark'])) $formArrayHD['publish_remark']=$this->security->xss_clean($this->input->post('publish_remark'));
				$formArrayHD['publish_pin_status'] = !empty($_POST['pin_status'])? $_POST['pin_status']=="on" ? 1 : 0 : 0;
				$formArrayHD['create_datetime']=date('Y-m-d H:i:s');
				$formArrayHD['create_by']=$numot;

				//[prepare save files]
				if(!empty($_POST['publish_dt_id'])) $formArrayDT['publish_dt_id']=$this->security->xss_clean($this->input->post('publish_dt_id'));
				if(!empty($_POST['publish_dt_name'])) $formArrayDT['publish_dt_name']=$this->security->xss_clean($this->input->post('publish_dt_name'));
				if(!empty($formArrayDT['publish_dt_name'])){
					$max_hd_id=$this->BookonlineModel->getMaxHD();
					for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
						$formArrayFiles['publish_hd_id'][$i]		=$max_hd_id;
						$formArrayFiles['publish_filename'][$i]		=$formArrayDT['publish_dt_name'][$i];
						$formArrayFiles['publish_file'][$i]			=$formUploadFiles[$i]['file_name'];
						$formArrayFiles['publish_filepath'][$i]		=base_url().$path."/".$formUploadFiles[$i]['file_name']; //[Athiwat][29/06/2564][add filepath]
						$formArrayFiles['create_by'][$i]			=$numot;
						$formArrayFiles['create_datetime'][$i]		=date("Y-m-d H:i:s");
					}
				}

				//[Athwiat][22/06/2564][save bookonline hd,files]
				$insert_files_status=true;
				$insert_hd_status=$this->BookonlineModel->addBookonlineHd($formArrayHD);
				
				for($i=0;$i<count($formArrayDT['publish_dt_name']);$i++){
					$dataFile=array(
						"publish_hd_id"		=>$formArrayFiles['publish_hd_id'][$i],
						"publish_filename"	=>$formArrayFiles['publish_filename'][$i],
						"publish_file"		=>$formArrayFiles['publish_file'][$i],
						"publish_filepath" 	=>$formArrayFiles['publish_filepath'][$i],
						"create_by"			=>$formArrayFiles['create_by'][$i],
						"create_datetime"	=>$formArrayFiles['create_datetime'][$i]
					);
					$insert_file_status=$this->BookonlineModel->addBookonlineFile($dataFile);
					if(!$insert_file_status) $insert_files_status=false;
				}
				
				if(!$insert_hd_status && !$insert_files_status){
					$this->session->set_flashdata('failure','เพิ่มข้อมูลไม่สำเร็จ !');
					$response['insert_status']="Process insert error.";
				}else{
					$this->session->set_flashdata('success','เพิ่มข้อมูลสำเร็จ !');
					$response['insert_status']="Process insert complete.";
					redirect(base_url()."Bookonline/index/back");
				}

			}
		}

	}
?>
