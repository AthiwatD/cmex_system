<?php

class File_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getFilesById($doc_id, $doc_step_id){
        
        $sql = "SELECT * 
                FROM edc_file
                WHERE edc_file.doc_id = '" . $doc_id . "'
                AND edc_file.doc_step_id = '" . $doc_step_id . "'
                AND edc_file.deleted = 0 
                ORDER BY edc_file.file_name ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }

    function deleteFile($file_id){
        $update_by = $this->session->user_id;
        date_default_timezone_set('Asia/Bangkok');
        $update_time = date('Y-m-d H:i:s', time());
        $result = $this->db->where('file_id', $file_id)
                            ->set('deleted', true)
                            ->set('update_by', $update_by)
                            ->set('update_time', $update_time)
                            ->update('edc_file');
                            //->delete('edc_role_document');
        return $result;
    }
}
