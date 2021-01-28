<?php

class Salary_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getSalaries() {

        $sql = "SELECT *
                FROM sly_salary s
                ORDER BY s.salary_date DESC";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function getSalary($salary_id){
        $sql = "SELECT *
                FROM sly_salary s
                JOIN sly_salary_detail sd ON s.salary_id = sd.salary_id
                WHERE s.salary_id = '" . $salary_id . "'
                ORDER BY s.salary_date DESC";
        $result = $this->db->query($sql)->row();
        return $result;
    }

    
    function addSalary($final_files_data){
        
        $salary_name = $this->security->xss_clean($this->input->post('salary_name'));
        $salary_date = $this->security->xss_clean($this->input->post('salary_date'));
        $salary_time = $this->security->xss_clean($this->input->post('salary_time'));
        $salary_datetime = date("Y-m-d H:i:s", strtotime($salary_date . " " . $salary_time));

        $salary_location = $this->security->xss_clean($this->input->post('salary_location'));


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
            'salary_name' => $salary_name,
            'salary_datetime' => $salary_datetime,
            'salary_location' => $salary_location,
            'document_datetime' => $document_datetime,
            'approve_expire_datetime' => $approve_expire_datetime,
            'board_id' => $board_id,
            'board_name' => $board_name,
        );
        
        $result = $this->db->insert('sly_salary', $data);
        $salary_id = $this->db->insert_id();

        if(!empty($person_names)){
            foreach($person_names as $index => $person_name){
                $data = array(
                    'person_id' => $person_ids[$index],
                    'person_name' => $person_names[$index],
                    'position_name' => $position_names[$index],
                    'salary_id' => $salary_id,
                );
                
                $result = $this->db->insert('sly_salary_person', $data);


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
                    'salary_id' => $salary_id,
                    'salary_person_id' => 0,
                );
                $result = $this->db->insert('sly_file', $data);
            }
        }                    
        return $result;
    }

    function updateSalary($final_files_data){
        $salary_id = $this->security->xss_clean($this->input->post('salary_id'));
        $salary_name = $this->security->xss_clean($this->input->post('salary_name'));
        
        
        $salary_date = $this->security->xss_clean($this->input->post('salary_date'));
        $salary_time = $this->security->xss_clean($this->input->post('salary_time'));
        $salary_datetime = date("Y-m-d H:i:s", strtotime($salary_date . " " . $salary_time));


        $salary_location = $this->security->xss_clean($this->input->post('salary_location'));
        
        
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
            'salary_name' => $salary_name,
            'salary_datetime' => $salary_datetime,
            'salary_location' => $salary_location,
            'document_datetime' => $document_datetime,
            'approve_expire_datetime' => $approve_expire_datetime,
            'board_id' => $board_id,
            'board_name' => $board_name,
        );
        $this->db->where('salary_id', $salary_id);
        $result = $this->db->update('sly_salary', $data);


        if(!empty($person_names)){
            foreach($person_names as $index => $person_name){
                $data = array(
                    'person_id' => $person_ids[$index],
                    'person_name' => $person_names[$index],
                    'position_name' => $position_names[$index],
                    'salary_id' => $salary_id,
                );
                
                $result = $this->db->insert('sly_salary_person', $data);


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
                    'salary_id' => $salary_id,
                    'salary_person_id' => 0,
                );
                $result = $this->db->insert('sly_file', $data);
            }
        }                    
        return $result;
    }
}
