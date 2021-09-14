<?php

class Person_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getPersons() {

        $sql = "SELECT *
                    FROM sev_person p
                    JOIN sev_position pos ON p.position_id = pos.position_id
                    JOIN sev_center c ON p.center_id = c.center_id 
                    WHERE p.end_work = 0
                    ORDER BY p.person_id ASC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getPerson($person_id) {

        $sql = "SELECT *
                    FROM sev_person p
                    JOIN sev_position pos ON p.position_id = pos.position_id
                    JOIN sev_center c ON p.center_id = c.center_id 
                    WHERE p.person_id = '" . $person_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

}
