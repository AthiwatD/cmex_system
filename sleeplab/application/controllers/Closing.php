<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Closing extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Closing_model','Closing');
        $this->load->model('Booking_model','Booking');
    }
    
    function index(){
        $this->closings();
       
    }
    
    function closings(){
        $this->data['error'] = $this->db->error(); 
        $this->data['bookings'] = $this->Booking->getBookings();
        $this->data['closings'] = $this->Closing->getClosings();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการวันหยุด',   base_url().'Closing/closings');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $operation_rooms = unserialize (OPERATION_ROOMS);
        $tmp_operation_room_colors  = unserialize (OPERATION_ROOM_COLORS);
        foreach($operation_rooms as $index => $operation_room){
            $operation_room_colors[$operation_room] = $tmp_operation_room_colors[$index];
        }

        $this->data['operation_rooms'] = $operation_rooms;
        $this->data['operation_room_colors'] = $operation_room_colors;

        $this->data['head_title'] = "รายการวันหยุด";
        $this->loadData();
        $this->loadViewWithScript(array('closing/closings_view'), array('closing/closings_script'));      
    }


    function addClosingDo(){
        $prior_users = unserialize (PRIORITY_USERS);
        if (in_array($this->session->username, $prior_users)){
            $result = $this->Closing->addClosing();
            $this->closings();
        }
        
    }

    function updateClosingDo(){
        $prior_users = unserialize (PRIORITY_USERS);
        if (in_array($this->session->username, $prior_users)){

            $patient_id = -1;
            $result = $this->Closing->updateClosing();
            $this->closings();
        }
    }

    function deleteClosingDo(){
        $prior_users = unserialize (PRIORITY_USERS);
        if (in_array($this->session->username, $prior_users)){
            $result = $this->Closing->deleteClosing();
        }
        $this->closings();
    }


    function getClosingService($closing_id){
        $closed = $this->Closing->getClosing($closing_id);
        echo json_encode($closed);
    }

}