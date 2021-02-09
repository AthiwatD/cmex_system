<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Moving extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Closing_model','Closing');
        $this->load->model('Booking_model','Booking');
        $this->load->model('Moving_model','Moving');
    }
    
    function index(){
        $this->moving();
       
    }
    
    function moving(){
        $this->data['error'] = $this->db->error(); 
        $this->data['bookings'] = $this->Booking->getBookings();
        $this->data['closings'] = $this->Closing->getClosings();
        // $this->data['none_bookings'] = $this->Booking->getNoneBookings();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('ย้ายรายการนัดหมาย',   base_url().'Moving/moving');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $doctors = unserialize (DOCTORS);
        $operation_rooms = unserialize (OPERATION_ROOMS);
        $tmp_operation_room_colors  = unserialize (OPERATION_ROOM_COLORS);
        foreach($operation_rooms as $index => $operation_room){
            $operation_room_colors[$operation_room] = $tmp_operation_room_colors[$index];
        }
        $change_reasons = unserialize (CHANGE_REASONS);

        $this->data['operation_rooms'] = $operation_rooms;
        $this->data['operation_room_colors'] = $operation_room_colors;
        $this->data['change_reasons'] = $change_reasons;

        $this->data['head_title'] = "ย้ายรายการนัดหมาย";
        $this->loadData();
        $this->loadViewWithScript(array('moving/moving_view'), array('moving/moving_script'));      
    }

    function movingSearching($booking_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['searching'] = $this->Booking->getBooking($booking_id);
        $this->data['bookings'] = $this->Booking->getBookings();
        $this->data['closings'] = $this->Closing->getClosings();
        // $this->data['none_bookings'] = $this->Booking->getNoneBookings();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('ย้ายรายการนัดหมาย',   base_url().'Moving/moving');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $doctors = unserialize (DOCTORS);
        $operation_rooms = unserialize (OPERATION_ROOMS);
        $tmp_operation_room_colors  = unserialize (OPERATION_ROOM_COLORS);
        foreach($operation_rooms as $index => $operation_room){
            $operation_room_colors[$operation_room] = $tmp_operation_room_colors[$index];
        }
        $change_reasons = unserialize (CHANGE_REASONS);

        $this->data['operation_rooms'] = $operation_rooms;
        $this->data['operation_room_colors'] = $operation_room_colors;
        $this->data['change_reasons'] = $change_reasons;

        $this->data['head_title'] = "ย้ายรายการนัดหมาย";

        $this->loadData();
        $this->load->view('common/header', $this->data);
        $this->load->view('moving/moving_view', $this->data);
        $this->load->view('common/footer',$this->data);
        $this->load->view('moving/moving_script', $this->data);
        $this->load->view('common/end',$this->data);
    }

    function updateMovingDo(){
        $result = $this->Moving->updateMoving();
        $this->moving();
    }


    function getBookingService($booking_id){
        $booked = $this->Booking->getBooking($booking_id);
        echo json_encode($booked);
    }

}