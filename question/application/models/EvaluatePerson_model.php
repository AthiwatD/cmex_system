<?php

class EvaluatePerson_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvaluations() {

        $sql = "SELECT *, COUNT(ep.evaluate_person_id) as 'person_count'
                    FROM qstn_evaluate_person ep
                    RIGHT JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    GROUP By e.evaluation_id
                    ORDER BY e.evaluation_id DESC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getEvaluatesPerson($person_id) {

        $sql = "SELECT *
                    FROM qstn_evaluate_person ep
                    JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    WHERE ep.person_id = '" . $person_id . "'";
                    
                    
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getNotEvaluatesPerson($person_id) {

        $date = date("Y-m-d");
        $sql = "SELECT *
                    FROM qstn_evaluate_person ep
                    JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    WHERE (ep.person_id = '" . $person_id . "'
                    AND ep.evaluate_time = '0000-00-00 00:00:00')
                    AND (DATE('" . $date . "') between  e.date_start AND e.date_end
                    OR (STRCMP(e.date_start,'0000-00-00') = 0
                    AND STRCMP(e.date_end,'0000-00-00') = 0))";
        $result = $this->db->query($sql)->result();
        return $result;
    }
    
}
