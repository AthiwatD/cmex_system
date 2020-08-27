<?php

class Category_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getCategories() {

        $sql = "SELECT *
                FROM qstn_category c
                JOIN qstn_form f ON c.form_id = f.form_id
                ORDER BY f.form_id DESC, c.category_number ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getCategory($category_id) {

        $sql = "SELECT *
                    FROM qstn_category c
                    JOIN qstn_form f ON c.form_id = f.form_id
                    WHERE c.category_id = '" . $category_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function addCategory(){
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $category_number = $this->security->xss_clean($this->input->post('category_number'));
        $category_name = $this->security->xss_clean($this->input->post('category_name'));
        
        $data = array(
            'category_number' => $category_number,
            'category_name' => $category_name,
            'form_id' => $form_id,
        );
        $result = $this->db->insert('qstn_category', $data);
        return $result;
    }


    function updateCategory(){
        $category_id = $this->security->xss_clean($this->input->post('category_id'));
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $category_number = $this->security->xss_clean($this->input->post('category_number'));
        $category_name = $this->security->xss_clean($this->input->post('category_name'));
        
        $data = array(
            'category_number' => $category_number,
            'category_name' => $category_name,
            'form_id' => $form_id,
        );
        $this->db->where('category_id', $category_id);
        $result = $this->db->update('qstn_category', $data);
        return $result;
    }

    function deleteCategory($category_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('category_id', $category_id);
        //$result = $this->db->update('category', $data);
        $result = $this->db->delete("qstn_category");
        return $result;
    }
}
