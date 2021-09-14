<?php

class EvaluaterPerson_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getEvaluaterPersons() {

        $sql = "SELECT *
                    FROM ethc_evaluater_person ep
                    ORDER BY ep.evaluation_id DESC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getEvaluatersPersons($evaluation_id) {

        $sql = "SELECT ep.evaluation_id, p1.person_id as 'evaluater_id', p1.person_fname as 'evaluater_fname', p1.person_lname as evaluater_lname,
						p2.person_id, p2.person_fname, p2.person_lname
                    FROM ethc_evaluater_person ep		
					JOIN sev_person p1 ON ep.evaluater_id = p1.person_id
					JOIN sev_person p2 ON ep.person_id = p2.person_id
                    WHERE ep.evaluation_id = '" . $evaluation_id . "'";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

	function updateEvaluaterPersons(){

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
                
				$create_by = $this->session->username;
				date_default_timezone_set('Asia/Bangkok');
				$create_datetime = date('Y-m-d H:i:s', time());

                $evaluation_id = $points->evaluation_id;
				$evaluater_id = $points->evaluater_id;
                // $this->db->where('evaluation_id', $evaluation_id);
                // $result = $this->db->delete("qstn_evaluate_person");
                foreach($points->persons as $key => $value){
                    $person_id = $points->persons->$key->person_id;
                    
                    $data = array(
                        'evaluation_id' => $evaluation_id,
						'evaluater_id' => $evaluater_id,
                        'person_id' => $person_id,
						'create_by' => $create_by,
						'create_datetime' => $create_datetime,
						'deleted' => 0,
                    );
                    $result = $this->db->insert('ethc_evaluater_person', $data); 
			
                }
                return $result;
            }
        }

    }
}
