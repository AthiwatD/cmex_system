<?php

class FormDetail_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getFormDetails() {

        $sql = "SELECT *
                FROM qstn_form_detail fd
                JOIN qstn_form f ON fd.form_id = f.form_id
                ORDER BY f.form_id DESC, fd.form_detail_number ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getFormDetail($form_detail_id) {

        $sql = "SELECT *
                    FROM qstn_form_detail fd
                    JOIN qstn_form f ON fd.form_id = f.form_id
                    WHERE fd.form_detail_id = '" . $form_detail_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function addFormDetail(){
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $form_detail_number = $this->security->xss_clean($this->input->post('form_detail_number'));
        $form_detail_name = $this->security->xss_clean($this->input->post('form_detail_name'));
        $form_detail_item = $this->security->xss_clean($this->input->post('form_detail_item'));
        $form_detail_items = "";
        for($i=0;$i<sizeof($form_detail_item);$i++){
            if($i!=0){
                $form_detail_items .= "#&#";
            }
            $form_detail_items .= $form_detail_item[$i];
        }
        $data = array(
            'form_detail_number' => $form_detail_number,
            'form_detail_name' => $form_detail_name,
            'form_detail_items' => $form_detail_items,
            'form_id' => $form_id,
        );
        $result = $this->db->insert('qstn_form_detail', $data);
        return $result;
    }


    function updateFormDetail(){
        $form_detail_id = $this->security->xss_clean($this->input->post('form_detail_id'));
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $form_detail_number = $this->security->xss_clean($this->input->post('form_detail_number'));
        $form_detail_name = $this->security->xss_clean($this->input->post('form_detail_name'));
        $form_detail_item = $this->security->xss_clean($this->input->post('form_detail_item'));
        
        $form_detail_items = "";
        for($i=0;$i<sizeof($form_detail_item);$i++){
            if($i!=0){
                $form_detail_items .= "#&#";
            }
            $form_detail_items .= $form_detail_item[$i];
        }
        $data = array(
            'form_detail_number' => $form_detail_number,
            'form_detail_name' => $form_detail_name,
            'form_detail_items' => $form_detail_items,
            'form_id' => $form_id,
        );
        $this->db->where('form_detail_id', $form_detail_id);
        $result = $this->db->update('qstn_form_detail', $data);
        return $result;
    }

    function deleteFormDetail($form_detail_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('form_detail_id', $form_detail_id);
        //$result = $this->db->update('form_detail', $data);
        $result = $this->db->delete("qstn_form_detail");
        return $result;
    }
}
