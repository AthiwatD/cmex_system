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
                LEFT JOIN qstn_choice_group cg ON qg.choice_group_id = cg.choice_group_id
                GROUP BY qg.question_group_id 
                ORDER BY f.form_id DESC, CAST(ct.category_number AS UNSIGNED), ct.category_number ASC, CAST(qg.question_group_number AS UNSIGNED), qg.question_group_number ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getQuestionGroup($question_group_id) {

        $sql = "SELECT *
                FROM qstn_question_group qg
                JOIN qstn_form f ON qg.form_id = f.form_id
                JOIN qstn_category ct ON qg.category_id = ct.category_id
                LEFT JOIN qstn_choice_group cg ON qg.choice_group_id = cg.choice_group_id
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
        $question_numbers = $this->security->xss_clean($this->input->post('question_number'));
        $question_names = $this->security->xss_clean($this->input->post('question_name'));
        $data = array(
            'question_group_number' => $question_group_number,
            'question_group_name' => $question_group_name,
            'form_id' => $form_id,
            'category_id' => $category_id,
            'choice_group_id' => $choice_group_id,
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


    function updateQuestionGroup(){
        $question_group_id = $this->security->xss_clean($this->input->post('question_group_id'));
        $form_id = $this->security->xss_clean($this->input->post('form_id'));
        $category_id = $this->security->xss_clean($this->input->post('category_id'));
        $choice_group_id = $this->security->xss_clean($this->input->post('choice_group_id'));
        $question_group_number = $this->security->xss_clean($this->input->post('question_group_number'));
        $question_group_name = $this->security->xss_clean($this->input->post('question_group_name'));
        $question_ids = $this->security->xss_clean($this->input->post('question_id'));
        $question_numbers = $this->security->xss_clean($this->input->post('question_number'));
        $question_names = $this->security->xss_clean($this->input->post('question_name'));

        $data = array(
            'question_group_number' => $question_group_number,
            'question_group_name' => $question_group_name,
            'form_id' => $form_id,
            'category_id' => $category_id,
            'choice_group_id' => $choice_group_id,
        );
        
        $this->db->where('question_group_id', $question_group_id);
        $result = $this->db->update('qstn_question_group', $data);

        
        for($i=0;$i<sizeof($question_numbers);$i++){

            $data = array(
                'question_number' => $question_numbers[$i],
                'question_name' => $question_names[$i],
                'form_id' => $form_id,
                'category_id' => $category_id,
                'question_group_id' => $question_group_id,
            );
            if ($i < sizeof($question_ids)){ 
                $this->db->where('question_id', $question_ids[$i]);
                $result = $this->db->update('qstn_question', $data);
            }else{
                $result = $this->db->insert('qstn_question', $data);
            }
        }
        
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
