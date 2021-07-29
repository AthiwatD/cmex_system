<?php

class Package_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getPackages(){
        
        $sql = "SELECT p.package_id, p.package_name, p.promo_name, p.price
                FROM chkup_package p
                ORDER BY p.package_name ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
    function getPackage($package_id){
        
        $sql = "SELECT * 
                FROM chkup_package p
                WHERE p.package_id = '" . $package_id . "'";
        $result = $this->db->query($sql);

        return $result->row();
    }
    
}
