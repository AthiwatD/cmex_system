<?php
/*====================================================================================================== 
    Create by  : Athiwat Duliganon
    Create Date: 01/07/2564
    Description: Modify to add active users.
======================================================================================================*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('inflector');
        $this->load->helper('cookie');
        $this->load->model('Login_model','Login');
    }
    
    public function index($msg = NULL){
        if(isset($_COOKIE["user_link"])) $data['user_link'] = $_COOKIE["user_link"];
        else $data['user_link'] = "";
        
        $data['msg'] = $msg;
        $this->load->view('login_view', $data);
    }
    
    public function process(){
        $user_link = $this->security->xss_clean($this->input->post('user_link'));
        $result = $this->Login->validate();
        
        if(!$result){
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            if(!empty($user_link)){
                setcookie("user_link", "", time() - 3600);
                redirect($user_link);
            }else{
                redirect('Home');
            }
        }
          
              
    }
}
?>
