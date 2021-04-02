<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Kpi extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->model('Form_model','Form');
        $this->load->model('Kpi_model','Kpi');
    }
    
    function index(){
        $this->kpis();
       
    }
    
    function kpis(){
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $days = $this->input->post('days');
        
        $this->data['error'] = $this->db->error(); 
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายงาน',   base_url().'Kpi');      
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

        date_default_timezone_set('Asia/Bangkok');
        if(empty($start_date)){
            $start_date = date("Y-m-d",strtotime("-1 month"));
        }
        if(empty($end_date)){
            $end_date = date("Y-m-d");
        }
        if(empty($days)){
            $days = 90;
        }

        $this->data['start_date'] = $start_date;
        $this->data['end_date'] = $end_date;
        $this->data['days'] = $days;
        $this->data['patient_waiting_time_to_admit'] = $this->Kpi->patient_waiting_time_to_admit($start_date, $end_date);
        $this->data['patient_admit_within_days'] = $this->Kpi->patient_admit_within_days($start_date, $end_date, $days);
        $this->data['patient_changed'] = $this->Kpi->patient_changed($start_date, $end_date);
        $this->data['patient_all_booking'] = $this->Kpi->patient_all_booking($start_date, $end_date);
        $this->data['patient_change_reasons'] = $this->Kpi->patient_change_reasons($start_date, $end_date);
        $this->data['patient_return'] =  $this->Kpi->patient_return($start_date, $end_date);
        $this->data['changed_because_instrument'] =  $this->Kpi->changed_because_instrument($start_date, $end_date);
        $this->data['patient_pap_titration'] = $this->Kpi->patient_pap_titration($start_date, $end_date);
        $this->data['head_title'] = "รายงาน KPI";

        $this->loadData();
        $this->loadViewWithScript(array('kpi/kpis_view'), array('kpi/kpis_script'));      
    }

    function kpisExcel(){
        
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $days = $this->input->post('days');
        
        $this->data['error'] = $this->db->error(); 
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายงาน',   base_url().'Kpi');      
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

        date_default_timezone_set('Asia/Bangkok');
        if(empty($start_date)){
            $start_date = date("Y-m-d",strtotime("-1 month"));
        }
        if(empty($end_date)){
            $end_date = date("Y-m-d");
        }
        if(empty($days)){
            $days = 90;
        }

        $this->data['start_date'] = $start_date;
        $this->data['end_date'] = $end_date;
        $this->data['days'] = $days;
        $this->data['patient_waiting_time_to_admit'] = $this->Kpi->patient_waiting_time_to_admit($start_date, $end_date);
        $this->data['patient_admit_within_days'] = $this->Kpi->patient_admit_within_days($start_date, $end_date, $days);
        $this->data['patient_changed'] = $this->Kpi->patient_changed($start_date, $end_date);
        $this->data['patient_all_booking'] = $this->Kpi->patient_all_booking($start_date, $end_date);
        $this->data['patient_change_reasons'] = $this->Kpi->patient_change_reasons($start_date, $end_date);
        $this->data['patient_return'] =  $this->Kpi->patient_return($start_date, $end_date);
        $this->data['changed_because_instrument'] =  $this->Kpi->changed_because_instrument($start_date, $end_date);
        $this->data['patient_pap_titration'] = $this->Kpi->patient_pap_titration($start_date, $end_date);

        $this->data['file_name'] = "KPI_" . $start_date . "_to_" . $end_date;
        $this->data['head_title'] = "รายงาน KPI";

        $this->loadData();
        $this->load->view('kpi/kpis_excel',$this->data);

    }
}