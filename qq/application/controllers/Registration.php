<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Registration extends Node_Controller{
    
    function __construct(){
        parent::__construct();
		$this->load->model('Site_model','Site');
        $this->load->model('Registration_model','Registration');
		$this->load->model('Path_model', 'Path');
		$this->load->model('Claim_model', 'Claim');
		$this->load->model('Staff_model', 'Staff');
		$this->load->model('Document_model', 'Document');
		$this->load->model('Printer_model', 'Printer');
    }
    
    function register($site_id){
        $site = $this->Site->getSite($site_id);
		$this->data['site'] = $site;
		$this->data['site_id'] = $site_id;
		$this->data['paths'] = $this->Path->getPaths($site_id);
		$this->data['claims'] = $this->Claim->getClaims();
		$this->data['staffs'] = $this->Staff->getStaffs();
		$this->data['documents'] = $this->Document->getDocuments();
		$printer = $this->Printer->getPrinter($site_id);

		// $this->data['print_service_url'] = "localhost:8888/print_service/print_register.php";
		$this->data['printer_ip'] = $printer->printer_ip; 
		
        $this->data['head_title'] = "ลงทะเบียน " . $site->site_name;
		
        $this->breadcrumb->add('เลือกศูนย์', base_url() .'Home/sites');    
		$this->breadcrumb->add('เวชระเบียน', base_url() .'Registration/register/' . $site_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->loadData();
        $this->loadViewWithScript(array('registration/register_view'),array('registration/register_script','registration/print_script'));  
    }

	function registered($site_id){
        $site = $this->Site->getSite($site_id);
		$this->data['site'] = $site;
		$this->data['site_id'] = $site_id;
		$this->data['registered'] = $this->Registration->registeredAll($site_id);

		$printer = $this->Printer->getPrinter($site_id);
		$this->data['printer_ip'] = $printer->printer_ip; 
		
        $this->data['head_title'] = "รายการลงทะเบียน " . $site->site_name;
		
        $this->breadcrumb->add('เลือกศูนย์', base_url() .'Home/sites');    
		$this->breadcrumb->add('เวชระเบียน', base_url() .'Registration/register/' . $site_id);
		$this->breadcrumb->add('รายการลงทะเบียน', base_url() .'Registration/registered/' . $site_id);            
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->loadData();
        $this->loadViewWithScript(array('registration/registered_view'),array('registration/registered_script','registration/function_script','registration/print_script'));   
    }

	function serviceAddRegister(){
		// $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        // $points = json_decode($stream_clean);
		// header('Content-Type: application/json');
		// echo json_encode($points);
		$response = $this->Registration->register();
		echo json_encode($response);
	}

	function serviceRegistered(){
		$response = $this->Registration->registered();
		echo json_encode($response);
	}

	function serviceRegisteredAll(){
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);
		$response = $this->Registration->registeredAll($points->site_id);
		echo json_encode($response);
	}
	
	function serviceDeleteRegistered(){
		$response = $this->Registration->deleteRegistered();
		echo json_encode($response);
	}

	
}
?>
