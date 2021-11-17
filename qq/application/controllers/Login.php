<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
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
        if(isset($_COOKIE["user_link"])) {
            $data['user_link'] = $_COOKIE["user_link"];
        }
        else{
            $data['user_link'] = "";
        }
        
        $data['msg'] = $msg;
		$data['head_title'] = "ระบบคิว";
        $this->load->view('login_view', $data);
    }
    
    public function process(){
        // Load the model
        //$this->load->view("welcome_message");
        
        //$this->load->model('Login_model');
        $user_link = $this->security->xss_clean($this->input->post('user_link'));

        // Validate the user can login
        $result = $this->Login->validate();
        // Now we verify the result
        if(!$result){
            //echo "Not Pass";
            //redirect('Login');
            //$this->load->view("login_view");
            // If user did not validate, then show them login page again
            $msg = '<font color=red>ชื่อผู้ใช้งาน และรหัสผ่านไม่ถูกต้อง</font><br />';
            $this->index($msg);
        }else{
            //$this->load->view("welcome_message");
            // If user did validate, 
            // Send them to members area
            //echo "Passed";
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
