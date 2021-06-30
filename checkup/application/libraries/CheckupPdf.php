<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class CheckupPdf extends TCPDF//TCPDF
{ 
	protected $checkup = array();
    //public $fpdi;
    function __construct() 
    { 
        parent::__construct(); 
        //$fpdi = new FPDI();
    }
    
    /*
    public function mergeFile($filename){
        $this.setSourceFile($filename);
        $this.useTemplate($this->importPage(1));
    }
    */
    
	public function setCheckupData($checkup){
		$this->checkup = $checkup;
	}

    public function Header() {
        // Logo
        $image_file = base_url() . '../common/assets/images/cmex_header_doc.jpg';//K_PATH_IMAGES.'logo_example.jpg';
        //Image( $file, $x = '', $y = '', $w = 0, $h = 0, $type = '', $link = '', $align = '', $resize = false, $dpi = 300, $palign = '', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false, $fitonpage = false, $alt = false, $altimgs = array() )
        $this->Image($image_file, 10, 5, 50, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        //echo base_url('assets/fonts/THSarabun.ttf') . "<br>";
        $fontname = TCPDF_FONTS::addTTFfont(base_url('assets/fonts/thai/THSarabun.ttf'), 'TrueTypeUnicode', '', 96);

        // use the font
        //$this->SetFont("$fontname", 'B', 20, '', false);
        

        //$this->SetFont('courier', 'B', 20);
        // Title
		$this->Ln(3);
		$this->SetFont("thsarabunpsk", 'B', 16, '', false);
        $this->Cell(0, 15, 'รายงานผลการตรวจสุขภาพ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln(5);
		$this->SetFont("thsarabunpsk", 'B', 14, '', false);
        $this->Cell(0, 15, 'HEALTH CHECK UP REPORT', 0, false, 'C', 0, '', 0, false, 'M', 'M');
		$this->Cell(0, 15, 'วันที่ตรวจ/Date: ' . $this->checkup->checkup_date, 0, false, 'R', 0, '', 0, false, 'M', 'T');

		$this->Ln(10);
		$this->Cell(0, 15, 'ชื่อ/Name: ' . $this->checkup->title_name . " " . $this->checkup->first_name . " " . $this->checkup->last_name . "    " . "HN: " . $this->checkup->hn . "    " . "เพศ/Gender: " . $this->checkup->sex . "    " . "อายุ/Age: " . $this->checkup->age , 0, false, 'C', 0, '', 0, false, 'M', 'M');
		$this->Ln(10);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-20);
        // Set font
        
        //$this->SetFont('helvetica', 'I', 8);
        $this->SetFont("thsarabunpsk", 'B', 12, '', false);
        $this->Cell(0, 15, $this->checkup->location_name_show, 0, false, 'C', 0, '', 0, false, 'M', 'M');
		$this->Ln(6);
		$this->Cell(0, 15, $this->checkup->location_name_show_en, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
/*Author:Tutsway.com */
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
