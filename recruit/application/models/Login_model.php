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
                FROM tb_nuser u
                JOIN tb_person p ON u.NUM_OT = p.NUM_OT
                JOIN tb_position ps ON u.PP = ps.position_code
                JOIN tb_nward w ON u.ward_code = w.ward_code
                WHERE u.NUM_OT = '" . $username . "'
                AND u.Upass = '" . $password . "' ";
        //echo $sql;
        $row = $this->db->query($sql)->row();
        
        // Let's check if there are any results
        if ($row) {
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $row->Fname . " " . $row->Lname;
            $_SESSION["position_name"] = $row->position_name;
            $_SESSION['validated'] = true;
            // $_SESSION['NUM_OT']=$row->NUM_OT; // [ton][19/04/2564][add session num_ot]
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>
