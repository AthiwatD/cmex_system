<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Moving extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Moving_model','Moving');
    }
    
    function index(){
        $this->movings();
       
    }
    
    function movings(){
        $this->data['error'] = $this->db->error(); 
        $this->data['movings'] = $this->Moving->getMovings();
        $this->data['none_movings'] = $this->Moving->getNoneMovings();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการนัดหมาย',   base_url().'Moving/movings');      
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
        $this->loadViewWithScript(array('moving/movings_view'), array('moving/movings_script'));      
    }

    function save(){
        $patient_id = $this->input->post('patient_id');
        if($patient_id == ""){
            $result = $this->Moving->addMoving();
        }
        else{
            $result = $this->Moving->updateMoving();
        }
        $this->movings();
    }

    function addMovingDo(){
        
        $result = $this->Moving->addMoving();
        $this->movings();
    }

    function updateMovingDo(){
        
        $result = $this->Moving->updateMoving();
        $this->movings();
    }

    function getMovingService($moving_id){
        $booked = $this->Moving->getMoving($moving_id);
        echo json_encode($booked);
    }
    /*
    function moving($moving_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['moving'] = $this->Moving->getMoving($moving_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Moving',   base_url().'Moving/movings');  
        $this->breadcrumb->add('รายละเอียด Moving',   base_url().'Moving/moving/' . $moving_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียด Moving";
        $this->loadData();
        $this->loadViewWithScript(array('moving/moving_view'), array());      
    }

    function addMoving(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Moving',   base_url().'Moving/movings');    
        $this->breadcrumb->add('เพิ่ม Moving',   base_url().'Moving/addMoving');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม Moving";
        $this->loadData();
        $this->loadViewWithScript(array('moving/moving_form_view'), array());      
    }

    

    function updateMoving($moving_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Moving',   base_url().'Moving/Movings');    
        $this->breadcrumb->add('แก้ไข Moving',   base_url().'Moving/updateMoving/' . $moving_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข Moving";
        $this->data['moving'] = $this->Moving->getMoving($moving_id);
        $this->loadData();
        $this->loadViewWithScript(array('moving/moving_form_view'), array());      
    }
    
    function updateMovingDo(){
        
        $result = $this->Moving->updateMoving();
        //echo $result;
        if(!$result){
            //$this->addMoving();
            $this->Movings(); 
        }else{
            $this->Movings(); 
        }
    }

    function deleteMovingDo($moving_id){
        
        $result = $this->Moving->deleteMoving($moving_id);
        
        if(!$result){
            //$this->addMoving();
            $this->Movings(); 
        }else{
            $this->Movings(); 
        }
    }
    */
}