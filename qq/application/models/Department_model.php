<?php

class Department_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getDepartments($site_id){
        
        $sql = "SELECT d.department_id, d.department_code, d.department_name, d.site_id, c.channel_id, c.channel_name, c.channel_number 
                FROM qq_department d
				LEFT JOIN qq_channel c ON d.department_id = c.department_id
				WHERE d.site_id = '" . $site_id . "'
                ORDER BY d.department_id ASC, c.channel_name ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
	function getDepartment($department_id){
        
        $sql = "SELECT *
                FROM qq_department d
				WHERE d.department_id = '" . $department_id . "'";
        $result = $this->db->query($sql)->row();
        
        return $result;
    }
}
