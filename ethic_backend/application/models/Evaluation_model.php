<?php

class Evaluation_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvaluations() {

        $sql = "SELECT *
                    FROM qstn_evaluation e
                    JOIN qstn_form f ON e.form_id = f.form_id
                    JOIN sev_person p ON e.create_by = p.person_id
                    ORDER BY e.evaluation_id DESC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getEvaluation($evaluation_id) {

        $sql = "SELECT *
                    FROM qstn_evaluation e
                    JOIN qstn_form f ON e.form_id = f.form_id
                    JOIN sev_person p ON e.create_by = p.person_id
                    WHERE e.evaluation_id = '" . $evaluation_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }
}
