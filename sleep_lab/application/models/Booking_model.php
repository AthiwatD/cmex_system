<?php

class Booking_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getBookings() {

        $sql = "SELECT *
                FROM sdc_booking c
                JOIN sdc_form f ON c.form_id = f.form_id
                ORDER BY f.form_id DESC, CAST(c.booking_number AS UNSIGNED), c.booking_number ASC";
                    
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
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $booking_number = $this->security->xss_clean($this->input->post('booking_number'));
        $booking_name = $this->security->xss_clean($this->input->post('booking_name'));
        
        $data = array(
            'booking_number' => $booking_number,
            'booking_name' => $booking_name,
            'form_id' => $form_id,
        );
        $result = $this->db->insert('sdc_booking', $data);
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
