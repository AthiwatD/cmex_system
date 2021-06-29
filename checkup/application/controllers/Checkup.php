<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Checkup extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Checkup_model','Checkup');
		$this->load->model('Package_model','Package');
		$this->load->model('Location_model','Location');

		$this->load->library('CheckupPdf','Pdf');

        // $this->load->model('File_model','File');

        // $config['upload_path']   = './uploads/'; 
        // $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|csv'; 
        // $config['max_size']      = 256000; 
        // $this->load->library('upload', $config);

    }
    
    function index(){
		$this->checkups();
    }

    function checkups($checkup_date = NULL){
		if($checkup_date == NULL){
        	$this->data['checkups'] = $this->Checkup->getCheckupsDate(date("Y-m-d", time()));
		}
		else{
			$this->data['checkups'] = $this->Checkup->getCheckupsDate($checkup_date);
		}

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups/'. $checkup_date);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkups_view'), array());    
    }

	
    function checkupsLocation($location_id, $checkup_date = NULL){
		if($checkup_date == NULL){
        	$this->data['checkups'] = $this->Checkup->getCheckupsLocationDate($location_id, date("Y-m-d", time()));
		}
		else{
			$this->data['checkups'] = $this->Checkup->getCheckupsLocationDate($location_id, $checkup_date);
		}

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups/'. $checkup_date);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkups_view'), array());    
	}

    function checkup($checkup_id){
        $this->data['checkup_id'] = $checkup_id;
        $this->data['checkup'] = $this->Checkup->getCheckup($checkup_id);
        $this->data['checkup_persons'] = $this->CheckupPerson->getCheckupPersons($checkup_id);
        $this->data['checkup_persons_with_files'] = $this->CheckupPerson->getCheckupPersonsWithFiles($checkup_id);
        $this->data['files'] = $this->File->getCheckupFiles($checkup_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups/');  
        $this->breadcrumb->add('รายละเอียดการตรวจสุขภาพ',   base_url().'Checkup/checkup/' . $checkup_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดการตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkup_view'), array());    
    }
    

    function addCheckup(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['packages'] = $this->Package->getPackages();
		$this->data['locations'] = $this->Location->getLocations();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups');    
        $this->breadcrumb->add('เพิ่ม การตรวจสุขภาพ',   base_url().'Checkup/addCheckup');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkup_form_view'), array('checkup/checkup_form_script'));      
    }

    function addCheckupDo(){
        
        $result = $this->Checkup->addCheckup();

        if(!$result){
            $this->addCheckup();
        }else{
            $this->checkups();
            
        }
        
    }

    function updateCheckup($checkup_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";

		$this->data['packages'] = $this->Package->getPackages();
		$this->data['locations'] = $this->Location->getLocations();

        $this->data['checkup_id'] = $checkup_id;
        $this->data['checkup'] = $this->Checkup->getCheckup($checkup_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('การตรวจสุขภาพ',   base_url().'Checkup/checkups');    
        $this->breadcrumb->add('แก้ไข การตรวจสุขภาพ',   base_url().'Checkup/updateCheckup/' . $checkup_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข การตรวจสุขภาพ";
        $this->loadData();
        $this->loadViewWithScript(array('checkup/checkup_form_view'), array('checkup/checkup_form_script'));      

    }
    
    function updateCheckupDo(){
        $result = $this->Checkup->updateCheckup();
        if(!$result){
            $this->checkups(); 
        }else{
            $this->checkups(); 
        }
    }

    function deleteCheckupDo($checkup_id){
        
        $result = $this->Checkup->deleteCheckup($checkup_id);
        
        if(!$result){
            $this->checkups(); 
        }else{
            $this->checkups(); 
        }
    }

	function exportCheckupDo($checkup_id){

		$checkup = $this->Checkup->getCheckup($checkup_id);

		$pdf = new CheckupPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		$pdf->setCheckupData($checkup);
        // set document information
        // $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('ศูนย์ความเป็นเลิศทางการแพทย์ คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่');
        $pdf->SetTitle('รายงานผลการตรวจสุขภาพ');
        $pdf->SetSubject('รายงานผลการตรวจสุขภาพ');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		$image_file = base_url() . '../common/assets/images/cmex_header_doc.jpg';

		//  Header ---------------------------------------------------------
        // $image_file = K_PATH_IMAGES.'logo_example.jpg';
        $pdf->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $pdf->SetFont('helvetica', 'B', 20);
        // Title
        $pdf->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');

		$pdf->SetFont("thsarabunpsk", 'B', 16, '', false);
        // add a page
        $pdf->AddPage();

		$pdf->Output('Checkup_' . $checkup->hn . '_' . $checkup->checkup_date . '.pdf', 'I');
	}

 }
 ?>
