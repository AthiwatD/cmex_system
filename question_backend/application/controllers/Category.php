<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Category extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Form_model','Form');
        $this->load->model('Category_model','Category');
    }
    
    function index(){
        $this->Categories();
       
    }
    
    function categories(){
        $this->data['error'] = $this->db->error(); 
        $this->data['categories'] = $this->Category->getCategories();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Category',   base_url().'Category/categories');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการ Category";
        $this->loadData();
        $this->loadViewWithScript(array('category/categories_view'), array());      
    }

    function category($category_id){
        $this->data['error'] = $this->db->error(); 
        $this->data['category'] = $this->Category->getCategory($category_id);
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Category',   base_url().'Category/categories');  
        $this->breadcrumb->add('รายละเอียด Category',   base_url().'Category/category/' . $category_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายละเอียด Category";
        $this->loadData();
        $this->loadViewWithScript(array('category/category_view'), array());      
    }

    function addCategory(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Category',   base_url().'Category/categories');    
        $this->breadcrumb->add('เพิ่ม Category',   base_url().'Category/addCategory');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม Category";
        $this->loadData();
        $this->loadViewWithScript(array('category/category_form_view'), array());      
    }

    function addCategoryDo(){
        
        $result = $this->Category->addCategory();
        
        if(!$result){
            $this->addCategory();
        }else{
            $this->Categories(); 
        }
    }

    function updateCategory($category_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการ Category',   base_url().'Category/Categories');    
        $this->breadcrumb->add('แก้ไข Category',   base_url().'Category/updateCategory/' . $category_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข Category";
        $this->data['category'] = $this->Category->getCategory($category_id);
        $this->loadData();
        $this->loadViewWithScript(array('category/category_form_view'), array());      
    }
    
    function updateCategoryDo(){
        
        $result = $this->Category->updateCategory();
        //echo $result;
        if(!$result){
            //$this->addCategory();
            $this->Categories(); 
        }else{
            $this->Categories(); 
        }
    }

    function deleteCategoryDo($category_id){
        
        $result = $this->Category->deleteCategory($category_id);
        
        if(!$result){
            //$this->addCategory();
            $this->Categories(); 
        }else{
            $this->Categories(); 
        }
    }
}