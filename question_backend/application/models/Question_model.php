<?php

class Question_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getQuestions() {

        $sql = "SELECT *
                FROM qstn_question q
                JOIN qstn_form f ON q.form_id = f.form_id
                JOIN qstn_category ct ON q.category_id = ct.category_id
                JOIN qstn_question_group qg ON q.question_group_id = qg.question_group_id
                ORDER BY f.form_id DESC, q.question_number ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getQuestion($question_id) {

        $sql = "SELECT *
                FROM qstn_question q
                JOIN qstn_form f ON q.form_id = f.form_id
                JOIN qstn_category ct ON q.category_id = ct.category_id
                JOIN qstn_question_group qg ON q.question_group_id = qg.question_group_id
                WHERE q.question_id = '" . $question_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    /*
    function addQuestion(){
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $category_id = $this->security->xss_clean($this->input->post('category_id'));
        $question_group_number = $this->security->xss_clean($this->input->post('question_group_number'));
        $question_group_name = $this->security->xss_clean($this->input->post('question_group_name'));
        $question_numbers = $this->security->xss_clean($this->input->post('question_number'));
        $question_names = $this->security->xss_clean($this->input->post('question_name'));
        $data = array(
            'question_group_number' => $question_group_number,
            'question_group_name' => $question_group_name,
            'form_id' => $form_id,
            'category_id' => $category_id,
        );
        $result = $this->db->insert('qstn_question_group', $data);
        $insert_id = $this->db->insert_id();

        for($i=0;$i<sizeof($question_numbers);$i++){
            $data = array(
                'question_number' => $question_numbers[$i],
                'question_name' => $question_names[$i],
                'form_id' => $form_id,
                'category_id' => $category_id,
                'question_group_id' => $insert_id,
            );
            $result = $this->db->insert('qstn_question', $data);
        }
        
        return $result;
    }


    function updateQuestion(){
        $question_group_id = $this->security->xss_clean($this->input->post('question_group_id'));
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $category_id = $this->security->xss_clean($this->input->post('category_id'));
        $choice_group_id = $this->security->xss_clean($this->input->post('choice_group_id'));
        $question_group_number = $this->security->xss_clean($this->input->post('question_group_number'));
        $question_group_name = $this->security->xss_clean($this->input->post('question_group_name'));
        
        $data = array(
            'question_group_number' => $question_group_number,
            'question_group_name' => $question_group_name,
            'form_id' => $form_id,
            'category_id' => $category_id,
            'choice_group_id' => $choice_group_id,
        );
        
        $this->db->where('question_group_id', $question_group_id);
        $result = $this->db->update('qstn_question_group', $data);
        return $result;
    }

    function deleteQuestion($question_group_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('question_group_id', $question_group_id);
        //$result = $this->db->update('question_group', $data);
        $result = $this->db->delete("qstn_question_group");
        return $result;
    }
    */

    function deleteQuestions($question_group_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('question_group_id', $question_group_id);
        //$result = $this->db->update('question_group', $data);
        $result = $this->db->delete("qstn_question");
        return $result;
    }
}
