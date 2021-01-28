<?php

class Person_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getPersons(){
        
        $sql = "SELECT p.NUM_OT, u.Upass, p.Fname, p.Lname, p.sex, pst.position_code, pst.position_name, u.ward_code, l.ward_name
                FROM tb_person p
                JOIN tb_nuser u ON p.NUM_OT = u.NUM_OT
                JOIN tb_position pst ON u.PP = pst.position_code
                JOIN tb_location1 l ON u.ward_code = l.Ward_code
                ORDER BY p.NUM_OT ASC";
        $result = $this->db->query($sql)->result();
        
        return $result;
    }
    
    function Person($person_id){
        
        $sql = "SELECT p.NUM_OT, u.Upass, p.Fname, p.Lname, p.sex, pst.position_code, pst.position_name, u.ward_code, l.ward_name
                FROM tb_person p
                JOIN tb_nuser u ON p.NUM_OT = u.NUM_OT
                JOIN tb_position pst ON u.PP = pst.position_code
                JOIN tb_location1 l ON u.ward_code = l.Ward_code
                WHERE p.NUM_OT = '" . $person_id . "'";
        $result = $this->db->query($sql)->row();
        
        return $result;
    }
   
    
        function addPerson(){
            
            $person_id = $this->security->xss_clean($this->input->post('person_id'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $fname = $this->security->xss_clean($this->input->post('fname'));
            $lname = $this->security->xss_clean($this->input->post('lname'));
            $sex = $this->security->xss_clean($this->input->post('sex'));
            $position_id = $this->security->xss_clean($this->input->post('position_id'));
            $location_id = $this->security->xss_clean($this->input->post('location_id'));
    
            $data_nuser = array(
                'NUM_OT' => $person_id,
                'Upass' => $password,
                'PP' => $position_id,
                'pos' => '7',
                'ward_code' => $location_id,
                'status' => '1',
            );
            $result = $this->db->insert('tb_nuser', $data_nuser);

            $data_person = array(
                'NUM_OT' => $person_id,
                'Person_id' => $person_id,
                'Fname' => $fname,
                'Lname' => $lname,
                'sex' => $sex,
                'MAR_new' => '1',
                'newnurse' => '1',
                'ck' => '0',
                'nupdate' => '0',
                'hncheck' => '0',
                'pos' => '1',
            );
            $result = $this->db->insert('tb_person', $data_person);
    
            return $result;
        }
    
        function updatePerson($final_files_data){
            $person_id = $this->security->xss_clean($this->input->post('person_id'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $fname = $this->security->xss_clean($this->input->post('fname'));
            $lname = $this->security->xss_clean($this->input->post('lname'));
            $sex = $this->security->xss_clean($this->input->post('sex'));
            $position_id = $this->security->xss_clean($this->input->post('position_id'));
            $location_id = $this->security->xss_clean($this->input->post('location_id'));
    
            $data_nuser = array(
                'NUM_OT' => $person_id,
                'Upass' => $password,
                'PP' => $position_id,
                'pos' => '7',
                'ward_code' => $location_id,
                'status' => '1',
            );
            $this->db->where('NUM_OT', $person_id);
            $result = $this->db->update('tb_nuser', $data_nuser);

            $data_person = array(
                'NUM_OT' => $person_id,
                'Person_id' => $person_id,
                'Fname' => $fname,
                'Lname' => $lname,
                'sex' => $sex,
                'MAR_new' => '1',
                'newnurse' => '1',
                'ck' => '0',
                'nupdate' => '0',
                'hncheck' => '0',
                'pos' => '1',
            );
            $this->db->where('NUM_OT', $person_id);
            $result = $this->db->update('tb_person', $data_person);
            return $result;
        }
 
       function deletePerson($person_id){
            $sql = "DELETE FROM tb_nuser 
                    WHERE NUM_OT = '" . $person_id . "'";
            $result = $this->db->query($sql);//->result();
            return $result;
       } 
}
