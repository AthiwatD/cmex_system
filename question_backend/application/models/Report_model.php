<?php

class Report_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function report_form($evaluation_id){
        $sql = "SELECT s.evaluation_id, e.evaluation_name, e.evaluation_by,
                    s.form_id, f.form_name,
                    SUM(s.sum_point) as 'sum_point', 
                    s.evaluate_person_count, 
                    AVG(s.average_point) as 'average_point',
                    MIN(s.min_choice_point) as 'min_point',
                    MAX(s.max_choice_point) as 'max_point'
                FROM qstn_summary s
                JOIN qstn_evaluation e ON s.evaluation_id = e.evaluation_id
                JOIN qstn_form f ON s.form_id = f.form_id
                WHERE s.evaluation_id = '" . $evaluation_id . "'
                GROUP BY s.form_id";
        $result = $this->db->query($sql)->result();
        //echo  json_encode($result);
        return $result;
    }

    function report_category($evaluation_id){
        $sql = "SELECT s.evaluation_id, e.evaluation_name, e.evaluation_by,
                    s.form_id, f.form_name,
                    s.category_id, ct.category_number, ct.category_name,
                    SUM(s.sum_point) as 'sum_point', 
                    s.evaluate_person_count, 
                    AVG(s.average_point) as 'average_point',
                    MIN(s.min_choice_point) as 'min_point',
                    MAX(s.max_choice_point) as 'max_point'
                FROM qstn_summary s
                JOIN qstn_evaluation e ON s.evaluation_id = e.evaluation_id
                JOIN qstn_form f ON s.form_id = f.form_id
                JOIN qstn_category ct ON s.category_id = ct.category_id
                WHERE s.evaluation_id = '" . $evaluation_id . "'
                GROUP BY ct.category_id";
        $result = $this->db->query($sql)->result();
        //echo  json_encode($result);
        return $result;
    }

    function report_question_group($evaluation_id){
        $sql = "SELECT s.evaluation_id, e.evaluation_name, e.evaluation_by,
                    s.form_id, f.form_name,
                    s.category_id, ct.category_number, ct.category_name,
                    s.question_group_id, qg.question_group_number, qg.question_group_name,
                    SUM(s.sum_point) as 'sum_point', 
                    s.evaluate_person_count, 
                    AVG(s.average_point) as 'average_point',
                    s.min_choice_point,
                    s.max_choice_point,
                    AVG(s.average_point)*100/s.max_choice_point as 'average_percent'
                FROM qstn_summary s
                JOIN qstn_evaluation e ON s.evaluation_id = e.evaluation_id
                JOIN qstn_form f ON s.form_id = f.form_id
                JOIN qstn_category ct ON s.category_id = ct.category_id
                JOIN qstn_question_group qg ON s.question_group_id = qg.question_group_id
                WHERE s.evaluation_id = '" . $evaluation_id . "'
                GROUP BY qg.question_group_id";
        $result = $this->db->query($sql)->result();
        //echo  json_encode($result);
        return $result;
    }

    function report_question($evaluation_id){
        $sql = "SELECT s.evaluation_id, e.evaluation_name, e.evaluation_by,
                    s.form_id, f.form_name,
                    s.category_id, ct.category_number, ct.category_name,
                    s.question_group_id, qg.question_group_number, qg.question_group_name,
                    s.question_id, q.question_number, q.question_name,
                    s.sum_point as 'sum_point', 
                    s.evaluate_person_count, 
                    s.average_point,
                    s.min_choice_point,
                    s.max_choice_point,
                    s.average_percent
                FROM qstn_summary s
                JOIN qstn_evaluation e ON s.evaluation_id = e.evaluation_id
                JOIN qstn_form f ON s.form_id = f.form_id
                JOIN qstn_category ct ON s.category_id = ct.category_id
                JOIN qstn_question_group qg ON s.question_group_id = qg.question_group_id
                JOIN qstn_question q ON s.question_id = q.question_id
                WHERE s.evaluation_id = '" . $evaluation_id . "'";
        $result = $this->db->query($sql)->result();
        //echo  json_encode($result);
        return $result;
    }

    function report_suggestion($evaluation_id){
        $sql = "SELECT s.suggestion_detail
                FROM qstn_suggestion s
                WHERE s.evaluation_id = '" . $evaluation_id . "'";
        $result = $this->db->query($sql)->result();
        //echo  json_encode($result);
        return $result;
    }

    function summary($evaluation_id){
        $this->db->where('evaluation_id', $evaluation_id);
        $result = $this->db->delete("qstn_summary");

        $sql = "SELECT a.evaluation_id, a.form_id, a.category_id, a.question_group_id, a.question_id, 
                        SUM(a.choice_point) as 'sum_point', 
                        COUNT(a.person_id) as 'evaluate_person_count', 
                        AVG(a.choice_point) as 'average_point'
                FROM qstn_answer a
                WHERE a.evaluation_id = '" . $evaluation_id . "'
                GROUP BY a.question_id";
        $result = $this->db->query($sql)->result();

        foreach($result as $row){
            $data = array(
                'evaluation_id' => $row->evaluation_id,
                'form_id' => $row->form_id,
                'category_id' => $row->category_id,
                'question_group_id' => $row->question_group_id,
                'question_id' => $row->question_id,
                'sum_point' => $row->sum_point,
                'evaluate_person_count' => $row->evaluate_person_count,
                'average_point' => $row->average_point
            );
            $result2 = $this->db->insert('qstn_summary', $data);
        }

        $sql3 = "SELECT s.summary_id,
                    MIN(c.choice_point) as 'min_choice_point',
                    MAX(c.choice_point) as 'max_choice_point',
                    AVG(s.sum_point)*100/MAX(c.choice_point) as 'average_percent'
            FROM qstn_summary s
            JOIN qstn_question_group qg ON s.question_group_id = qg.question_group_id
            JOIN qstn_choice_group cg ON qg.choice_group_id = cg.choice_group_id
            JOIN qstn_choice c ON cg.choice_group_id = c.choice_group_id
            WHERE s.evaluation_id = '" . $evaluation_id . "'
            GROUP BY s.summary_id";
        $result3 = $this->db->query($sql3)->result();

        foreach($result3 as $row3){
            $data3 = array(
                'min_choice_point' => $row3->min_choice_point,
                'max_choice_point' => $row3->max_choice_point,
                'average_percent' => $row3->average_percent
            );
            $this->db->where('summary_id', $row3->summary_id);
            $result4 = $this->db->update('qstn_summary', $data3);
        }
        
        return $result2;
    }
}
