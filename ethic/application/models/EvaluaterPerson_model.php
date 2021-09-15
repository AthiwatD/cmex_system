<?php

class EvaluaterPerson_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvaluations() {

        $sql = "SELECT *, COUNT(ep.evaluater_person_id) as 'person_count'
                    FROM ethc_evaluater_person ep
                    RIGHT JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    RIGHT JOIN sev_person p ON ep.person_id = p.person_id
                    GROUP By e.evaluation_id, ep.evaluater_id, ep.person_id
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

    function getNotEvaluatePersons($person_id) {

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
    
    function getNotEvaluatesEvaluaterPersons($evaluater_id) {

        $sql = "SELECT e.evaluation_id, e.evaluation_name, p.person_id, p.person_fname, p.person_lname, e.evaluation_by, a.answer_id as 'status'
                    FROM ethc_evaluater_person ep
                    JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    JOIN sev_person p ON ep.person_id = p.person_id
                    LEFT OUTER JOIN ethc_answer a ON ep.evaluation_id = a.evaluation_id AND ep.evaluater_id = a.evaluater_id AND ep.person_id = a.person_id
                    WHERE ep.evaluater_id = '" . $evaluater_id . "'
                    GROUP BY ep.evaluation_id, ep.evaluater_id, ep.person_id";
        $result = $this->db->query($sql)->result();
        return $result;
    }
    
}
