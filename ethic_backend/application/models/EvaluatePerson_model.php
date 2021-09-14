<?php

class EvaluatePerson_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvaluations() {

        $sql = "SELECT *, COUNT(ep.evaluate_person_id) as 'person_count', SUM(if(ep.evaluate_time != '0000-00-00 00:00:00', 1, 0)) AS 'person_not_evaluate_count'
                    FROM qstn_evaluate_person ep
                    RIGHT JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    GROUP By e.evaluation_id
                    ORDER BY e.evaluation_id DESC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getEvaluatePersonSummary($evaluation_id) {

        // $sql = "SELECT COUNT(ep.evaluate_person_id) as 'person_count', (if(ep.evaluate_time != '0000-00-00 00:00:00', 1, 0)) AS 'person_evaluate_count'
        //             FROM qstn_evaluate_person ep
        //             RIGHT JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
        //             WHERE ep.evaluation_id = '" . $evaluation_id . "'
        //             GROUP By e.evaluation_id
        //             ORDER BY e.evaluation_id DESC";

		$data = new stdClass();
		
        $sql = "SELECT COUNT(ep.evaluate_person_id) as 'person_count'   
		 		FROM qstn_evaluate_person ep
				WHERE ep.evaluation_id = '" . $evaluation_id . "'
				";
		$result = $this->db->query($sql)->row();

		$data->person_count = $result->person_count;

        $sql = "SELECT COUNT(c.person_count) as 'person_evaluate_count'
				FROM(
							SELECT DISTINCT a.person_id as 'person_count'
							FROM qstn_answer a
							WHERE a.evaluation_id = '5'
				) c";
        $result = $this->db->query($sql)->row();
		
		$data->person_evaluate_count= $result->person_evaluate_count;

        return $data;
    }

    function getEvaluatePersons($evaluation_id) {

		$sql = "SELECT e.evaluation_id, e.evaluation_name, p.person_id, p.person_fname, p.person_lname, pos.position_name, cen.center_name, a.answer_id
                    FROM qstn_evaluate_person ep
                    JOIN qstn_evaluation e ON ep.evaluation_id = e.evaluation_id
                    JOIN sev_person p ON ep.person_id = p.person_id
                    JOIN sev_position pos ON p.position_id = pos.position_id
					JOIN sev_center cen ON p.center_id = cen.center_id
					LEFT JOIN qstn_answer a ON e.evaluation_id = a.evaluation_id
																				AND ep.person_id = a.person_id
                    WHERE e.evaluation_id = '" . $evaluation_id . "'
					GROUP BY p.person_id";
                    
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
