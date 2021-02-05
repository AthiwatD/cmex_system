<?php

class Moving_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function updateMoving(){
        $username = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
        $update_time = date("Y-m-d h:i:s");
        $create_time_new = $update_time;

        $booking_id = $this->security->xss_clean($this->input->post('booking_id'));
        $patient_id = $this->security->xss_clean($this->input->post('patient_id'));
        $receiving_date = $this->security->xss_clean($this->input->post('receiving_date'));
        $booking_date = $this->security->xss_clean($this->input->post('booking_date'));
        $doctor = $this->security->xss_clean($this->input->post('doctor'));
        $test_type = $this->security->xss_clean($this->input->post('test_type'));
        $operation_room = $this->security->xss_clean($this->input->post('operation_room'));
        $appointment_from = $this->security->xss_clean($this->input->post('appointment_from'));
        $channel = $this->security->xss_clean($this->input->post('channel'));

        $changed = $this->security->xss_clean($this->input->post('changed'));
        $change_reason = $this->security->xss_clean($this->input->post('change_reason'));
       
        $booking_date_new = $this->security->xss_clean($this->input->post('booking_date_new'));
        $operation_room_new = $this->security->xss_clean($this->input->post('operation_room_new'));
        $note_new = $this->security->xss_clean($this->input->post('note_new'));


        
        $sql = "SELECT *
                    FROM sdc_booking
                    WHERE booking_date = '" . $booking_date_new . "'
                    AND operation_room = '" . $operation_room_new . "'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($query->num_rows() == 0){
            $data = array(
                'changed' => $changed,
                'change_reason' => $change_reason,
                'update_by' => $username,
                'update_time' => $update_time,
            );
            $this->db->where('booking_id', $booking_id);
            $result = $this->db->update('sdc_booking', $data);

            $data = array(
                'patient_id' => $patient_id,
                'receiving_date' => $receiving_date,
                'booking_date' => $booking_date_new,
                'doctor' => $doctor,
                'test_type' => $test_type,
                'operation_room' => $operation_room_new,
                'appointment_from' => $appointment_from,
                'channel' => $channel,
                'note' => $note_new,
                'changed' => 0,
                'create_by' => $username,
                'create_time' => $create_time_new,
                'deleted' => 0,
            );
            $result = $this->db->insert('sdc_booking', $data);
        }
            
        return $result;
    }

}
