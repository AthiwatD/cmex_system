<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Booking extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Booking_model','Booking');
    }
    
    function index(){
        $this->bookings();
       
    }
    
    function bookings(){
        $this->data['error'] = $this->db->error(); 
        $this->data['bookings'] = $this->Booking->getBookings();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Booking/bookings');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $doctors = unserialize (DOCTORS);
        $operation_rooms = unserialize (OPERATION_ROOMS);
        $test_types = unserialize (TEST_TYPES);
        $appointment_froms = unserialize (APPOINTMENT_FROMS);
        $change_reasons = unserialize (CHANGE_REASONS);
        $channels = unserialize (CHANNELS);
        $symtoms = unserialize (SYMTOMS);

        $this->data['doctors'] = $doctors;
        $this->data['operation_rooms'] = $operation_rooms;
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
            $this->addBookingDo();
        }
        else{
            $this->updateBookingDo();
        }
    }

    function addBookingDo(){
        
        $result = $this->Booking->addBooking();
        $this->addBooking();
        // if(!$result){
        //     $this->addBooking();
        // }else{
        //     $this->Bookings(); 
        // }
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