<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        
    }

    public function validate() {
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $sql = "SELECT * 
                FROM tb_nuser 
                WHERE tb_nuser.NUM_OT = '" . $username . "' 
                AND tb_nuser.Upass = '" . $password . "' ";
        //echo $sql;
        $result = $this->db->query($sql)->row();
        


        // Let's check if there are any results
        if ($result) {

            
            
            $sql = "SELECT * 
                    FROM sev_person p
                    JOIN sev_center c ON p.center_id = c.center_id 
                    JOIN sev_position ps ON p.position_id = ps.position_id 
                    WHERE p.person_id = '" . $username . "' 
                    AND p.end_work = 0";
            $result = $this->db->query($sql);
            $row = $result->row();

            $_SESSION['username'] = $username;
            $_SESSION['name'] = $row->person_fname . " " . $row->person_lname;
            $_SESSION["position_name"] = $row->position_name;
            $_SESSION["center_name"] = $row->center_name;
            $_SESSION["center_abbre"] = $row->center_abbre;
            $_SESSION['validated'] = true;
            
            //$this->session->set_userdata($data);
            return true;

        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

}

?>