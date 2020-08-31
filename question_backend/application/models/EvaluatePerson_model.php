<?php

class EvaluatePerson_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvaluations() {

        $sql = "SELECT *, COUNT(ep.evaluate_person_id) as 'person_count'
                    FROM qstn_evaluate_person ep
                    RIGHT JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    GROUP By e.evaluation_id
                    ORDER BY e.evaluation_id DESC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getEvaluatePersons($evaluation_id) {

        $sql = "SELECT *
                    FROM qstn_evaluate_person ep
                    JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    JOIN sev_person p ON ep.person_id = p.person_id
                    JOIN sev_position pos ON p.position_id = pos.position_id
                    WHERE ep.evaluation_id = '" . $evaluation_id . "'";
                    
                    
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function updateEvaluatePersons(){
        //$txt = "{"evaluation_id":"1","persons":{"0":{"person_id":"20017"},"1":{"person_id":"20041"}}}";
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);
        //return $points;

        if(!isset($points)){
            return "NOT isset";
        }
        else{
            if(empty($points)){
                return "NOT POSTED";
            }
            else{
                
                $evaluation_id = $points->evaluation_id;
                $this->db->where('evaluation_id', $evaluation_id);
                $result = $this->db->delete("qstn_evaluate_person");
                foreach($points->persons as $key => $value){
                    $person_id = $points->persons->$key->person_id;
                    
                    $data = array(
                        'evaluation_id' => $evaluation_id,
                        'person_id' => $person_id,
                    );
                    $result = $this->db->insert('qstn_evaluate_person', $data); 
                }
                
                return "PASSED";
            }
        }

    }

    function deleteEvaluatePersons($evaluation_id){
        $this->db->where('evaluation_id', $evaluation_id);
        $result = $this->db->delete("qstn_evaluate_person");
        return $result;
    }

    
}
