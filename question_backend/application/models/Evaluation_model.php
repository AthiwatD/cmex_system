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

    function addEvaluation(){
        $evaluation_name = $this->security->xss_clean($this->input->post('evaluation_name'));
        $evaluation_by = $this->security->xss_clean($this->input->post('evaluation_by'));
        $evaluation_description = $this->security->xss_clean($this->input->post('evaluation_description'));
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $date_start = $this->security->xss_clean($this->input->post('date_start'));
        $date_end = $this->security->xss_clean($this->input->post('date_end'));
        $data = array(
            'evaluation_name' => $evaluation_name,
            'evaluation_by' => $evaluation_by,
            'evaluation_description' => $evaluation_description,
            'form_id' => $form_id,
            'date_start' => $date_start,
            'date_end' => $date_end,
            'create_by' => $this->session->username,
        );
        $result = $this->db->insert('qstn_evaluation', $data);
        return $result;
    }


    function updateEvaluation(){
        $evaluation_id = $this->security->xss_clean($this->input->post('evaluation_id'));
        $evaluation_name = $this->security->xss_clean($this->input->post('evaluation_name'));
        $evaluation_by = $this->security->xss_clean($this->input->post('evaluation_by'));
        $evaluation_description = $this->security->xss_clean($this->input->post('evaluation_description'));
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $date_start = $this->security->xss_clean($this->input->post('date_start'));
        $date_end = $this->security->xss_clean($this->input->post('date_end'));
        $data = array(
            'evaluation_name' => $evaluation_name,
            'evaluation_by' => $evaluation_by,
            'evaluation_description' => $evaluation_description,
            'form_id' => $form_id,
            'date_start' => $date_start,
            'date_end' => $date_end,
        );
        $this->db->where('evaluation_id', $evaluation_id);
        $result = $this->db->update('qstn_evaluation', $data);
        return $result;
    }

    function deleteEvaluation($evaluation_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('evaluation_id', $evaluation_id);
        //$result = $this->db->update('evaluation', $data);
        $result = $this->db->delete("qstn_evaluation");
        return $result;
    }
}
