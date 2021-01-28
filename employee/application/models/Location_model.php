<?php

class Location_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getLocations(){
        
        $sql = "SELECT l.Ward_code, l.ward_name, l.ward_name_eng, ward_tel, ward_tel2
                FROM tb_location1 l
                ORDER BY l.Ward_code ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
}
