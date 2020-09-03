<?php

class Form_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getForms() {

        $sql = "SELECT *
                    FROM qstn_form f
                    ORDER BY f.form_id DESC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getForm($form_id) {

        $sql = "SELECT *
                    FROM qstn_form f
                    WHERE f.form_id = '" . $form_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function addForm(){
        $form_name = $this->security->xss_clean($this->input->post('form_name'));
        $form_description = $this->security->xss_clean($this->input->post('form_description'));
        $data = array(
            'form_name' => $form_name,
            'form_description' => $form_description,
        );
        $result = $this->db->insert('qstn_form', $data);
        return $result;
    }


    function updateForm(){
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $form_name = $this->security->xss_clean($this->input->post('form_name'));
        $form_description = $this->security->xss_clean($this->input->post('form_description'));
        $data = array(
            'form_name' => $form_name,
            'form_description' => $form_description,
        );
        $this->db->where('form_id', $form_id);
        $result = $this->db->update('qstn_form', $data);
        return $result;
    }

    function deleteForm($form_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('form_id', $form_id);
        //$result = $this->db->update('form', $data);
        $result = $this->db->delete("qstn_form");
        return $result;
    }
}
