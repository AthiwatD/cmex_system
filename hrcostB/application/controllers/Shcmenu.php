<?php
/*====================================================================================================== 
	Create by  : Athiwat Duliganon
	Create Date: 21/07/2564
	Description: Add Controller Shcmenu.
======================================================================================================*/

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 	class Shcmenu extends MY_Controller{

    	public function __construct(){
    		parent::__construct();
    		date_default_timezone_set('Asia/Bangkok');
			$this->load->model('Hrcost_model','HrcostModel');
			$this->load->model('Shcmenu_model','ShcmenuModel');
			
			$config['max_size']      = 256000;
            $config['max_width'] 	 = '4096';
            $config['max_height'] 	 = '4096';
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv';
            
	        $this->load->library('upload', $config);
		}

		public function index($sys){
			if($sys=="back") $this->shcmenus($sys);
			// 	else if($sys=="front"){}
		}

		public function shcmenus($sys){
            $this->breadcrumb->add('หน้าหลัก',base_url()."Home");
            $this->breadcrumb->add(IS_SHCMENU,base_url().'Shcmenu/index/back');
            $this->data['breadcrumb'] = $this->breadcrumb->output();

            $this->data['page']="form";
            $this->data['method']="form";
			$this->data['head_title']=IS_PJNAME_DT;
			$this->data['numot']=$this->session->numot;
			$this->data['system']=($sys=="back")? "backend":"frontend";
			
			$this->data['Ots']=$this->HrcostModel->getOts();
			$this->data['Salarys']=$this->HrcostModel->getSalarys();
			$this->data['Centers']=$this->HrcostModel->getCenters();
			$this->data['Positions']=$this->HrcostModel->getPositions();
			$this->data['Departments']=$this->HrcostModel->getDepartments();
			$this->data['MenuHDs']=$this->ShcmenuModel->getShcmenuHDs();

			$this->data['error']=$this->db->error();
			$this->loadData();
            $this->loadViewWithScript(array('shcmenu/shcmenu_form_view'), array('shcmenu/shcmenu_form_script'));
		}

		public function addeShcmenuProcess(){
			if(isset($_POST["menu_name"]) && !empty($_POST["menu_name"])){
				$formHD=array(); $formDT=array();
				$formHD["menuhd_name"]=$_POST["menu_name"];
				$formHD["center_id"]=$_POST["menucenter"];
				if(isset($_POST["hidden_numot"]) && !empty($_POST["hidden_numot"])) $formHD["create_by"] = $_POST["hidden_numot"];
				$formHD["create_datetime"]=date("Y-m-d H:i:s");
				
				if(isset($_POST["salary_period"]) && !empty($_POST["salary_period"])){ $formDT["salary_period"]=$_POST["salary_period"]; $response["salary_period"]=$_POST["salary_period"];}
				if(isset($_POST["salary_fee"]) && !empty($_POST["salary_fee"])){ $formDT["salary_fee"]=$_POST["salary_fee"]; $response["salary_fee"]=$_POST["salary_fee"];}
				if(isset($_POST["ot_period"]) && !empty($_POST["ot_period"])){ $formDT["ot_period"]=$_POST["ot_period"]; $response["ot_period"]=$_POST["ot_period"];}
				if(isset($_POST["center"]) && !empty($_POST["center"])){ $formDT["center"]=$_POST["center"]; $response["center"]=$_POST["center"];}
				if(isset($_POST["department"]) && !empty($_POST["department"])){ $formDT["department"]=$_POST["department"]; $response["department"]=$_POST["department"];}
				if(isset($_POST["position"]) && !empty($_POST["position"])){ $formDT["position"]=$_POST["position"]; $response["position"]=$_POST["position"];}
				// |--------------------------------------------------------------------------
				// | 1.insert hd.(new process)
				// | 2.get maxid hd.
				// | 3.get sum count checked.
				// | 4.loop insert dt with maxid.
				// | 5.response with sweetalert.
				// | 6.return value from function.
				// | 7.create view with value avg,sum,count,MAX,MIN.
				// |--------------------------------------------------------------------------

				
				$response["result_insert_hd"]=$this->ShcmenuModel->insertMenuHD($formHD); // ----- 1.insert hd.(new process)
				if($response["result_insert_hd"]){
					// ----- 2.get maxid hd.
					$row=$this->ShcmenuModel->getMaxHD();
					$response["maxhdid"]=$row->maxhdid;

					// ----- 3.get sum count checked.
					$count=0;
					$response["result_insert_dt"]=true;
					$response["count_sp"]=count($formDT["salary_period"]);
					$response["count_sf"]=count($formDT["salary_fee"]);
					$response["count_otp"]=count($formDT["ot_period"]);
					$response["count_c"]=count($formDT["center"]);
					$response["count_d"]=(isset($_POST["department"]) && !empty($_POST["department"]))? count($formDT["department"]) : 0 ;
					$response["count_p"]=(isset($_POST["position"]) && !empty($_POST["position"]))? count($formDT["position"]) : 0 ;

					$count=($response["count_sp"]+$response["count_sf"]+$response["count_otp"]+$response["count_c"]);
					if(isset($_POST["department"]) && !empty($_POST["department"])) $count+=$response["count_d"];
					if(isset($_POST["position"]) && !empty($_POST["position"])) $count+=$response["count_p"];

					// ----- 4.loop insert dt with maxid.
					// ----- 4.1 salary_period
					$tb_name="sly_salary";
					$process_stu=true;
					$status_count_sp=true;
					for($i=0;$i<$response["count_sp"];$i++){
						$Data=array("menudt_id"=>($i+1),
									 "menuhd_id"=>$response["maxhdid"],
									 "table_name"=>$tb_name,
									 "value_id"=>$formDT["salary_period"][$i]);
						$process_stu=$this->ShcmenuModel->insertMenuDT($Data);
						$status_count_sp=($process_stu)?true:false;
					}
					// ----- view -----
					// $response["Data"][$i]=$Data;
					// $response["test_value"]=$formDT["salary_period"][0];

					// ----- 4.2 sly_salary_fee
					$tb_name="sly_salary_fee";
					$process_stu=true;
					$status_count_sf=true;
					for($i=0;$i<$response["count_sf"];$i++){
					  $Data=array("menudt_id"=>($i+1),
					        "menuhd_id"=>$response["maxhdid"],
					        "table_name"=>$tb_name,
					        "value_id"=>$formDT["salary_fee"][$i]);
					  $process_stu=$this->ShcmenuModel->insertMenuDT($Data);
					  $status_count_sf=($process_stu)?true:false;
					}

					// ----- 4.3 sly_ot
					$tb_name="sly_ot";
					$process_stu=true;
					$status_count_otp=true;
					for($i=0;$i<$response["count_otp"];$i++){
					  $Data=array("menudt_id"=>($i+1),
					        "menuhd_id"=>$response["maxhdid"],
					        "table_name"=>$tb_name,
					        "value_id"=>$formDT["ot_period"][$i]);
					  $process_stu=$this->ShcmenuModel->insertMenuDT($Data);
					  $status_count_otp=($process_stu)?true:false;
					}

					// ----- 4.4 sev_center
					$tb_name="sev_center";
					$process_stu=true;
					$status_count_c=true;
					for($i=0;$i<$response["count_c"];$i++){
					  $Data=array("menudt_id"=>($i+1),
					        "menuhd_id"=>$response["maxhdid"],
					        "table_name"=>$tb_name,
					        "value_id"=>$formDT["center"][$i]);
					  $process_stu=$this->ShcmenuModel->insertMenuDT($Data);
					  $status_count_c=($process_stu)?true:false;
					}

					// ----- 4.5 tb_department
					$status_count_d=true;
					if($response["count_d"]>0){
					  $tb_name="tb_department";
					  $process_stu=true;
					  for($i=0;$i<$response["count_d"];$i++){
					    $Data=array("menudt_id"=>($i+1),
					          "menuhd_id"=>$response["maxhdid"],
					          "table_name"=>$tb_name,
					          "value_id"=>$formDT["department"][$i]);
					    $process_stu=$this->ShcmenuModel->insertMenuDT($Data);
					    $status_count_d=($process_stu)?true:false;
					  }
					}

					// ----- 4.6 tb_department
					$status_count_p=true;
					if($response["count_p"]>0){
					  $tb_name="sev_position";
					  $process_stu=true;
					  for($i=0;$i<$response["count_p"];$i++){
					    $Data=array("menudt_id"=>($i+1),
					          "menuhd_id"=>$response["maxhdid"],
					          "table_name"=>$tb_name,
					          "value_id"=>$formDT["position"][$i]);
					    $process_stu=$this->ShcmenuModel->insertMenuDT($Data);
					    $status_count_p=($process_stu)?true:false;
					  }
					}
				}
			}

			$response["result_insert_dt"]=($status_count_sp && $status_count_sf && $status_count_otp && $status_count_c && $status_count_d && $status_count_p)? true:false;
			$response["process_status"]=($response["result_insert_hd"] && $response["result_insert_dt"])? true:false;
			$response["process_desc"]="come addeShcmenuProcess";
			echo json_encode($response);
		}

		public function setFormMenu($hdid){
			// |--------------------------------------------------------------------------
			// | 1.receive hdid.
			// | 2.select menuhd_name.
			// | 3.select table_name from hrc_shortcut_menudt group by table_name where hdid.
			// | 4.return data[] group by table_name.
			// |--------------------------------------------------------------------------
			$resultHD=$this->ShcmenuModel->getMenuHD($hdid);
			$response["menuhd_name"]=$resultHD->menuhd_name;
			$response["center_id"]=$resultHD->center_id;
			if(!empty($response["menuhd_name"])){
				$response["resultDT"]=$this->ShcmenuModel->getMenuDT($resultHD->menuhd_id);
				$response["status_GetData"]=true;
			}else{
				$response["status_GetData_desc"]="Have not menu hd.";
				$response["status_GetData"]=false;

			}
			echo json_encode($response);
		}

		public function deleteMenuProcess($hdid,$numot){
			$formArray['deleted']=1;
			$formArray['modify_by']=$numot;
			$formArray['modify_datetime']=date('Y-m-d H:i:s');

			if($this->ShcmenuModel->deleteMenuHD($tb="hrc_shortcut_menuhd",$hdid,$formArray))
				$response['delete_status']=true;
			else
				$response['delete_status']=false;

			echo json_encode($response);
		}
		

	}
?>
