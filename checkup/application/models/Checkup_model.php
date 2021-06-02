<?php

class Checkup_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getCheckupsDate($date) {

		$sql = "SELECT c.checkup_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name,c.sex, c.birthdate, 
						c.age, c.tel, p.package_name, l.location_abbre, l.location_name, c.checkup_date
				FROM chkup_checkup c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
				WHERE c.checkup_date = '" . $date . "'
				AND c.deleted = 0
				ORDER BY c.checkup_id ASC";
        
        $result = $this->db->query($sql)->result();
        return $result;
    }

	function getCheckupsLocationDate($location_id, $date){
		$sql = "SELECT c.checkup_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name,c.sex, c.birthdate, 
						c.age, c.tel, p.package_name, l.location_abbre, l.location_name, c.checkup_date
				FROM chkup_checkup c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
				WHERE c.checkup_date = '" . $date . "'
				AND l.location_id = '" . $location_id . "'
				AND c.deleted = 0
				ORDER BY c.checkup_id ASC";
        
        $result = $this->db->query($sql)->result();
        return $result;
	}

	function getCheckupsDateFromTo($date_from, $date_to){
		$sql = "SELECT c.checkup_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name, c.sex, c.birthdate,
						c.age, c.tel, p.package_name, l.location_abbre, l.location_name, c.checkup_date
				FROM chkup_checkup c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
				WHERE c.checkup_date >= $date_from
				AND c.checkup_date <= $date_to
				AND c.deleted = 0
				ORDER BY c.checkup_id ASC, c.checkup_date DESC";
		$result = $this->db->query($sql)->result();
		return $result;
	}

	function getCheckupsAll(){
		$sql = "SELECT c.checkup_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name,
							c.sex, c.birthdate, c.age, c.tel, p.package_name, c.checkup_date
				FROM chkup_checkup c
				JOIN chkup_package p ON c.package_id = p.package_id
				WHERE c.deleted = 0
				ORDER BY c.checkup_id ASC, c.checkup_date DESC";
		$result = $this->db->query($sql)->result();
        return $result;
	}

    function getCheckup($checkup_id) {

        $sql = "SELECT *
                FROM chkup_checkup c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
                WHERE c.checkup_id = '" . $checkup_id . "'";
        $result = $this->db->query($sql)->row();
        return $result;
    }

    function addCheckup(){
        
		$txn = $this->security->xss_clean($this->input->post('txn'));
        $hn = $this->security->xss_clean($this->input->post('hn'));
        $pid = $this->security->xss_clean($this->input->post('pid'));
		$title_name = $this->security->xss_clean($this->input->post('title_name'));
        $first_name = $this->security->xss_clean($this->input->post('first_name'));
        $last_name = $this->security->xss_clean($this->input->post('last_name'));
		$sex = $this->security->xss_clean($this->input->post('sex'));
        $birthdate = $this->security->xss_clean($this->input->post('birthdate'));
        $age = $this->security->xss_clean($this->input->post('age'));
        $tel = $this->security->xss_clean($this->input->post('tel'));
        $address = $this->security->xss_clean($this->input->post('address'));
        $zip_code = $this->security->xss_clean($this->input->post('zip_code'));
		$allergic = $this->security->xss_clean($this->input->post('allergic'));
		$package_id = $this->security->xss_clean($this->input->post('package_id'));
		$location_id = $this->security->xss_clean($this->input->post('location_id'));
		$checkup_date = $this->security->xss_clean($this->input->post('checkup_date'));

        // $approve_expire_datetime = date("Y-m-d H:i:s", strtotime($approve_expire_date . " " . $approve_expire_time));

		$create_by = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
		$create_time = date('Y-m-d H:i:s', time());

		
        $data = array(
            'pid' => $pid,
            'txn' => $txn,
            'hn' => $hn,
            'title_name' => $title_name,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'sex' => $sex,
			'birthdate' => $birthdate,
            'age' => $age,
            'tel' => $tel,
            'address' => $address,
            'zip_code' => $zip_code,
            'allergic' => $allergic,
            'package_id' => $package_id,
			'location_id' => $location_id,
            'checkup_date' => $checkup_date,
            'create_by' => $create_by,
            'create_time' => $create_time,
            'deleted' => 0,
        );
        
        $result = $this->db->insert('chkup_checkup', $data);
        $checkup_id = $this->db->insert_id();           
        return $result;
    }

    function updateCheckup(){
        $checkup_id = $this->security->xss_clean($this->input->post('checkup_id'));

        $txn = $this->security->xss_clean($this->input->post('txn'));
        $hn = $this->security->xss_clean($this->input->post('hn'));
        $pid = $this->security->xss_clean($this->input->post('pid'));
		$title_name = $this->security->xss_clean($this->input->post('title_name'));
        $first_name = $this->security->xss_clean($this->input->post('first_name'));
        $last_name = $this->security->xss_clean($this->input->post('last_name'));
		$sex = $this->security->xss_clean($this->input->post('sex'));
        $birthdate = $this->security->xss_clean($this->input->post('birthdate'));
        $age = $this->security->xss_clean($this->input->post('age'));
        $tel = $this->security->xss_clean($this->input->post('tel'));
        $address = $this->security->xss_clean($this->input->post('address'));
        $zip_code = $this->security->xss_clean($this->input->post('zip_code'));
		$allergic = $this->security->xss_clean($this->input->post('allergic'));
		$package_id = $this->security->xss_clean($this->input->post('package_id'));
		$location_id = $this->security->xss_clean($this->input->post('location_id'));
		$checkup_date = $this->security->xss_clean($this->input->post('checkup_date'));

        $update_by = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
		$update_time = date('Y-m-d H:i:s', time());

		
        $data = array(
            'pid' => $pid,
            'txn' => $txn,
            'hn' => $hn,
            'title_name' => $title_name,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'sex' => $sex,
			'birthdate' => $birthdate,
            'age' => $age,
            'tel' => $tel,
            'address' => $address,
            'zip_code' => $zip_code,
            'allergic' => $allergic,
            'package_id' => $package_id,
			'location_id' => $location_id,
            'checkup_date' => $checkup_date,
            'update_by' => $update_by,
            'update_time' => $update_time,

            'deleted' => 0,
        );

        $this->db->where('checkup_id', $checkup_id);
        $result = $this->db->update('chkup_checkup', $data);

        return $result;
    }

	function deleteCheckup($checkup_id){
		$update_by = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
		$update_time = date('Y-m-d H:i:s', time());

		
        $data = array(
			'update_by' => $update_by,
            'update_time' => $update_time,
            'deleted' => 1,
        );

        $this->db->where('checkup_id', $checkup_id);
        $result = $this->db->update('chkup_checkup', $data);

        return $result;
	}
}
