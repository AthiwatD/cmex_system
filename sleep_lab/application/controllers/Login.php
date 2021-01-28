<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('inflector');
        $this->load->helper('cookie');
        $this->load->model('Login_model','Login');
    }
    
    public function index($msg = NULL){
        $data["title"] = PROJECT_NAME;
        $data['msg'] = $msg;
        $this->load->view('login_view', $data);
    }
    
    public function process(){
        // Load the model
        //$this->load->view("welcome_message");
        
        //$this->load->model('Login_model');
        // Validate the user can login
        $active_users = unserialize (ACTIVE_USERS);
        $can_validate = false;
        foreach($active_users as $user){
            if($user == $this->input->post('username')){
                $can_validate = true;
            }
        }   
        if($can_validate){
            $result = $this->Login->validate();
            // Now we verify the result
            if(!$result){
                //echo "Not Pass";
                //redirect('Login');
                //$this->load->view("login_view");
                // If user did not validate, then show them login page again
                $msg = '<font color=red>Invalid username and/or password.</font><br />';
                $this->index($msg);
            }else{
                //$this->load->view("welcome_message");
                // If user did validate, 
                // Send them to members area
                //echo "Passed";
                redirect('Home');
            }
        }
        else{
            $msg = '<font color=red>user can not access</font><br />';
                $this->index($msg);
        }
        
          
              
    }
}
?>
