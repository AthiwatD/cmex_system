<?php

class Claim_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getClaims(){
        
        $sql = "SELECT *
                FROM qq_claim c";
                
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
}
