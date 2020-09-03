<?php

class Wizard_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function addWizard(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $points = json_decode($stream_clean);
        if(!isset($points)){
            return "NOT isset";
        }
        else{
            if(empty($points)){
                return "NOT POSTED";
            }
            else{
                $form_name = $points->form->name;
                $form_description = $points->form->description;
                $data = array(
                    'form_name' => $form_name,
                    'form_description' => $form_description,
                );
                $result = $this->db->insert('qstn_form', $data);
                $form_id = $this->db->insert_id();

                
                foreach($points->form_details as $key => $value){
                    $form_detail_number = $points->form_details->$key->number;
                    $form_detail_name = $points->form_details->$key->name;
                    
                    $form_detail_items = "";
                    $item_count = 0;
                    
                    foreach($points->form_detail_items->$key as $key_j => $values_j){
                        if($item_count!=0){
                            $form_detail_items .= "(.)";
                        }
                        $form_detail_items .= $values_j->item;
                        $item_count++;
                    }
                    
                    $data = array(
                        'form_detail_number' => $form_detail_number,
                        'form_detail_name' => $form_detail_name,
                        'form_detail_items' => $form_detail_items,
                        'form_id' => $form_id,
                    );
                    $result = $this->db->insert('qstn_form_detail', $data); 
                }

                foreach($points->categories as $key_i => $values_i){
                    $category_number = $points->categories->$key_i->number;
                    $category_name = $points->categories->$key_i->name;
                    $data = array(
                        'category_number' => $category_number,
                        'category_name' => $category_name,
                        'form_id' => $form_id,
                    );
                    $result = $this->db->insert('qstn_category', $data);
                    $category_id = $this->db->insert_id();

                    
                    foreach($points->question_groups->$key_i as $key_j => $values_j){
                        $question_group_number = $points->question_groups->$key_i->$key_j->number;
                        $question_group_name = $points->question_groups->$key_i->$key_j->name;
                        $choice_group_id = $points->question_groups->$key_i->$key_j->choice_group_id;
                        $data = array(
                            'question_group_number' => $question_group_number,
                            'question_group_name' => $question_group_name,
                            'form_id' => $form_id,
                            'category_id' => $category_id,
                            'choice_group_id' => $choice_group_id,
                        );
                        $result = $this->db->insert('qstn_question_group', $data);
                        $question_group_id = $this->db->insert_id();
                        
                        foreach($points->questions->$key_i->$key_j as $key_k => $values_k){
                            $question_number = $points->questions->$key_i->$key_j->$key_k->number;
                            $question_name = $points->questions->$key_i->$key_j->$key_k->name;
                            $data = array(
                                'question_number' => $question_number,
                                'question_name' => $question_name,
                                'form_id' => $form_id,
                                'category_id' => $category_id,
                                'question_group_id' => $question_group_id,
                            );
                            $result = $this->db->insert('qstn_question', $data);
                            $question_id = $this->db->insert_id();   
                        }
                        
                    }
                    
                }
                return $result;
            }
        }

    }
}
