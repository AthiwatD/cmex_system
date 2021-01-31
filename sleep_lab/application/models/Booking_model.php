<?php

class Booking_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getBookings() {

        $sql = "SELECT *
                FROM sdc_booking b
                WHERE b.booking_date >= DATE(NOW() - INTERVAL 2 MONTH)";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getBooking($booking_id) {

        $sql = "SELECT *
                    FROM sdc_booking c
                    JOIN sdc_form f ON c.form_id = f.form_id
                    WHERE c.booking_id = '" . $booking_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function addBooking(){
        $username = $this->session->username;
        $create_time = date("Y-m-d h:i:s");

        $fname = $this->security->xss_clean($this->input->post('fname'));
        $lname = $this->security->xss_clean($this->input->post('lname'));
        $hn = $this->security->xss_clean($this->input->post('hn'));
        $birth_date = $this->security->xss_clean($this->input->post('birth_date'));
        $tel_1 = $this->security->xss_clean($this->input->post('tel_1'));
        $tel_2 = $this->security->xss_clean($this->input->post('tel_2'));

        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'hn' => $hn,
            'birth_date' => $birth_date,
            'tel_1' => $tel_1,
            'tel_2' => $tel_2,
            'create_by' => $username,
            'create_time' => $create_time,
        );
        $result = $this->db->insert('sdc_patient', $data);
        if($result){
            $patient_id = $this->db->insert_id();
            $receiving_date = $this->security->xss_clean($this->input->post('receiving_date'));
            $booking_date = $this->security->xss_clean($this->input->post('booking_date'));
            $doctor = $this->security->xss_clean($this->input->post('doctor'));
            $operation_room = $this->security->xss_clean($this->input->post('operation_room'));
            $appointment_from = $this->security->xss_clean($this->input->post('appointment_from'));
            $channel = $this->security->xss_clean($this->input->post('channel'));

            $data = array(
                'patient_id' => $patient_id,
                'receiving_date' => $receiving_date,
                'booking_date' => $booking_date,
                'doctor' => $doctor,
                'operation_room' => $operation_room,
                'appointment_from' => $appointment_from,
                'channel' => $channel,
                'create_by' => $username,
                'create_time' => $create_time,
            );
            $result = $this->db->insert('sdc_booking', $data);
        }

        

        return $result;
    }


    function updateBooking(){
        $booking_id = $this->security->xss_clean($this->input->post('booking_id'));
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $booking_number = $this->security->xss_clean($this->input->post('booking_number'));
        $booking_name = $this->security->xss_clean($this->input->post('booking_name'));
        
        $data = array(
            'booking_number' => $booking_number,
            'booking_name' => $booking_name,
            'form_id' => $form_id,
        );
        $this->db->where('booking_id', $booking_id);
        $result = $this->db->update('sdc_booking', $data);
        return $result;
    }

    function deleteBooking($booking_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('booking_id', $booking_id);
        //$result = $this->db->update('booking', $data);
        $result = $this->db->delete("sdc_booking");
        return $result;
    }
}
