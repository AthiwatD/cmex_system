<?php

class Meeting_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getMeetings() {

        $sql = "SELECT *
                FROM met_meeting m
                ORDER BY m.meeting_datetime DESC";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getMeeting($meeting_id) {

        $sql = "SELECT *
                FROM met_meeting m
                JOIN met_meeting_person mp ON m.meeting_id = mp.meeting_id
                JOIN bod_board b ON m.board_id = b.board_id
                WHERE m.meeting_id = '" . $meeting_id . "'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getBoardPersons($board_id){
        $sql = "SELECT *
                FROM bod_board_person bp
                JOIN bod_person p ON bp.person_id = p.person_id
                WHERE bp.board_id = '" . $board_id . "'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function addMeeting($final_files_data){
        
        $meeting_name = $this->security->xss_clean($this->input->post('meeting_name'));
        $meeting_datetime = $this->security->xss_clean($this->input->post('meeting_datetime'));
        $meeting_location = $this->security->xss_clean($this->input->post('meeting_location'));
        $approve_expire_datetime = $this->security->xss_clean($this->input->post('approve_expire_datetime'));

        $board_id = $this->security->xss_clean($this->input->post('board_id'));
        $board_name = $this->security->xss_clean($this->input->post('board_name'));

        $person_ids = $this->security->xss_clean($this->input->post('person_id'));
        $person_names = $this->security->xss_clean($this->input->post('person_name'));
        $position_names = $this->security->xss_clean($this->input->post('position_name'));

        date_default_timezone_set('Asia/Bangkok');
        $document_datetime = date('Y-m-d H:i:s', time());

        $data = array(
            'meeting_name' => $meeting_name,
            'meeting_datetime' => $meeting_datetime,
            'meeting_location' => $meeting_location,
            'document_datetime' => $document_datetime,
            'approve_expire_datetime' => $approve_expire_datetime,
            'board_id' => $board_id,
            'board_name' => $board_name,
        );
        
        $result = $this->db->insert('met_meeting', $data);
        $meeting_id = $this->db->insert_id();

        if(!empty($person_names)){
            foreach($person_names as $index => $person_name){
                $data = array(
                    'person_id' => $person_ids[$index],
                    'person_name' => $person_names[$index],
                    'position_name' => $position_names[$index],
                    'meeting_id' => $meeting_id,
                );
                
                $result = $this->db->insert('met_meeting_person', $data);


            }
        }

        if(!empty($final_files_data)){
            foreach ($final_files_data as $file){ 
                if($file["file_name"] != ""){
                    $doc_file = base_url() . "uploads/" . $file["file_name"];
                }
                $data = array(
                    
                    'file_name' => $file["file_name"],
                    'file_path' => $doc_file,
                    'meeting_id' => $meeting_id,
                    'meeting_person_id' => 0,
                );
                $result = $this->db->insert('met_file', $data);
            }
        }                    
        return $result;
    }
}
