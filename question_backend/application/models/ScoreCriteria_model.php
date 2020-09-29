<?php

class ScoreCriteria_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getScoreCriterias() {

        $sql = "SELECT *
                FROM qstn_score_criteria sc";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getScoreCriteria($score_criteria_id) {

        $sql = "SELECT *
                FROM qstn_score_criteria sc
                WHERE sc.score_criteria_id = '" . $score_criteria_id . "'";
                    
                    
        $result = $this->db->query($sql)->row();

        return $result;
    }

    
    function addScoreCriteria(){
        
        $score_criteria_name = $this->security->xss_clean($this->input->post('score_criteria_name'));
        $criteria_arr = $this->security->xss_clean($this->input->post('criteria'));
        $min_score_arr = $this->security->xss_clean($this->input->post('min_score'));
        $max_score_arr = $this->security->xss_clean($this->input->post('max_score'));
        $meaning_arr = $this->security->xss_clean($this->input->post('meaning'));
        $color_code_arr = $this->security->xss_clean($this->input->post('color_code'));

        $criterias = implode("(.)",$criteria_arr);
        $min_scores = implode("(.)",$min_score_arr);
        $max_scores = implode("(.)",$max_score_arr);
        $meanings = implode("(.)",$meaning_arr);
        $color_codes = implode("(.)",$color_code_arr);

        $data = array(
            'score_criteria_name' => $score_criteria_name,
            'criterias' => $criterias,
            'min_scores' => $min_scores,
            'max_scores' => $max_scores,
            'meanings' => $meanings,
            'color_codes' => $color_codes,
        );
        $result = $this->db->insert('qstn_score_criteria', $data);

        return $result;
    }


    function updateScoreCriteria(){
        $score_criteria_id = $this->security->xss_clean($this->input->post('score_criteria_id'));
        $score_criteria_name = $this->security->xss_clean($this->input->post('score_criteria_name'));
        $criteria_arr = $this->security->xss_clean($this->input->post('criteria'));
        $min_score_arr = $this->security->xss_clean($this->input->post('min_score'));
        $max_score_arr = $this->security->xss_clean($this->input->post('max_score'));
        $meaning_arr = $this->security->xss_clean($this->input->post('meaning'));
        $color_code_arr = $this->security->xss_clean($this->input->post('color_code'));

        $criterias = implode("(.)",$criteria_arr);
        $min_scores = implode("(.)",$min_score_arr);
        $max_scores = implode("(.)",$max_score_arr);
        $meanings = implode("(.)",$meaning_arr);
        $color_codes = implode("(.)",$color_code_arr);

        $data = array(
            'score_criteria_name' => $score_criteria_name,
            'criterias' => $criterias,
            'min_scores' => $min_scores,
            'max_scores' => $max_scores,
            'meanings' => $meanings,
            'color_codes' => $color_codes,
        );
        
        $this->db->where('score_criteria_id', $score_criteria_id);
        $result = $this->db->update('qstn_score_criteria', $data);
        return $result;
    }

    function deleteScoreCriteria($score_criteria_group_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('score_criteria_id', $score_criteria_id);
        //$result = $this->db->update('score_criteria_group', $data);
        $result = $this->db->delete("qstn_score_criteria");
        return $result;
    }
}
