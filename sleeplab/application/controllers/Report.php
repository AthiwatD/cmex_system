<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Report extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Report_model','Report');
    }
    
    function index(){
        $this->bookings();
       
    }
    
    function Reports(){
        $this->data['error'] = $this->db->error(); 
        $this->data['bookings'] = $this->Report->getReports();
        $this->data['closings'] = $this->Closing->getClosings();
        $this->data['none_bookings'] = $this->Report->getNoneReports();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Report/bookings');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $doctors = unserialize (DOCTORS);
        $operation_rooms = unserialize (OPERATION_ROOMS);
        $tmp_operation_room_colors  = unserialize (OPERATION_ROOM_COLORS);
        foreach($operation_rooms as $index => $operation_room){
            $operation_room_colors[$operation_room] = $tmp_operation_room_colors[$index];
        }
        $test_types = unserialize (TEST_TYPES);
        $appointment_froms = unserialize (APPOINTMENT_FROMS);
        $change_reasons = unserialize (CHANGE_REASONS);
        $channels = unserialize (CHANNELS);
        $symtoms = unserialize (SYMTOMS);

        $this->data['doctors'] = $doctors;
        $this->data['operation_rooms'] = $operation_rooms;
        $this->data['operation_room_colors'] = $operation_room_colors;
        $this->data['test_types'] = $test_types;
        $this->data['appointment_froms'] = $appointment_froms;
        $this->data['change_reasons'] = $change_reasons;
        $this->data['channels'] = $channels;
        $this->data['symtoms'] = $symtoms;

        $this->data['head_title'] = "รายการนัดหมาย";
        $this->loadData();
        $this->loadViewWithScript(array('booking/bookings_view'), array('booking/bookings_script'));      
    }

    function save(){
        $patient_id = $this->input->post('patient_id');
        if($patient_id == ""){
            $result = $this->Report->addReport();
        }
        else{
            $result = $this->Report->updateReport();
        }
        $this->bookings();
    }

    function addReportDo(){
        
        $result = $this->Report->addReport();
        $this->bookings();
    }

    function updateReportDo(){
        
        $result = $this->Report->updateReport();
        $this->bookings();
    }

    function deletePatientReportDo(){
        $result = $this->Report->deletePatientReport();
        $this->bookings();
    }

    function getReportService($booking_id){
        $booked = $this->Report->getReport($booking_id);
        echo json_encode($booked);
    }

    function getSearchingService($booking_id){
        $booked = $this->Report->getReport($booking_id);
        echo json_encode($booked);
    }

    
    /*
    function booking($booking_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['booking'] = $this->Report->getReport($booking_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Report',   base_url().'Report/bookings');  
        $this->breadcrumb->add('รายละเอียด Report',   base_url().'Report/booking/' . $booking_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียด Report";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_view'), array());      
    }

    function addReport(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Report',   base_url().'Report/bookings');    
        $this->breadcrumb->add('เพิ่ม Report',   base_url().'Report/addReport');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม Report";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_form_view'), array());      
    }

    

    function updateReport($booking_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Report',   base_url().'Report/Reports');    
        $this->breadcrumb->add('แก้ไข Report',   base_url().'Report/updateReport/' . $booking_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข Report";
        $this->data['booking'] = $this->Report->getReport($booking_id);
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_form_view'), array());      
    }
    
    function updateReportDo(){
        
        $result = $this->Report->updateReport();
        //echo $result;
        if(!$result){
            //$this->addReport();
            $this->Reports(); 
        }else{
            $this->Reports(); 
        }
    }

    function deleteReportDo($booking_id){
        
        $result = $this->Report->deleteReport($booking_id);
        
        if(!$result){
            //$this->addReport();
            $this->Reports(); 
        }else{
            $this->Reports(); 
        }
    }
    */
}