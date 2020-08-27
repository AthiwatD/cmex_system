<?php

class QuestionGroup_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getQuestionGroups() {

        $sql = "SELECT *
                FROM qstn_question_group qg
                JOIN qstn_form f ON qg.form_id = f.form_id
                JOIN qstn_category ct ON qg.category_id = ct.category_id
                JOIN qstn_choice_group cg ON qg.choice_group_id = cg.choice_group_id
                JOIN qstn_choice c ON cg.choice_group_id = c.choice_group_id
                ORDER BY f.form_id DESC, ct.category_number ASC, qg.question_group_number ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getQuestionGroup($question_group_id) {

        $sql = "SELECT *
                FROM qstn_question_group qg
                JOIN qstn_form f ON qg.form_id = f.form_id
                JOIN qstn_category ct ON qg.category_id = ct.category_id
                JOIN qstn_choice_group cg ON qg.choice_group_id = cg.choice_group_id
                JOIN qstn_choice c ON cg.choice_group_id = c.choice_group_id
                WHERE qg.question_group_id = '" . $question_group_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    function addQuestionGroup(){
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
        $result = $this->db->insert('qstn_question_group', $data);
        return $result;
    }


    function updateQuestionGroup(){
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

    function deleteQuestionGroup($question_group_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('question_group_id', $question_group_id);
        //$result = $this->db->update('question_group', $data);
        $result = $this->db->delete("qstn_question_group");
        return $result;
    }
}
