
<?php

class Answer_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function addAnswer() {

        $choice_of_question = $this->security->xss_clean($this->input->post('choice_of_question'));
        $suggestion_detial =  $this->security->xss_clean($this->input->post('suggestion_detial'));
        for($i=0;$i<sizeof($choice_of_question);$i++){
            $answers[$i] = explode("(.)",$choice_of_question[$i]);
            $data = array(
                'evaluation_id' => $answers[$i][0],
                'form_id' => $answers[$i][1],
                'category_id' => $answers[$i][2],
                'question_group_id' => $answers[$i][3],
                'question_id' => $answers[$i][4],
                'choice_group_id' => $answers[$i][5],
                'choice_id' => $answers[$i][6],
                'choice_name' => $answers[$i][7],
                'choice_point' => $answers[$i][8],
                'person_id' => $answers[$i][9],
            );
            $result = $this->db->insert('qstn_answer', $data);
        }
        
        
        //$insert_id = $this->db->insert_id();

        
        $data = array(
            'suggestion_detail' => $suggestion_detial,
            'evaluation_id' => $answers[0][0],
            'form_id' => $answers[0][1],
            'person_id' => $answers[0][9],
        );
        $result = $this->db->insert('qstn_suggestion', $data);


        $this->db->query("UPDATE qstn_evaluate_person
                  SET 
                     evaluate_time = DATE_ADD(NOW(), INTERVAL 1 MINUTE)
                  WHERE evaluation_id = '" . $answers[0][0] . "'
                  AND person_id = '" . $answers[0][9] . "'");


        return $result;
    }

    
}


