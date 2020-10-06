<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Approve extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library('user_agent');

        $this->load->helper('cookie');
        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Approve_model','Approve');
        $this->load->model('Meeting_model','Meeting');
        $this->load->model('MeetingPerson_model','MeetingPerson');
        $this->load->model('File_model','File');

        $config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|pdf'; 
        $config['max_size']      = 256000; 
        $this->load->library('upload', $config);
    }
    
    function approve($meeting_id, $meeting_person_id, $msg = NULL){
        $this->data['msg'] = $msg;
        $this->data['meeting_id'] = $meeting_id;
        $this->data['meeting_person_id'] = $meeting_person_id;
        $meeting = $this->Meeting->getMeeting($meeting_id);
        date_default_timezone_set('Asia/Bangkok');
        $now = date('Y-m-d H:i:s', time());
        if(($meeting->approve_expire_datetime != "0000-00-00 00:00:00") && ($now <= $meeting->approve_expire_datetime)){
            $this->data['meeting'] = $meeting;
            $meeting_person = $this->MeetingPerson->getMeetingPerson($meeting_person_id);
            $this->data['meeting_person'] = $meeting_person;
            $this->data['meeting_files'] = $this->File->getMeetingFiles($meeting_id);
            $this->data['files'] = $this->File->getMeetingPersonFiles($meeting_id, $meeting_person_id);

            $this->data['head_title'] = "ระบบยืนยันรายงานการประชุม";

            $this->load->view('common/header', $this->data);
            $this->load->view('approve/approve_view', $this->data);
            $this->load->view('common/footer',$this->data);

            if($meeting_person->watched_datetime == "0000-00-00 00:00:00"){
                $this->updateWatchedDo($meeting_id, $meeting_person_id);
            }
        }
        else{
            $this->load->view('common/header', $this->data);
            $this->load->view('approve/approve_expire_view', $this->data);
            $this->load->view('common/footer',$this->data);
        }
    }

    function approveDo(){
        $meeting_id = $this->security->xss_clean($this->input->post('meeting_id'));
        $meeting_person_id = $this->security->xss_clean($this->input->post('meeting_person_id'));
        // $number_of_files_uploaded = count($_FILES['upl_files']['name']);
        $final_files_data = array();
        // Faking upload calls to $_FILE
        if(!empty($_FILES['upl_files']['name']) && count(array_filter($_FILES['upl_files']['name'])) > 0){ 
            
            $filesCount = count(array_filter($_FILES['upl_files']['name'])); 
            for($i = 0; $i < $filesCount; $i++){ 

                $_FILES['userfile']['name']     = $_FILES['upl_files']['name'][$i];
                $_FILES['userfile']['type']     = $_FILES['upl_files']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $_FILES['upl_files']['tmp_name'][$i];
                $_FILES['userfile']['error']    = $_FILES['upl_files']['error'][$i];
                $_FILES['userfile']['size']     = $_FILES['upl_files']['size'][$i];

                
                // $config['file_name'] = $user_file['name'];
                $config['upload_path']   = './uploads/'; 
                $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
                $config['max_size']      = 256000; 
                $config['upload_path'] = './uploads/';
                $config['max_width'] = '4096';
                $config['max_height'] = '4096';
                
                
                $this->upload->initialize($config);
                if (!$this->upload->do_upload()){
                    $error = array('error' => $this->upload->display_errors());
                    //$this->load->view('upload_form', $error);
                }else{
                    $final_files_data[] = $this->upload->data();
                    // Continue processing the uploaded data
                    
                }
            }
        }
        $result = $this->Approve->approve($final_files_data,$meeting_id, $meeting_person_id);

        //if($result){
            // header("Location: " . base_url() . "Approve/approve/" . $meeting_id . "/" . $meeting_person_id );
            // $this->approve($meeting_id, $meeting_person_id); 
            redirect( base_url() . "Approve/approve/" . $meeting_id . "/" . $meeting_person_id . "รับรองการประชุมสำเร็จ");
        //}
    }

    function updateWatchedDo($meeting_id, $meeting_person_id){
        $result = $this->Approve->updateWatched($meeting_person_id);
        //if($result){
            // $this->approve($meeting_id, $meeting_person_id); 
            // header("Location: " . base_url() . "Approve/approve/" . $meeting_id . "/" . $meeting_person_id );
            redirect( base_url() . "Approve/approve/" . $meeting_id . "/" . $meeting_person_id);
        //}
    }

    function deleteFileDo($meeting_id, $meeting_person_id, $file_id){
        
        $result = $this->File->deleteFile($file_id);
        if($result){
            $this->approve($meeting_id,  $meeting_person_id); 
        }
    }

}
?>
