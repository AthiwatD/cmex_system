<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Node extends Node_Controller{
    
    function __construct(){
        parent::__construct();
		$this->load->model('Site_model','Site');
		$this->load->model('Department_model','Department');
		$this->load->model('Channel_model','Channel');
        $this->load->model('Node_model','Node');

		$this->load->model('Path_model', 'Path');
		
    }
    
	function operate($site_id, $department_id, $channel_id){
		$site = $this->Site->getSite($site_id);
		$department = $this->Department->getDepartment($department_id);
		$this->data['site'] = $site;
		$this->data['department'] = $department;
		
		$head_title = $site->site_name . "<br>" . $department->department_name;

		if($channel_id != 0){
			$channel = $this->Channel->getChannel($channel_id);
			$this->data['channel'] = $channel;
			$this->data['channel_id'] = $channel->channel_id;
			$head_title .= " " . $channel->channel_name;
		}
		else{
			$this->data['channel_id'] = 0;
		}
		$this->data['head_title'] = $head_title;
		
        $this->breadcrumb->add('เลือกศูนย์', base_url() .'Home/sites');    
		$this->breadcrumb->add('เลือกแผนก', base_url() .'Home/departments/' . $site_id);      
		$this->breadcrumb->add($department->department_name, base_url() .'Node/operate/' . $site_id . "/" . $department_id . "/" . $channel_id);    
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->loadData();
        $this->loadViewWithScript(array('node/operate_view'),array('node/operate_script'));  
	}


	function serviceWaitingHn(){
		$response = $this->Node->getWaitingHn();
		echo json_encode($response);
	}

	function serviceSendRegister(){
		$response = $this->Node->sendRegister();
		echo json_encode($response);
	}

	function serviceCallNumber(){
		$response = $this->Node->callNumber();
		echo json_encode($response);
	}

	function serviceCallRepeat(){
		$response = $this->Node->callRepeat();
		echo json_encode($response);
	}

	function serviceRequeue(){
		$response = $this->Node->requeue();
		echo json_encode($response);
	}

	function serviceCancelSend(){
		$response = $this->Node->cancelSend();
		echo json_encode($response);
	}
}
?>
