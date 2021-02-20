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
        $this->reports();
       
    }
    
    function reports(){
        $this->data['error'] = $this->db->error(); 
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายงาน',   base_url().'Report');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $doctors = unserialize (DOCTORS);
        $doctor_colors = unserialize (DOCTOR_COLORS);
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

        $this->data['head_title'] = "รายงาน";
        $this->loadData();
        $this->loadViewWithScript(array('report/reports_view'), array('report/reports_script'));      
    }

    function reportByDoctor(){
        

        $doctors = unserialize (DOCTORS);
        $tmp_doctor_colors  = unserialize (DOCTOR_COLORS);
        foreach($doctors as $index => $doctor){
            $doctor_colors[$doctor] = $tmp_doctor_colors[$index];
        }

        $operation_rooms = unserialize (OPERATION_ROOMS);
        $tmp_operation_room_colors  = unserialize (OPERATION_ROOM_COLORS);
        foreach($operation_rooms as $index => $operation_room){
            $operation_room_colors[$operation_room] = $tmp_operation_room_colors[$index];
        }

        $doctor = $this->security->xss_clean($this->input->post('doctor'));
        $start_date = $this->security->xss_clean($this->input->post('start_date'));
        $end_date = $this->security->xss_clean($this->input->post('end_date'));
        
        $this->data['doctor'] = $doctor;
        $this->data['doctors'] = $doctors;
        $this->data['doctor_colors'] = $doctor_colors;
        $this->data['operation_rooms'] = $operation_rooms;
        $this->data['operation_room_colors'] = $operation_room_colors;
        $this->data['start_date'] = $start_date;
        $this->data['end_date'] = $end_date;

        $this->data['error'] = $this->db->error(); 
        $this->data['bookings'] = $this->Report->reportByDoctor();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายงาน',   base_url().'Report');  
        $this->breadcrumb->add('รายงานแยกตามแพทย์',   base_url().'Report/reportByDoctor');     
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายงานแยกตามแพทย์";
        $this->loadData();
        $this->loadViewWithScript(array('report/report_by_doctor_view'), array('report/report_by_doctor_script'));      
    }

    
}