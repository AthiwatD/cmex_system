<?php

class Evaluation_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvaluation($evaluation_id) {

        $sql = "SELECT *
                    FROM qstn_evaluation e
                    LEFT JOIN qstn_form f ON e.form_id = f.form_id
                    LEFT JOIN qstn_category c ON f.form_id = c.form_id
                    LEFT JOIN qstn_question_group qg ON c.category_id = qg.category_id
                    LEFT JOIN qstn_question q ON qg.question_group_id = q.question_group_id
                    WHERE e.evaluation_id = '" . $evaluation_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    
}
