<?php

class ChoiceGroup_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getChoiceGroups() {

        $sql = "SELECT *
                FROM qstn_choice_group cg
                LEFT JOIN qstn_choice c ON cg.choice_group_id = c.choice_group_id
                ORDER BY cg.choice_group_id DESC, c.choice_number ASC";
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function getChoiceGroup($choice_group_id) {

        $sql = "SELECT *
                    FROM qstn_choice_group cg
                    LEFT JOIN qstn_choice c ON cg.choice_group_id = c.choice_group_id
                    WHERE c.choice_group_id = '" . $choice_group_id . "'
                    ORDER BY c.choice_number ASC";
                    
                    
        $result = $this->db->query($sql)->result();

        return $result;
    }

    function addChoiceGroup(){
        $choice_group_name = $this->security->xss_clean($this->input->post('choice_group_name'));
        $choice_group_name_show = $this->security->xss_clean($this->input->post('choice_group_name_show'));
        $choice_number = $this->security->xss_clean($this->input->post('choice_number'));
        $choice_name = $this->security->xss_clean($this->input->post('choice_name'));
        $choice_point = $this->security->xss_clean($this->input->post('choice_point'));
        
        $data = array(
            'choice_group_name' => $choice_group_name,
            'choice_group_name_show' => $choice_group_name_show,
        );
        $result = $this->db->insert('qstn_choice_group', $data);
        $insert_id = $this->db->insert_id();

        for($i=0;$i<sizeof($choice_number);$i++){
            $data = array(
                'choice_number' => $choice_number[$i],
                'choice_name' => $choice_name[$i],
                'choice_point' => $choice_point[$i],
                'choice_group_id' => $insert_id,
            );
            $result = $this->db->insert('qstn_choice', $data);
        }

        return $result;
    }


    function updateChoiceGroup(){
        $choice_group_id = $this->security->xss_clean($this->input->post('choice_group_id'));
        $choice_group_name = $this->security->xss_clean($this->input->post('choice_group_name'));
        $choice_group_name_show = $this->security->xss_clean($this->input->post('choice_group_name_show'));

        $choice_id= $this->security->xss_clean($this->input->post('choice_id'));
        $choice_number = $this->security->xss_clean($this->input->post('choice_number'));
        $choice_name = $this->security->xss_clean($this->input->post('choice_name'));
        $choice_point = $this->security->xss_clean($this->input->post('choice_point'));
        
        $data = array(
            'choice_group_name' => $choice_group_name,
            'choice_group_name_show' => $choice_group_name_show,
        );
        $this->db->where('choice_group_id', $choice_group_id);
        $result = $this->db->update('qstn_choice_group', $data);

        for($i=0;$i<sizeof($choice_number);$i++){
            $data = array(
                'choice_number' => $choice_number[$i],
                'choice_name' => $choice_name[$i],
                'choice_point' => $choice_point[$i],
            );
            $this->db->where('choice_id', $choice_id[$i]);
            $result = $this->db->update('qstn_choice', $data);
        }
        
        return $result;
    }

    function deleteChoiceGroup($choice_group_id){
        // $data = array(
        //     'deleted' => 1,
        // );
        $this->db->where('choice_group_id', $choice_group_id);
        //$result = $this->db->update('choice_group', $data);
        $result = $this->db->delete("qstn_choice_group");
        return $result;
    }
}
