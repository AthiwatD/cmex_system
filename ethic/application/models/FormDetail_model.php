<?php

class FormDetail_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }



    function getFormDetails($form_id) {

        $sql = "SELECT *
                FROM qstn_form_detail fd
                JOIN qstn_form f ON fd.form_id = f.form_id
                WHERE fd.form_id = '" . $form_id . "'
                ORDER BY CAST(fd.form_detail_number AS UNSIGNED), fd.form_detail_number ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

}
