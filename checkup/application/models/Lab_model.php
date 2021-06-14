<?php

class Lab_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getLabs() {

		$sql = "SELECT *
				FROM chkup_lab_meaning l
				JOIN chkup_lab_group lg ON l.lab_group_id = lg.lab_group_id";
        
        $result = $this->db->query($sql)->result();
        return $result;
    }

	function getLabMeaning($lab_id, $value){

		// $lab_id = $this->security->xss_clean($this->input->post('lab_id'));
		// $value = $this->security->xss_clean($this->input->post('value'));
		$sql = "SELECT low_result, high_result, abnormal_result
				FROM chkup_lab_meaning
				WHERE lab_meaning_id = '" . $lab_id . "'";
        
        $result = $this->db->query($sql)->row();

		if($value=="low"){
			return $result->low_result;
		}
		elseif($value=="high"){
			return $result->high_result;
		}
		elseif($value=="abnormal"){
			return $result->abnormal_result;
		}
		else{
			return "";
		}
	}
}
