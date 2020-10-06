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

    function getBoardMeetings($board_id){
        $sql = "SELECT *
                FROM met_meeting m
                WHERE m.board_id = '" . $board_id . "'
                ORDER BY m.meeting_datetime DESC";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getMeeting($meeting_id) {

        $sql = "SELECT *
                FROM met_meeting m
                WHERE m.meeting_id = '" . $meeting_id . "'";
        $result = $this->db->query($sql)->row();
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
        $meeting_date = $this->security->xss_clean($this->input->post('meeting_date'));
        $meeting_time = $this->security->xss_clean($this->input->post('meeting_time'));
        $meeting_datetime = date("Y-m-d H:i:s", strtotime($meeting_date . " " . $meeting_time));

        $meeting_location = $this->security->xss_clean($this->input->post('meeting_location'));


        //$approve_expire_datetime = $this->security->xss_clean($this->input->post('approve_expire_datetime'));
        $approve_expire_date = $this->security->xss_clean($this->input->post('approve_expire_date'));
        $approve_expire_time = $this->security->xss_clean($this->input->post('approve_expire_time'));

        $approve_expire_datetime = date("Y-m-d H:i:s", strtotime($approve_expire_date . " " . $approve_expire_time));


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

    function updateMeeting($final_files_data){
        $meeting_id = $this->security->xss_clean($this->input->post('meeting_id'));
        $meeting_name = $this->security->xss_clean($this->input->post('meeting_name'));
        
        
        $meeting_date = $this->security->xss_clean($this->input->post('meeting_date'));
        $meeting_time = $this->security->xss_clean($this->input->post('meeting_time'));
        $meeting_datetime = date("Y-m-d H:i:s", strtotime($meeting_date . " " . $meeting_time));


        $meeting_location = $this->security->xss_clean($this->input->post('meeting_location'));
        
        
        $approve_expire_date = $this->security->xss_clean($this->input->post('approve_expire_date'));
        $approve_expire_time = $this->security->xss_clean($this->input->post('approve_expire_time'));

        $approve_expire_datetime = date("Y-m-d H:i:s", strtotime($approve_expire_date . " " . $approve_expire_time));


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
        $this->db->where('meeting_id', $meeting_id);
        $result = $this->db->update('met_meeting', $data);


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
