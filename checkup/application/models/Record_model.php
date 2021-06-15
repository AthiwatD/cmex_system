<?php

class Record_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecordsDate($date) {

		$sql = "SELECT c.record_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name,c.sex, c.birthdate, 
						c.age, c.tel, p.package_name, l.location_abbre, l.location_name, c.record_date
				FROM chkup_record c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
				WHERE c.record_date = '" . $date . "'
				AND c.deleted = 0
				ORDER BY c.record_id ASC";
        
        $result = $this->db->query($sql)->result();
        return $result;
    }

	function getRecordsLocationDate($location_id, $date){
		$sql = "SELECT c.record_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name,c.sex, c.birthdate, 
						c.age, c.tel, p.package_name, l.location_abbre, l.location_name, c.record_date
				FROM chkup_record c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
				WHERE c.record_date = '" . $date . "'
				AND l.location_id = '" . $location_id . "'
				AND c.deleted = 0
				ORDER BY c.record_id ASC";
        
        $result = $this->db->query($sql)->result();
        return $result;
	}

	function getRecordsDateFromTo($date_from, $date_to){
		$sql = "SELECT c.record_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name, c.sex, c.birthdate,
						c.age, c.tel, p.package_name, l.location_abbre, l.location_name, c.record_date
				FROM chkup_record c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
				WHERE c.record_date >= $date_from
				AND c.record_date <= $date_to
				AND c.deleted = 0
				ORDER BY c.record_id ASC, c.record_date DESC";
		$result = $this->db->query($sql)->result();
		return $result;
	}

	function getRecordsAll(){
		$sql = "SELECT c.record_id, c.pid, c.txn, c.hn, c.title_name, c.first_name, c.last_name,
							c.sex, c.birthdate, c.age, c.tel, p.package_name, c.record_date
				FROM chkup_record c
				JOIN chkup_package p ON c.package_id = p.package_id
				WHERE c.deleted = 0
				ORDER BY c.record_id ASC, c.record_date DESC";
		$result = $this->db->query($sql)->result();
        return $result;
	}

    function getRecord($record_id) {

        $sql = "SELECT *
                FROM chkup_record c
				JOIN chkup_package p ON c.package_id = p.package_id
				JOIN chkup_location l ON c.location_id = l.location_id
                WHERE c.record_id = '" . $record_id . "'";
        $result = $this->db->query($sql)->row();
        return $result;
    }

	function updateTab($checkup_id,$tab_id,$input_data){
		// $data = array(
        //     'pid' => $pid,
        //     'txn' => $txn,
        //     'hn' => $hn,
        //     'title_name' => $title_name,
        //     'first_name' => $first_name,
        //     'last_name' => $last_name,
        //     'sex' => $sex,
		// 	'birthdate' => $birthdate,
        //     'age' => $age,
        //     'tel' => $tel,
        //     'address' => $address,
        //     'zip_code' => $zip_code,
        //     'allergic' => $allergic,
        //     'package_id' => $package_id,
		// 	'location_id' => $location_id,
        //     'record_date' => $record_date,
        //     'create_by' => $create_by,
        //     'create_time' => $create_time,
        //     'deleted' => 0,
        // );
	}


    function addRecord(){
        
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
		$record_date = $this->security->xss_clean($this->input->post('record_date'));

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
            'record_date' => $record_date,
            'create_by' => $create_by,
            'create_time' => $create_time,
            'deleted' => 0,
        );
        
        $result = $this->db->insert('chkup_record', $data);
        $record_id = $this->db->insert_id();           
        return $result;
    }

    function updateRecord(){
        $record_id = $this->security->xss_clean($this->input->post('record_id'));

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
		$record_date = $this->security->xss_clean($this->input->post('record_date'));

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
            'record_date' => $record_date,
            'update_by' => $update_by,
            'update_time' => $update_time,

            'deleted' => 0,
        );

        $this->db->where('record_id', $record_id);
        $result = $this->db->update('chkup_record', $data);

        return $result;
    }

	function deleteRecord($record_id){
		$update_by = $this->session->username;
        date_default_timezone_set('Asia/Bangkok');
		$update_time = date('Y-m-d H:i:s', time());

		
        $data = array(
			'update_by' => $update_by,
            'update_time' => $update_time,
            'deleted' => 1,
        );

        $this->db->where('record_id', $record_id);
        $result = $this->db->update('chkup_record', $data);

        return $result;
	}
}
