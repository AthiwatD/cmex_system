<?php

class Channel_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
     
	function getChannel($channel_id){
        
        $sql = "SELECT *
                FROM qq_channel c
				WHERE c.channel_id = '" . $channel_id . "'";
        $result = $this->db->query($sql)->row();
        
        return $result;
    }
}
