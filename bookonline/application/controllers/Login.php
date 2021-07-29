<?php
/*====================================================================================================== 
Create by  : Athiwat Duliganon
Create Date: 21/06/2564
Description: modify Login controller class
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
    
    public function index($path=null,$msg=null){
        if($path=="back") 
            $data['path'] = $path;
        else 
            $data['path']="front";

        $data['msg']=$msg;
        if($data['path']=="back") $this->backLogin($data['path'],$data['msg']);
        else $this->frontLogin($data['path'],$data['msg']);
    }

    public function frontLogin($sys,$msg){
        if(isset($_COOKIE["user_link"])) $data['user_link'] = $_COOKIE["user_link"]; 
        else $data['user_link'] = "";
        
        $data['sys'] = $sys;
        $data['msg'] = $msg;
        $data['system']="frontend";

        $this->load->view('front_login_view', $data);
    }

    public function backLogin($sys,$msg){
        if(isset($_COOKIE["user_link"])) $data['user_link'] = $_COOKIE["user_link"]; 
        else $data['user_link'] = "";
        
        $data['sys'] = $sys;
        $data['msg'] = $msg;
        $data['system']="backend";

        $this->load->view('back_login_view', $data);
    }
    
    public function process($sys){
        $user_link = $this->security->xss_clean($this->input->post('user_link'));
        $result = $this->Login->validate();
        $permission_status=false;
        
        // [Athiwat][29/06/2564][add process check active users]
        if($sys=="back"){
            $active_users=unserialize(ACTIVE_USERS);
            foreach($active_users as $user){
                if($user==$this->input->post("username")) $permission_status=true;
            }
        }
        
        if(!$permission_status && $sys=="back"){ //[Not active users]
            $msg = '<font color=red>User account cannot access system.</font><br />';
            $this->index($sys,$msg);
        }else{  //[Active users]
            if(!$result){
                $msg = '<font color=red>Invalid username and/or password.</font><br />';
                $this->index($sys,$msg);
            }else{
                //[Athiwat][24/06/2564][edit to not use cookie for link use base_url instead]&&[add system frontend and backend]
                if(!empty($user_link) && !empty($sys)){
                    setcookie("user_link", "", time() - 3600);
                    $link=base_url()."Bookonline/index/".$sys;
                    redirect($link);
                }
            }
        }
        
    }

}
?>
