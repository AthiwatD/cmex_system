<?php

class Searching_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getSearching() {
        $search_str = $this->security->xss_clean($this->input->post('search_str'));
        if(!empty($search_str)){
            $sql = "SELECT *
                FROM sdc_booking b
                JOIN sdc_patient p ON b.patient_id = p.patient_id
                WHERE b.booking_date >= DATE(NOW() - INTERVAL 6 MONTH)
                AND (p.fname LIKE '%" . $search_str . "%' OR p.lname LIKE '%" . $search_str . "%' OR p.hn LIKE '%" . $search_str . "%') 
                AND b.changed = 0
                AND b.deleted = 0
                AND p.deleted = 0";
                    
            $result = $this->db->query($sql)->result();
        }
        else{
            $result = 0;
        }

        return $result;
    }

    
}
