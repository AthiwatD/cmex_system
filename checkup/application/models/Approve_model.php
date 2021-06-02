<?php

class Approve_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getMeetingPerson($meeting_id, $meeting_person_id) {

        $sql = "SELECT *
                FROM met_meeting_person mp
                JOIN met_meeting m ON mp.meeting_id = m.meeting_id
                WHERE mp.meeting_id = '" . $meeting_id . "'
                AND mp.meeting_person_id = '" . $meeting_person_id . "'" ;
        $result = $this->db->query($sql)->row();
        return $result;
    }

    function getMeetingPersonsWithFiles($meeting_id){
        $sql = "SELECT *
                FROM met_meeting_person mp
                JOIN met_file f ON mp.meeting_id = f.meeting_id
                WHERE mp.meeting_id = '" . $meeting_id . "'
                AND f.meeting_person_id != '0'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getMeetingPersonWithFiles($meeting_person_id){
        $sql = "SELECT *
                FROM met_meeting_person mp
                JOIN met_file f ON mp.meeting_id = f.meeting_id
                WHERE f.meeting_person_id = '" . $meeting_person_id . "'
                AND f.meeting_person_id != '0'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function updateWatched($meeting_person_id){
        date_default_timezone_set('Asia/Bangkok');
        $watched_datetime = date('Y-m-d H:i:s', time());

        $data = array(
            'watched_datetime' => $watched_datetime,
        );
        $this->db->where('meeting_person_id', $meeting_person_id);
        $result = $this->db->update('met_meeting_person', $data);
    }

    function approve($final_files_data,$meeting_id, $meeting_person_id){
        
        $suggest = $this->security->xss_clean($this->input->post('suggest'));

        date_default_timezone_set('Asia/Bangkok');
        $approved_datetime = date('Y-m-d H:i:s', time());

        $data = array(
            'suggest' => $suggest,
            'approved_datetime' => $approved_datetime,
        );
        $this->db->where('meeting_person_id', $meeting_person_id);
        $result = $this->db->update('met_meeting_person', $data);

        if(!empty($final_files_data)){
            foreach ($final_files_data as $file){ 
                if($file["file_name"] != ""){
                    $doc_file = base_url() . "uploads/" . $file["file_name"];
                }
                $data = array(
                    
                    'file_name' => $file["file_name"],
                    'file_path' => $doc_file,
                    'meeting_id' => $meeting_id,
                    'meeting_person_id' => $meeting_person_id,
                );
                $result = $this->db->insert('met_file', $data);
            }
        }   

    }
}
