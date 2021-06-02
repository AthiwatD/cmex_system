<?php

class Location_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getLocations(){
        
        $sql = "SELECT *
                FROM chkup_location l
                ORDER BY l.location_name ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
    function getLocation($location_id){
        
        $sql = "SELECT * 
                FROM chkup_location l
                WHERE l.location_id = '" . $location_id . "'";
        $result = $this->db->query($sql);

        return $result->row();
    }
    
}
