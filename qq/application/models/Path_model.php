<?php

class Path_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getPaths($site_id){
        
        $sql = "SELECT *
                FROM qq_path p
                WHERE p.site_id = '" . $site_id . "'";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
}
