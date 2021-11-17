<?php

class Staff_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getStaffs(){
        
        $sql = "SELECT TRIM(SUBSTRING_INDEX(s.staff_fname,'.',-1)) as 'staff_fname', TRIM(s.staff_lname) as 'staff_lname'
                FROM df_staff s
				ORDER BY s.staff_fname ASC, s.staff_lname ASC";
                
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
}
