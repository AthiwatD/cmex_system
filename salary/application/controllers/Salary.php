<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Salary extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Salary_model','Salary');
        $this->load->model('File_model','File');

        $config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'xls|xlsx|csv'; 
        $config['max_size']      = 256000; 
        $this->load->library('upload', $config);

    }
    
    function index($salary_id = NULL){
        if($salary_id == NULL){
            $this->salaries();
        }
        else{
            $this->salary($salary_id);
            // redirect('/salary/' . $evaluation_id);
        }
       
    }

    function salaries(){
        $this->data['salaries'] = $this->Salary->getSalaries();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('เงินเดือน',   base_url().'Salary/salaries/');  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เงินเดือน";
        $this->loadData();
        $this->loadViewWithScript(array('salary/salaries_view'), array());    
    }
    
    function salary($salary_id){
        $this->data['salary_id'] = $salary_id;
        $this->data['salary'] = $this->Salary->getSalary($salary_id);
        $this->data['files'] = $this->File->getSalaryFiles($salary_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('เงินเดือน',   base_url().'Salary/salaries/');  
        $this->breadcrumb->add('รายละเอียดเงินเดือน',   base_url().'Salary/salary/' . $salary_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดเงินเดือน";
        $this->loadData();
        $this->loadViewWithScript(array('salary/salaries_view'), array());    
    }
    

    function addSalary(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('เงินเดือน',   base_url().'Salary/salaries');    
        $this->breadcrumb->add('เพิ่ม เงินเดือน',   base_url().'Salary/addSalary');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม เงินเดือน";
        $this->loadData();
        $this->loadViewWithScript(array('salary/salary_form_view'), array());      
    }

    function addSalaryDo(){
        
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
                $config['allowed_types'] = 'xls|xlsx|csv'; 
                $config['max_size']      = 256000; 
                $config['upload_path'] = './uploads/';
                
                
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
        $result = $this->Salary->addSalary($final_files_data);
        
        if(!$result){
            $this->addSalary();
        }else{
            $this->salaries();
            
        }
        
    }

    function updateSalary($salary_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";

        $this->data['salary_id'] = $salary_id;
        $this->data['salary'] = $this->Salary->getSalary($salary_id);
        $this->data['salary_persons'] = $this->SalaryPerson->getSalaryPersons($salary_id);
        $this->data['boards'] = $this->Board->getBoards();
        $this->data['files'] = $this->File->getSalaryFiles($salary_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('เงินเดือน',   base_url().'Salary/salaries');    
        $this->breadcrumb->add('แก้ไข เงินเดือน',   base_url().'Salary/updateSalary/' . $salary_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข เงินเดือน";
        $this->loadData();
        $this->loadViewWithScript(array('salary/salary_form_view'), array('salary/salary_form_script'));      

        
    }
    
    function updateSalaryDo(){
        

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
        $result = $this->Salary->updateSalary($final_files_data);

        $this->salaries();

    }

    function deleteSalaryDo($salary_id){
        
        $result = $this->Salary->deleteSalary($salary_id);
        
        if(!$result){
            //$this->addSalary();
            $this->salaries(); 
        }else{
            $this->salaries(); 
        }
    }

    function deleteFileDo($salary_id, $file_id){
        
        $result = $this->File->deleteFile($file_id);
        if(!$result){
            //$this->addSalary();
            $this->salaries(); 
        }else{
            $this->updateSalary($salary_id); 
            
        }
    }

    

    function getBoardPersonsService($board_id){
        echo json_encode($this->Salary->getBoardPersons($board_id));
    }


    function salarySendToPersons($salary_id){
            
            $salary = $this->Salary->getSalary($salary_id);
            $salary_persons = $this->SalaryPerson->getSalaryPersons($salary_id);
            $salary_persons_link = array();
            // $filenames = array(); 
            $this->data['salary_id'] = $salary_id;
            $this->data['salary'] = $this->Salary->getSalary($salary_id);
            $salary_persons = $this->SalaryPerson->getSalaryPersons($salary_id);

            $this->data['salary_persons'] = $salary_persons;
            
            foreach($salary_persons as $index => $mp){
                $salary_person_link = base_url() . "Approve/approve/" . $salary_id . '/' . $mp->salary_person_id;
                array_push($salary_persons_link, $salary_person_link);
            }

            // foreach($salary_persons as $index => $mp){
            //     $salary_person_link = base_url() . "Approve/approve/" . $salary_id . '/' . $mp->salary_person_id;
            //     $filename = "qr/" . $mp->salary_person_id . '.png';
            //     $width = $height = 300;
            //     $url = 'https://chart.googleapis.com/chart?';
            //     $chs = 'chs=300x300';
            //     $cht = 'cht=qr';
            //     $choe = 'choe=UTF-8';
            //     $chl = 'chl='. urlencode($salary_person_link);

            //     $qstring = $url ."&". $chs ."&". $cht ."&". $chl ."&". $choe;     
            //     $url = urlencode($salary_person_link);
            //     $qr  = file_get_contents("http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chl=$url&choe=UTF-8");
            //     file_put_contents($filename, $qr);
            //     array_push($salary_persons_link, $salary_person_link);
            //     array_push($filenames, $filename);
            // }

            $this->data['salary_persons_link'] = $salary_persons_link;
            // $this->data['filenames'] = $filenames;
            $this->data['head_title'] = "รายงานเงินเดือน";
            $this->loadData();
            $this->load->view('common/header', $this->data);
            $this->load->view('salary/salary_send_to_persons_view', $this->data);

    }

 }
 ?>