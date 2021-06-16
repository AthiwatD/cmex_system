<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Booking extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Booking_model','Booking');
        $this->load->model('Closing_model','Closing');
    }
    
    function index(){
        $this->bookings();
       
    }
    
    function bookings(){
        $this->data['error'] = $this->db->error(); 
        $this->data['bookings'] = $this->Booking->getBookings();
        $this->data['closings'] = $this->Closing->getClosings();
        $this->data['none_bookings'] = $this->Booking->getNoneBookings();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Booking/bookings');      
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

    function bookingSearching($booking_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['searching'] = $this->Booking->getBooking($booking_id);
        $this->data['bookings'] = $this->Booking->getBookings();
        $this->data['closings'] = $this->Closing->getClosings();
        $this->data['none_bookings'] = $this->Booking->getNoneBookings();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Booking/bookings');      
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
        $this->load->view('common/header', $this->data);
        $this->load->view('booking/bookings_view', $this->data);
        $this->load->view('common/footer',$this->data);
        $this->load->view('booking/bookings_script', $this->data);
        $this->load->view('common/end',$this->data);
    }

    function save(){
        $patient_id = $this->input->post('patient_id');
        if($patient_id == ""){
            $result = $this->Booking->addBooking();
        }
        else{
            $result = $this->Booking->updateBooking();
        }
        $this->data['error'] = $this->db->error(); 
        
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Booking/bookings');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการนัดหมาย";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_success_view'), array());     
    }

    function addBookingDo(){
        
        $result = $this->Booking->addBooking();
        
    }

    function updateBookingDo(){
        
        $result = $this->Booking->updateBooking();
          
    }

    function deletePatientBookingDo(){
        $result = $this->Booking->deletePatientBooking();
        $this->data['error'] = $this->db->error(); 
        
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Booking/bookings');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการนัดหมาย";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_success_view'), array());      
    }

	function deleteOldAvailableBookingDo(){
        $result = $this->Booking->deleteOldAvailableBooking();
        $this->data['error'] = $this->db->error(); 
        
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Booking/bookings');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการนัดหมาย";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_success_view'), array());      
    }

	function deleteNoDataBookingDo(){
		$result = $this->Booking->deleteNoDataBooking();
        $this->data['error'] = $this->db->error(); 
        
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Booking/bookings');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการนัดหมาย";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_success_view'), array());      
	}

    function getBookingService($booking_id){
        $booked = $this->Booking->getBooking($booking_id);
        echo json_encode($booked);
    }

    function getSearchingService($booking_id){
        $booked = $this->Booking->getBooking($booking_id);
        echo json_encode($booked);
    }

    
    /*
    function booking($booking_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['booking'] = $this->Booking->getBooking($booking_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Booking',   base_url().'Booking/bookings');  
        $this->breadcrumb->add('รายละเอียด Booking',   base_url().'Booking/booking/' . $booking_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียด Booking";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_view'), array());      
    }

    function addBooking(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Booking',   base_url().'Booking/bookings');    
        $this->breadcrumb->add('เพิ่ม Booking',   base_url().'Booking/addBooking');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม Booking";
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_form_view'), array());      
    }

    

    function updateBooking($booking_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Booking',   base_url().'Booking/Bookings');    
        $this->breadcrumb->add('แก้ไข Booking',   base_url().'Booking/updateBooking/' . $booking_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข Booking";
        $this->data['booking'] = $this->Booking->getBooking($booking_id);
        $this->loadData();
        $this->loadViewWithScript(array('booking/booking_form_view'), array());      
    }
    
    function updateBookingDo(){
        
        $result = $this->Booking->updateBooking();
        //echo $result;
        if(!$result){
            //$this->addBooking();
            $this->Bookings(); 
        }else{
            $this->Bookings(); 
        }
    }

    function deleteBookingDo($booking_id){
        
        $result = $this->Booking->deleteBooking($booking_id);
        
        if(!$result){
            //$this->addBooking();
            $this->Bookings(); 
        }else{
            $this->Bookings(); 
        }
    }
    */
}
