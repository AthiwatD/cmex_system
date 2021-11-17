<?php

class Printer_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getPrinter($site_id){
        
        $sql = "SELECT *
                FROM qq_printer p
				WHERE p.site_id = '" . $site_id . "'";
                
        $result = $this->db->query($sql)->row();
        
        return $result;
    }
    
}
