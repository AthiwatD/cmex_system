<?php
/*====================================================================================================== 
	Create by  : Athiwat Duliganon
	Create Date: 05/07/2564
	Description: Add Controller Hrcost.
======================================================================================================*/

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 	class Hrcost extends MY_Controller{

    	public function __construct(){
    		parent::__construct();
    		date_default_timezone_set('Asia/Bangkok');
			$this->load->model('Hrcost_model','HrcostModel');
			
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
			if($sys=="back"){
				//[Athiwat][29/06/2564][set check permission on system backend]
				if($this->check_userPermission($sys)){
					$this->hrcosts($sys);
				}else{
					$this->session->set_flashdata('failure','User account cannot access system.');
					$direct_link=base_url()."Login/index";
					redirect($direct_link);
				}
			}
		}

		public function hrcosts($sys){
			$this->breadcrumb->add('หน้าหลัก',base_url()."Home");
            $this->breadcrumb->add(IS_PJNAME_DETAIL,base_url().'Hrcost/index/back');
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

			$this->data['error']=$this->db->error();
			$this->loadData();
            $this->loadViewWithScript(array('hrcost/hrcost_form_view'), array('hrcost/hrcost_form_script'));
		}

		public function costProcess(){
			// |--------------------------------------------------------------------------
			// | 1.check value from checkbox.
			// | 2 set value to array.
			// | 3.create sql where from >1.1.
			// | 4.create function query(sql).
			// | 5.return value from function.
			// | 6.create view with value avg,sum,count,MAX,MIN.
			// |--------------------------------------------------------------------------
			$res=array();
			$count_arr=0; 
			$count_ot_arr=0;
			$res["ls_where"]="";
			$res['ot_prefix']="otd";
			$res['salary_prefix']="sld";
			
			if(!empty($_POST['center']) && isset($_POST['center'])){
				$count_arr+=1;
				$res['center']=$_POST['center'];
				$res['center_where']=$this->setWhereQuery($res['center'],"c.center_id");
			}
			if(!empty($_POST['position']) && isset($_POST['position'])){
				$count_arr+=1;
				$res['position']=$_POST['position'];
				$res['position_where']=$this->setWhereQuery($res['position'],"po.position_id");
			}
			if(!empty($_POST['department']) && isset($_POST['department'])){
				$count_arr+=1;
				$res['department']=$_POST['department'];
				$res['department_where']=$this->setWhereQuery($res['department'],"d.department_id");
			}
			if(!empty($_POST['salary_period']) && isset($_POST['salary_period'])){
				$count_arr+=1;
				$res['salary_period']=$_POST['salary_period'];
				$res['salary_period_where']=$this->setWhereQuery($res['salary_period'],"sl.salary_id");
			}
			if(!empty($_POST['salary_fee']) && isset($_POST['salary_fee'])){
				$count_arr+=1;
				$res['salary_fee']=$_POST['salary_fee'];
				$res['select_salary']=$this->setSelectQuery($res['salary_fee'],"sld.");
			}

			if(!empty($_POST['ot_period']) && isset($_POST['ot_period'])){
				$count_ot_arr+=1;
				$res['ot_period']=$_POST['ot_period'];
				$res['where_ot_period']=$this->setWhereQuery($res['ot_period'],"ot.ot_id");
			}

			if(!empty($res['center_where'])) $res["ls_where"].=$res['center_where']." and ";
			if(!empty($res['position_where'])) $res["ls_where"].=$res['position_where']." and ";
			if(!empty($res['department_where'])) $res["ls_where"].=$res['department_where']." and ";

			// |--------------------------------------------------------------------------
			// | Process Salary
			// | 1.create varible array fixible value with checkbox.
			// | 2.bring var array to process query.
			// |--------------------------------------------------------------------------
			if($count_arr>0){
				$res['tb_hd']="sly_salary sl";
				$res['tb_dt']="sly_salary_detail sld";
				if(!empty($res['salary_period_where'])) $res["sum_sly_where"]=$res['ls_where'].$res['salary_period_where'];
				$res['ArQuery']=$this->HrcostModel->processQueryCost($res['select_salary'],$res["sum_sly_where"],$res['tb_hd'],$res['tb_dt'],$res['salary_prefix']);
				$res['result_sly']=$res['ArQuery'][0];

				$res['process_sly_desc']="The process correct";
				$res['process_sly_status']=true;
			}else{
				$res['process_sly_desc']="Not check box from form.";
				$res['process_sly_status']=false;
			}

			// |--------------------------------------------------------------------------
			// | Process OT
			// |--------------------------------------------------------------------------
			if($count_ot_arr>0){
				$res['tb_hd']="sly_ot ot";
				$res['tb_dt']="sly_ot_detail otd";
				$res['select_otd']="otd.total";
				if(!empty($res['where_ot_period'])) $res["sum_ot_where"]=$res['ls_where'].$res['where_ot_period'];
				$res['ArQueryOT']=$this->HrcostModel->processQueryCost($res['select_otd'],$res["sum_ot_where"],$res['tb_hd'],$res['tb_dt'],$res['ot_prefix']);
				$res['result_ot']=$res['ArQueryOT'][0];

				$res['process_ot_desc']="The process correct";
				$res['process_ot_status']=true;
			}else{
				$res['process_ot_desc']="Not check box from form.";
				$res['process_ot_status']=false;
			}

			// |--------------------------------------------------------------------------
			// | Process Result Session
			// |--------------------------------------------------------------------------
			// if(!$res['process_sly_status'] && !$res['process_ot_status']){
			// 	$this->session->set_flashdata('success',$res['process_sly_desc']);
			// }else{
			// 	$this->session->set_flashdata('failure',$res['process_sly_desc']);
			// }

			echo json_encode($res);
		}

		public function setSelectQuery($selects,$prefix){
			$select="";
			foreach($selects as $inx => $val){
				if($inx==(count($selects)-1)) $select.=$prefix.$val; else $select.=$prefix.$val."+";
			}
			return $select;
		}

		public function setWhereQuery($tables,$id){
			$where=$id." IN(";
			foreach($tables as $inx => $val){
				if($inx==0) $where.=$val; else $where.=",".$val;
			}
			$where.=")";
			return $where;
		}
	}
?>
