<?php

class Document_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getDocuments(){
        
        $sql = "SELECT *
                FROM qq_document d";
                
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
}
