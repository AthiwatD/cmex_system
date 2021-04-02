<?php

class Kpi_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function patient_waiting_time_to_admit($start_date, $end_date) {
            
        $sql = "SELECT COUNT(b.patient_id) as 'patient_count', AVG(DATEDIFF(b.booking_date, b.receiving_date)) as 'waiting_time_to_admit'
                FROM sdc_booking b
                JOIN sdc_patient p ON b.patient_id = p.patient_id
                WHERE b.receiving_date >= '" . $start_date . "'
                AND b.receiving_date <= '" . $end_date . "'
                AND b.receiving_date != '0000-00-00'
                AND b.booking_date != '0000-00-00'
                AND b.deleted = 0
                GROUP BY 'patient_count'";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function patient_admit_within_days($start_date, $end_date, $days) {
            
        $sql = "SELECT COUNT(b.patient_id) as 'patient_count'
                FROM sdc_booking b
                JOIN sdc_patient p ON b.patient_id = p.patient_id
                WHERE b.receiving_date >= '" . $start_date . "'
                AND b.receiving_date <= '" . $end_date . "'
                AND DATEDIFF(b.booking_date, b.receiving_date) <= '" .  $days . "'
                AND b.receiving_date != '0000-00-00'
                AND b.booking_date != '0000-00-00'
                AND b.deleted = 0
                GROUP BY 'patient_count'";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function patient_changed($start_date, $end_date) {
            
        $sql = "SELECT COUNT(b.patient_id) as 'patient_count'
                FROM sdc_booking b
                WHERE b.booking_date >= '" . $start_date . "'
                AND b.booking_date <= '" . $end_date . "'
                AND	b.changed != 0
                AND b.booking_date != '0000-00-00'
                AND b.deleted = 0
                GROUP BY 'patient_count'";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }
    

    function patient_all_booking($start_date, $end_date) {
        $sql = "SELECT COUNT(b.booking_id) as 'booking_count'
                FROM sdc_booking b
                WHERE b.booking_date >= '" . $start_date . "'
                AND b.booking_date <= '" . $end_date . "'
                AND b.receiving_date != '0000-00-00'
                AND b.booking_date != '0000-00-00'
                AND b.deleted = 0
                GROUP BY 'booking_count'";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function patient_change_reasons($start_date, $end_date){
        $sql = "SELECT b.change_reason, COUNT(b.booking_id) as 'booking_count'
                FROM sdc_booking b
                WHERE b.booking_date >= '" . $start_date . "'
                AND b.booking_date <= '" . $end_date . "'
                AND b.changed != 0
                AND b.booking_date != '0000-00-00'
                AND b.deleted = 0
                GROUP BY b.change_reason
                ORDER BY COUNT(b.booking_id) DESC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function patient_return($start_date, $end_date){
        $sql = "SELECT COUNT(d.booking_count) as 'return_count'
                FROM (SELECT COUNT(b.booking_id) as 'booking_count'
                        FROM sdc_booking b
                        WHERE b.booking_date >= '" . $start_date . "'
                        AND b.booking_date <= '" . $end_date . "'
                        AND b.booking_date != '0000-00-00'
                        AND b.deleted = 0
                        GROUP BY b.patient_id
                        ORDER BY COUNT(b.booking_id) DESC) d
                WHERE d.booking_count > 1
                ";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }


    function changed_because_instrument($start_date, $end_date){
        
        $sql = "SELECT COUNT(b.booking_id) as 'booking_count'
                        FROM sdc_booking b
                        WHERE b.booking_date >= '" . $start_date . "'
                        AND b.booking_date <= '" . $end_date . "'
                        AND b.change_reason LIKE 'เครื่องชำรุด' 
                        AND b.changed != 0
                        AND b.booking_date != '0000-00-00'
                        AND b.deleted = 0
                ";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function patient_pap_titration($start_date, $end_date){
        
        $sql = "SELECT COUNT(b.booking_id) as 'booking_count'
                FROM sdc_booking b
                WHERE b.booking_date >= '" . $start_date . "'
                AND b.booking_date <= '" . $end_date . "'
                AND b.test_type LIKE 'PSG-PAP titration' 
                AND b.changed = 0
                AND b.booking_date != '0000-00-00'
                AND b.deleted = 0
                ";
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function getNoneKpis() {

        $sql = "SELECT *
                FROM sdc_booking b
                JOIN sdc_patient p ON b.patient_id = p.patient_id
                WHERE (b.booking_date IS NULL OR b.booking_date = '0000-00-00' 
                OR b.operation_room IS NULL OR  b.operation_room = '')
                AND b.changed = 0
                AND b.deleted = 0
                AND p.deleted = 0
                ORDER BY b.booking_date ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getKpi($booking_id) {

        $sql = "SELECT *
                    FROM sdc_booking b
                    JOIN sdc_patient p ON b.patient_id = p.patient_id
                    WHERE b.booking_id = '" . $booking_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function addKpi(){
        $username = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
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
            'deleted' => 0,
        );
        $result = $this->db->insert('sdc_patient', $data);

        if($result){

            $patient_id = $this->db->insert_id();
            $receiving_date = $this->security->xss_clean($this->input->post('receiving_date'));
            $booking_date = $this->security->xss_clean($this->input->post('booking_date'));
            $doctor = $this->security->xss_clean($this->input->post('doctor'));
            $test_type = $this->security->xss_clean($this->input->post('test_type'));
            $operation_room = trim($this->security->xss_clean($this->input->post('operation_room')));
            $appointment_from = $this->security->xss_clean($this->input->post('appointment_from'));
            $channel = $this->security->xss_clean($this->input->post('channel'));
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
                    'receiving_date' => $receiving_date,
                    'booking_date' => $booking_date,
                    'doctor' => $doctor,
                    'test_type' => $test_type,
                    'operation_room' => $operation_room,
                    'appointment_from' => $appointment_from,
                    'channel' => $channel,
                    'note' => $note,
                    'changed' => 0,
                    'create_by' => $username,
                    'create_time' => $create_time,
                    'deleted' => 0,
                );
                $result = $this->db->insert('sdc_booking', $data);
            }
            else{
                $data = array(
                    'patient_id' => $patient_id,
                    'receiving_date' => $receiving_date,
                    'doctor' => $doctor,
                    'test_type' => $test_type,
                    'appointment_from' => $appointment_from,
                    'channel' => $channel,
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

        

        return $result;
    }


    function updateKpi(){
        $username = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
        $update_time = date("Y-m-d h:i:s");

        $patient_id = $this->security->xss_clean($this->input->post('patient_id'));
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
            'update_by' => $username,
            'update_time' => $update_time,
        );
        $this->db->where('patient_id', $patient_id);
        $result = $this->db->update('sdc_patient', $data);

        if($result){
            $booking_id = $this->security->xss_clean($this->input->post('booking_id'));
            $receiving_date = $this->security->xss_clean($this->input->post('receiving_date'));
            $booking_date = $this->security->xss_clean($this->input->post('booking_date'));
            $doctor = $this->security->xss_clean($this->input->post('doctor'));
            $test_type = $this->security->xss_clean($this->input->post('test_type'));
            $operation_room = trim($this->security->xss_clean($this->input->post('operation_room')));
            $appointment_from = $this->security->xss_clean($this->input->post('appointment_from'));
            $channel = $this->security->xss_clean($this->input->post('channel'));
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
                    'receiving_date' => $receiving_date,
                    'booking_date' => $booking_date,
                    'doctor' => $doctor,
                    'test_type' => $test_type,
                    'operation_room' => $operation_room,
                    'appointment_from' => $appointment_from,
                    'channel' => $channel,
                    'note' => $note,
                    'update_by' => $username,
                    'update_time' => $update_time,
                );
                $this->db->where('booking_id', $booking_id);
                $result = $this->db->update('sdc_booking', $data);
            }
            else{
                $data = array(
                    'receiving_date' => $receiving_date,
                    'doctor' => $doctor,
                    'test_type' => $test_type,
                    'appointment_from' => $appointment_from,
                    'channel' => $channel,
                    'note' => $note,
                    'update_by' => $username,
                    'update_time' => $update_time,
                );
                $this->db->where('booking_id', $booking_id);
                $result = $this->db->update('sdc_booking', $data);
            }
            
            return $result;
            
        }
        return $result;
    }

    function deletePatientKpi(){
        $patient_id = $this->security->xss_clean($this->input->post('patient_id'));
        $data = array(
            'deleted' => 1,
        );
        $this->db->where('patient_id', $patient_id);
        $result = $this->db->update('sdc_booking', $data);

        $this->db->where('patient_id', $patient_id);
        $result = $this->db->update('sdc_patient', $data);
        // $result = $this->db->delete("sdc_booking");
        return $result;
    }
}
