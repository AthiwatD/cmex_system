<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Meeting extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Meeting_model','Meeting');
        $this->load->model('MeetingPerson_model','MeetingPerson');
        $this->load->model('Board_model','Board');
        $this->load->model('File_model','File');

        $config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
        $config['max_size']      = 256000; 
        $this->load->library('upload', $config);

    }
    
    function index($meeting_id = NULL){
        if($meeting_id == NULL){
            $this->meetings();
        }
        else{
            $this->meeting($meeting_id);
            // redirect('/meeting/' . $evaluation_id);
        }
       
    }

    function meetings(){
        $this->data['meetings'] = $this->Meeting->getMeetings();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('การประชุม',   base_url().'Meeting/meetings/');  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "การประชุม";
        $this->loadData();
        $this->loadViewWithScript(array('meeting/meetings_view'), array());    
    }
    
    function boardMeetings($board_id){
        $meetings = $this->Meeting->getBoardMeetings($board_id);;
        $this->data['meetings'] = $meetings;
        $board = $this->Board->getBoard($board_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('การประชุม',   base_url().'Meeting/meetings/');  
        $this->breadcrumb->add('การประชุมของกลุ่ม',   base_url().'Meeting/boardMeetings/'.$board_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "การประชุมของกลุ่ม " . $board->board_name;
        $this->loadData();
        $this->loadViewWithScript(array('meeting/board_meetings_view'), array());    
    }
    function meeting($meeting_id){
        $this->data['meeting_id'] = $meeting_id;
        $this->data['meeting'] = $this->Meeting->getMeeting($meeting_id);
        $this->data['meeting_persons'] = $this->MeetingPerson->getMeetingPersons($meeting_id);
        $this->data['meeting_persons_with_files'] = $this->MeetingPerson->getMeetingPersonsWithFiles($meeting_id);
        $this->data['files'] = $this->File->getMeetingFiles($meeting_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('การประชุม',   base_url().'Meeting/meetings/');  
        $this->breadcrumb->add('รายละเอียดการประชุม',   base_url().'Meeting/meeting/' . $meeting_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดการประชุม";
        $this->loadData();
        $this->loadViewWithScript(array('meeting/meeting_view'), array());    
    }
    
    function meetingPersonDetail($meeting_id, $meeting_person_id){
        $this->data['meeting_id'] = $meeting_id;
        $this->data['meeting'] = $this->Meeting->getMeeting($meeting_id);
        $this->data['meeting_person'] = $this->MeetingPerson->getMeetingPerson($meeting_person_id);
        $this->data['meeting_person_with_files'] = $this->MeetingPerson->getMeetingPersonWithFiles($meeting_person_id);
        $this->data['files'] = $this->File->getMeetingFiles($meeting_id);
        $this->data['meeting_person_link'] = base_url() . "Approve/approve/" . $meeting_id . '/' . $meeting_person_id;
        
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('การประชุม',   base_url().'Meeting/meetings/');  
        $this->breadcrumb->add('รายละเอียดการประชุม',   base_url().'Meeting/meeting/' . $meeting_id);  
        $this->breadcrumb->add('รายละเอียดผู้เข้าร่วมประชุม',   base_url().'Meeting/meetingPersonDetail/' . $meeting_id . '/' . $meeting_person_id); 
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดผู้เข้าร่วมประชุม";
        $this->loadData();
        $this->loadViewWithScript(array('meeting/meeting_person_detail_view'), array());    
    }

    function addMeeting(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['boards'] = $this->Board->getBoards();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การประชุม',   base_url().'Meeting/meetings');    
        $this->breadcrumb->add('เพิ่ม การประชุม',   base_url().'Meeting/addMeeting');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม การประชุม";
        $this->loadData();
        $this->loadViewWithScript(array('meeting/meeting_form_view'), array('meeting/meeting_form_script'));      
    }

    function addMeetingDo(){
        
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
                $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
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
        
        $result = $this->Meeting->addMeeting($final_files_data);
        
        if(!$result){
            $this->addMeeting();
        }else{
            $this->meetings();
            
        }
        
    }

    function updateMeeting($meeting_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";

        $this->data['meeting_id'] = $meeting_id;
        $this->data['meeting'] = $this->Meeting->getMeeting($meeting_id);
        $this->data['meeting_persons'] = $this->MeetingPerson->getMeetingPersons($meeting_id);
        $this->data['boards'] = $this->Board->getBoards();
        $this->data['files'] = $this->File->getMeetingFiles($meeting_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การประชุม',   base_url().'Meeting/meetings');    
        $this->breadcrumb->add('แก้ไข การประชุม',   base_url().'Meeting/updateMeeting/' . $meeting_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข การประชุม";
        $this->loadData();
        $this->loadViewWithScript(array('meeting/meeting_form_view'), array('meeting/meeting_form_script'));      

        
    }
    
    function updateMeetingDo(){
        

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
        $result = $this->Meeting->updateMeeting($final_files_data);

        $this->meetings();

    }

    function deleteMeetingDo($meeting_id){
        
        $result = $this->Meeting->deleteMeeting($meeting_id);
        
        if(!$result){
            //$this->addMeeting();
            $this->meetings(); 
        }else{
            $this->meetings(); 
        }
    }

    function deleteFileDo($meeting_id, $file_id){
        
        $result = $this->File->deleteFile($file_id);
        if(!$result){
            //$this->addMeeting();
            $this->meetings(); 
        }else{
            $this->updateMeeting($meeting_id); 
            
        }
    }

    

    function getBoardPersonsService($board_id){
        echo json_encode($this->Meeting->getBoardPersons($board_id));
    }


    function meetingSendToPersons($meeting_id){
            
            $meeting = $this->Meeting->getMeeting($meeting_id);
            $meeting_persons = $this->MeetingPerson->getMeetingPersons($meeting_id);
            $meeting_persons_link = array();
            // $filenames = array(); 
            $this->data['meeting_id'] = $meeting_id;
            $this->data['meeting'] = $this->Meeting->getMeeting($meeting_id);
            $meeting_persons = $this->MeetingPerson->getMeetingPersons($meeting_id);

            $this->data['meeting_persons'] = $meeting_persons;
            
            foreach($meeting_persons as $index => $mp){
                $meeting_person_link = base_url() . "Approve/approve/" . $meeting_id . '/' . $mp->meeting_person_id;
                array_push($meeting_persons_link, $meeting_person_link);
            }

            // foreach($meeting_persons as $index => $mp){
            //     $meeting_person_link = base_url() . "Approve/approve/" . $meeting_id . '/' . $mp->meeting_person_id;
            //     $filename = "qr/" . $mp->meeting_person_id . '.png';
            //     $width = $height = 300;
            //     $url = 'https://chart.googleapis.com/chart?';
            //     $chs = 'chs=300x300';
            //     $cht = 'cht=qr';
            //     $choe = 'choe=UTF-8';
            //     $chl = 'chl='. urlencode($meeting_person_link);

            //     $qstring = $url ."&". $chs ."&". $cht ."&". $chl ."&". $choe;     
            //     $url = urlencode($meeting_person_link);
            //     $qr  = file_get_contents("http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chl=$url&choe=UTF-8");
            //     file_put_contents($filename, $qr);
            //     array_push($meeting_persons_link, $meeting_person_link);
            //     array_push($filenames, $filename);
            // }

            $this->data['meeting_persons_link'] = $meeting_persons_link;
            // $this->data['filenames'] = $filenames;
            $this->data['head_title'] = "รายงานการประชุม";
            $this->loadData();
            $this->load->view('common/header', $this->data);
            $this->load->view('meeting/meeting_send_to_persons_view', $this->data);

    }

 }
 ?>