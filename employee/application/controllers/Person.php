<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Person extends MY_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->helper('../../common/helpers/thai_date');
        $this->load->model('Person_model','Person');
        $this->load->model('Position_model','Position');
        $this->load->model('Location_model','Location');
    }
    
    function index(){
        $this->persons();
    }

    function persons(){
        $this->data['persons'] = $this->Person->getPersons();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');     
        $this->breadcrumb->add('บุคคล',   base_url().'Person/persons/');  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "บุคคล";
        $this->loadData();
        $this->loadViewWithScript(array('person/persons_view'), array());    
    }
    
    function person($person_id){
        $this->data['person_id'] = $person_id;
        $this->data['person'] = $this->Person->getPerson($person_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');    
        $this->breadcrumb->add('บุคคล',   base_url().'Person/persons/');  
        $this->breadcrumb->add('รายละเอียดบุคคล',   base_url().'Person/person/' . $person_id);  
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียดบุคคล";
        $this->loadData();
        $this->loadViewWithScript(array('person/person_view'), array());    
    }
    
    function addPerson(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['positions'] = $this->Position->getPositions();
        $this->data['locations'] = $this->Location->getLocations();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('บุคคล',   base_url().'Person/persons');    
        $this->breadcrumb->add('เพิ่ม บุคคล',   base_url().'Person/addPerson');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม บุคคล";
        $this->loadData();
        $this->loadViewWithScript(array('person/person_form_view'), array());      
    }

    function addPersonDo(){
        
        $result = $this->Person->addPerson();
        
        if(!$result){
            $this->addPerson();
        }else{
            $this->persons();
            
        }
        
    }

    function updatePerson($person_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";

        $this->data['person_id'] = $person_id;
        $this->data['person'] = $this->Person->getPerson($person_id);
        $this->data['positions'] = $this->Position->getPositions();
        $this->data['locations'] = $this->Position->getLocations();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('บุคคล',   base_url().'Person/persons');    
        $this->breadcrumb->add('แก้ไข บุคคล',   base_url().'Person/updatePerson/' . $person_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข บุคคล";
        $this->loadData();
        $this->loadViewWithScript(array('person/person_form_view'), array('person/person_form_script'));      

        
    }
    
    function updatePersonDo(){
        $result = $this->Person->updatePerson();
        $this->persons();
    }

    function deletePersonDo($person_id){
        
        $result = $this->Person->deletePerson($person_id);
        
        if(!$result){
            $this->persons(); 
        }else{
            $this->persons(); 
        }
    }

 }
 ?>