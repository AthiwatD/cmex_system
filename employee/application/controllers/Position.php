<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Position extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library('user_agent');

        $this->load->helper('cookie');
        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Position_model','Position');
    }
    
    function index(){
        $this->positions();
    }

    function positions(){
        
        $positions = $this->Position->getPositions();
        $this->data['positions'] = $positions;
        $this->data['head_title'] = "ตำแหน่ง";

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('ตำแหน่ง',   base_url().'Position/positions/');  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->loadData();
        $this->loadViewWithScript(array('position/positions_view'), array());   
    }

}
?>
