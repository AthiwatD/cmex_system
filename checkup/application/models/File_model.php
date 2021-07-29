<?php

class File_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function getFiles($checkup_id){
        $sql = "SELECT *
                FROM chkup_file f
                WHERE f.checkup_id = '" . $checkup_id . "'
                AND f.deleted != 1";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function addFile($file_name, $file_path, $checkup_id, $tab_id){
        date_default_timezone_set('Asia/Bangkok');
        $document_datetime = date('Y-m-d H:i:s', time());
        $create_by = $this->session->username;
        $create_time = $document_datetime;
        $data = array(
            'file_name' => $file_name,
            'file_path' => $file_path,
            'checkup_id' => $checkup_id,
            'tab_id' => $tab_id,
            'create_by' => $create_by,
            'create_time' => $create_time,
            'deleted' => 0,
        );
        
        $result = $this->db->insert('chkup_file', $data);
        if($result){
            $file_id = $this->db->insert_id();
            return $file_id;
        }else{
            return 0;
        }
    }

    function deleteFile($file_id){
        $data = array(
            'deleted' => 1,
        );
        $this->db->where('file_id', $file_id);
        $result = $this->db->update('chkup_file', $data);
        // $result = $this->db->delete("met_file");
        return $result;
    }
}
