<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Location extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library('user_agent');

        $this->load->helper('cookie');
        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Location_model','Location');
    }
    
    function index(){
        $this->locations();
    }

    function locations(){
        
        $locations = $this->Location->getLocations();
        $this->data['locations'] = $locations;
        $this->data['head_title'] = "สถานที่";

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('สถานที่',   base_url().'Location/locations/');  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->loadData();
        $this->loadViewWithScript(array('location/locations_view'), array());   
    }

}
?>
