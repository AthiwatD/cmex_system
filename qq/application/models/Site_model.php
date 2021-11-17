<?php

class Site_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getSites(){
        
        $sql = "SELECT *
                FROM qq_site s
                ORDER BY s.site_id ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
	function getSite($site_id){
		$sql = "SELECT *
                FROM qq_site s
                WHERE s.site_id = '" . $site_id . "'";
        $result = $this->db->query($sql)->row();
        
        return $result;
	}
}
