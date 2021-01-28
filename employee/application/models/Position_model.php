<?php

class Position_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getPositions(){
        
        $sql = "SELECT position_code, position_name
                FROM tb_position p
                ORDER BY p.position_code ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
}
