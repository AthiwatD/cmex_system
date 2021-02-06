<?php

class Closing_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getClosings() {

        $sql = "SELECT *
                FROM sdc_booking b
                WHERE b.patient_id = -1
                AND b.deleted = 0";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getClosing($closing_id) {

        $sql = "SELECT *
                FROM sdc_booking b
                WHERE b.booking_id = '" . $closing_id . "'";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }


    function addClosing(){
        $username = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
        $create_time = date("Y-m-d h:i:s");

        

        $patient_id = -1; // ปิด งดรับ
        // $receiving_date = $this->security->xss_clean($this->input->post('receiving_date'));
        $closing_date = $this->security->xss_clean($this->input->post('closing_date'));
        // $doctor = $this->security->xss_clean($this->input->post('doctor'));
        // $test_type = $this->security->xss_clean($this->input->post('test_type'));
        $operation_room = $this->security->xss_clean($this->input->post('operation_room'));
        // $appointment_from = $this->security->xss_clean($this->input->post('appointment_from'));
        // $channel = $this->security->xss_clean($this->input->post('channel'));
        $note = $this->security->xss_clean($this->input->post('note'));

        $sql = "SELECT *
                    FROM sdc_booking
                    WHERE booking_date = '" . $booking_date . "'
                    AND operation_room = '" . $operation_room . "' 
                    AND changed = 0
                    AND deleted = 0";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($query->num_rows() == 0){
            $data = array(
                'patient_id' => $patient_id,
                // 'receiving_date' => $receiving_date,
                'booking_date' => $closing_date,
                // 'doctor' => $doctor,
                // 'test_type' => $test_type,
                'operation_room' => $operation_room,
                // 'appointment_from' => $appointment_from,
                // 'channel' => $channel,
                'note' => $note,
                'changed' => 0,
                'create_by' => $username,
                'create_time' => $create_time,
                'deleted' => 0,
            );
            $result = $this->db->insert('sdc_booking', $data);
        }
        
        
        return $result;
            
        
    }


    function updateClosing(){
        $username = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
        $update_time = date("Y-m-d h:i:s");

        
            $closing_id = $this->security->xss_clean($this->input->post('closing_id'));
            // $receiving_date = $this->security->xss_clean($this->input->post('receiving_date'));
            $closing_date = $this->security->xss_clean($this->input->post('closing_date'));
            // $doctor = $this->security->xss_clean($this->input->post('doctor'));
            // $test_type = $this->security->xss_clean($this->input->post('test_type'));
            $operation_room = $this->security->xss_clean($this->input->post('operation_room'));
            // $appointment_from = $this->security->xss_clean($this->input->post('appointment_from'));
            // $channel = $this->security->xss_clean($this->input->post('channel'));
            $note = $this->security->xss_clean($this->input->post('note'));

            $sql = "SELECT *
                    FROM sdc_booking
                    WHERE booking_date = '" . $booking_date . "'
                    AND operation_room = '" . $operation_room . "' 
                    AND changed = 0
                    AND deleted = 0";
            $query = $this->db->query($sql);
            $result = $query->result();
            if($query->num_rows() == 0){
                $data = array(
                    // 'receiving_date' => $receiving_date,
                    'booking_date' => $closing_date,
                    // 'doctor' => $doctor,
                    // 'test_type' => $test_type,
                    'operation_room' => $operation_room,
                    // 'appointment_from' => $appointment_from,
                    // 'channel' => $channel,
                    'note' => $note,
                    'update_by' => $username,
                    'update_time' => $update_time,
                );
                $this->db->where('booking_id', $closing_id);
                $result = $this->db->update('sdc_booking', $data);
            }
            
            return $result;
            
    }

    function deleteClosing(){
        $username = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
        $update_time = date("Y-m-d h:i:s");
        $closing_id = $this->security->xss_clean($this->input->post('closing_id'));
        $data = array(
            'update_by' => $username,
            'update_time' => $update_time,
            'deleted' => 1,
        );
        $this->db->where('booking_id', $closing_id);
        $result = $this->db->update('sdc_booking', $data);
        // $result = $this->db->delete("sdc_booking");
        return $result;
    }
}
