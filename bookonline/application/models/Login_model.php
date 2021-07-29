<?php
/*====================================================================================================== 
Create By  : Athiwat Duliganon
Create Date: 21/06/2564
Description: modify Login_model.
======================================================================================================*/

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->helper('cookie');
    }

    // [Athiwat][29/06/2564][Note defined session system && Modify function validate fix col select && add session]
    public function validate(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $sql_dt = "SELECT u.NUM_OT,w.New_Heading,ps.position_name,p.Fname,p.Lname
                   FROM tb_nuser u JOIN tb_person p ON u.NUM_OT = p.NUM_OT
                                  JOIN tb_position ps ON u.PP = ps.position_code
                                  JOIN tb_nward w ON u.ward_code = w.ward_code
                   WHERE u.NUM_OT = '" . $username . "'AND u.Upass = '" . $password . "' ";

        $row = $this->db->query($sql_dt)->row();
        if ($row) {
            $_SESSION['validated'] = true;
            $_SESSION['numot']=$row->NUM_OT;
            $_SESSION['username'] = $username;
            $_SESSION['organization'] = $row->New_Heading;
            $_SESSION["position_name"] = $row->position_name;
            $_SESSION['name'] = $row->Fname . " " . $row->Lname;
            return true;
        }else return false;
    }

}
?>
