<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Report extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Report_model','Report');
        $this->load->model('Evaluation_model','Evaluation');
        $this->load->model('Form_model','Form');
        $this->load->model('FormDetail_model','FormDetail');
        $this->load->model('EvaluatePerson_model','EvaluatePerson');
        $this->load->model('ScoreCriteria_model','ScoreCriteria');
    }
    
    function index(){
        $this->reports();
       
    }
    
    function reports(){
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluations'] = $this->Evaluation->getEvaluations();
        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Report/reports');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายการแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('report/reports_view'), array());      
    }

    function report($evaluation_id){
        $init_height = 200;
        $row_height = 50;
        $this->data['error'] = $this->db->error(); 
        $this->data['evaluation_id'] = $evaluation_id;
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);

        $this->data['scoreCriterias'] = $this->ScoreCriteria->getScoreCriterias();

        $evaluate_person_summary = $this->EvaluatePerson->getEvaluatePersonSummary($evaluation_id);
        $this->data['person_count'] = $evaluate_person_summary->person_count;
        $this->data['person_evaluate_count'] = $evaluate_person_summary->person_evaluate_count;
        $this->data['report_person_evaluate'] = round(($evaluate_person_summary->person_evaluate_count * 100) / $evaluate_person_summary->person_count,2);

        $report_form = $this->Report->report_form($evaluation_id);
        $this->data['report_form'] = $report_form;
        $this->data['report_form_value'] = round($report_form[0]->average_point,2);
        $this->data['report_form_min_point'] = round($report_form[0]->min_point,2);
        $this->data['report_form_max_point'] = round($report_form[0]->max_point,2);
        // $this->data['report_form_min'] =  round(($report_form[0]->average_point * 100) / 5,2);
        // $this->data['report_form_max'] =  round(($report_form[0]->average_point * 100) / 5,2);
        // $this->data['report_form_color'] =  round(($report_form[0]->average_point * 100) / 5,2);



        $report_form_detail = $this->Report->report_form_detail($evaluation_id);

        $report_form_detail_label = array();
        $report_form_detail_answer = array();
        $report_form_detail_count = array();
        $i=0;
        $j=0;
        foreach($report_form_detail as $index => $rpt_fd){
            if($index==0){
                $i=0;
                array_push($report_form_detail_label, $rpt_fd->form_detail_name);
                $report_form_detail_answer[$i] = array();
                $report_form_detail_count[$i] = array();
            }
            if($report_form_detail_label[$i] != $rpt_fd->form_detail_name){
                $i++;
                array_push($report_form_detail_label, $rpt_fd->form_detail_name);
                $report_form_detail_answer[$i] = array();
                $report_form_detail_count[$i] = array();
            }
            array_push($report_form_detail_answer[$i], $rpt_fd->form_detail_answer);
            array_push($report_form_detail_count[$i], $rpt_fd->count_detail_answer);
        }
        $this->data['report_form_detail_label'] = $report_form_detail_label;
        $this->data['report_form_detail_answer'] = $report_form_detail_answer;
        $this->data['report_form_detail_count'] = $report_form_detail_count;








        $report_category = $this->Report->report_category($evaluation_id);
        $this->data['report_category'] = $report_category;
        $report_category_label = array();
        $report_category_data = array();
        $report_category_max_point = array();
        foreach($report_category as $index => $rpt_cat){
            array_push($report_category_label, $rpt_cat->category_number . "." . $rpt_cat->category_name);
            array_push($report_category_data, round($rpt_cat->average_point,2));
            array_push($report_category_max_point, round($rpt_cat->max_point,2));
        }
        $this->data['report_category_label'] = $report_category_label;
        $this->data['report_category_data'] = $report_category_data;
        $this->data['report_category_max_point'] = $report_category_max_point;
        $this->data['category_chart_height'] = $init_height + (sizeof($report_category_data) * $row_height);




        $report_question_group = $this->Report->report_question_group($evaluation_id);
        $this->data['report_question_group'] = $report_question_group;
        $report_question_group_label = array();
        $report_question_group_data = array();
        foreach($report_question_group as $index => $rpt_qg){
            array_push($report_question_group_label, $rpt_qg->question_group_number . "." . $rpt_qg->question_group_name);
            array_push($report_question_group_data, round(($rpt_qg->average_point*100)/$rpt_qg->max_choice_point,2));
        }
        $this->data['report_question_group_label'] = $report_question_group_label;
        $this->data['report_question_group_data'] = $report_question_group_data;
        $this->data['question_group_chart_height'] = $init_height + (sizeof($report_question_group_data) * $row_height);


        $report_question = $this->Report->report_question($evaluation_id);
        $this->data['report_question'] = $report_question;
        $report_question_label = array();
        $report_question_data = array();
        $question_chart_height = array();
        $i=0;
        //$j=0;
        $old_group = 0;
        foreach($report_question as $index => $rpt_q){
            if($index == 0){
                $old_group = $rpt_q->question_group_id;
                $report_question_label[$i] = array();
                $report_question_data[$i] = array();
            }
            if($rpt_q->question_group_id != $old_group){
                $question_chart_height[$i]  = $init_height + (sizeof($report_question_data[$i]) * $row_height);
                $i++;
                //$j=0;
                $old_group = $rpt_q->question_group_id;
                $report_question_label[$i] = array();
                $report_question_data[$i] = array();
            }
            array_push($report_question_label[$i], $rpt_q->question_group_number . "." . $rpt_q->question_number . " " . $rpt_q->question_name);
            array_push($report_question_data[$i], round(($rpt_q->average_point*100)/$rpt_q->max_choice_point,2));
        }
        $question_chart_height[$i]  = $init_height + (sizeof($report_question_data[$i]) * $row_height);
        $this->data['report_question_label'] = $report_question_label;
        $this->data['report_question_data'] = $report_question_data;
        $this->data['question_chart_height'] = $question_chart_height;


        $this->data['report_suggestion'] = $this->Report->report_suggestion($evaluation_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Report/reports');  
        $this->breadcrumb->add('รายงานแบบประเมิน',   base_url().'Report/report/' . $evaluation_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายงานแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('report/report_view'), array('report/report_script'));      
    }

    public function reportGuage(){
        $this->data['error'] = $this->db->error(); 
        $evaluation_id = $this->input->post('evaluation_id');
        $this->data['evaluation_id'] = $evaluation_id;
        $this->data['evaluation'] = $this->Evaluation->getEvaluation($evaluation_id);

        $this->data['scoreCriterias'] = $this->ScoreCriteria->getScoreCriterias();

        $score_criteria_id = $this->input->post('score_criteria_id');
        $scoreCriteria = $this->ScoreCriteria->getScoreCriteria($score_criteria_id);
            $this->data['scoreCriteria'] = $scoreCriteria;
            $this->data['criterias'] = $scoreCriteria->criterias;
            $this->data['min_scores'] = $scoreCriteria->min_scores;
            $this->data['max_scores'] = $scoreCriteria->max_scores;
            $this->data['meanings'] = $scoreCriteria->meanings;
            $this->data['color_codes'] = $scoreCriteria->color_codes;


        $evaluate_person_summary = $this->EvaluatePerson->getEvaluatePersonSummary($evaluation_id);
        $this->data['person_count'] = $evaluate_person_summary->person_count;
        $this->data['person_evaluate_count'] = $evaluate_person_summary->person_evaluate_count;
        $this->data['report_person_evaluate'] = round(($evaluate_person_summary->person_evaluate_count * 100) / $evaluate_person_summary->person_count,2);

        $report_form = $this->Report->report_form($evaluation_id);
        $this->data['report_form'] = $report_form;
        $this->data['report_form_value'] = round($report_form[0]->average_point,2);
        $this->data['report_form_min_point'] = round($report_form[0]->min_point,2);
        $this->data['report_form_max_point'] = round($report_form[0]->max_point,2);
        // $this->data['report_form_min'] =  round(($report_form[0]->average_point * 100) / 5,2);
        // $this->data['report_form_max'] =  round(($report_form[0]->average_point * 100) / 5,2);
        // $this->data['report_form_color'] =  round(($report_form[0]->average_point * 100) / 5,2);



        $report_form_detail = $this->Report->report_form_detail($evaluation_id);

        $report_form_detail_label = array();
        $report_form_detail_answer = array();
        $report_form_detail_count = array();
        $i=0;
        $j=0;
        foreach($report_form_detail as $index => $rpt_fd){
            if($index==0){
                $i=0;
                array_push($report_form_detail_label, $rpt_fd->form_detail_name);
                $report_form_detail_answer[$i] = array();
                $report_form_detail_count[$i] = array();
            }
            if($report_form_detail_label[$i] != $rpt_fd->form_detail_name){
                $i++;
                array_push($report_form_detail_label, $rpt_fd->form_detail_name);
                $report_form_detail_answer[$i] = array();
                $report_form_detail_count[$i] = array();
            }
            array_push($report_form_detail_answer[$i], $rpt_fd->form_detail_answer);
            array_push($report_form_detail_count[$i], $rpt_fd->count_detail_answer);
        }
        $this->data['report_form_detail_label'] = $report_form_detail_label;
        $this->data['report_form_detail_answer'] = $report_form_detail_answer;
        $this->data['report_form_detail_count'] = $report_form_detail_count;








        $report_category = $this->Report->report_category($evaluation_id);
        $this->data['report_category'] = $report_category;
        $report_category_label = array();
        $report_category_data = array();
        $report_category_max_point = array();
        foreach($report_category as $index => $rpt_cat){
            array_push($report_category_label, $rpt_cat->category_number . "." . $rpt_cat->category_name);
            array_push($report_category_data, round($rpt_cat->average_point,2));
            array_push($report_category_max_point, round($rpt_cat->max_point,2));
        }
        $this->data['report_category_label'] = $report_category_label;
        $this->data['report_category_data'] = $report_category_data;
        $this->data['report_category_max_point'] = $report_category_max_point;


        $report_question_group = $this->Report->report_question_group($evaluation_id);
        $this->data['report_question_group'] = $report_question_group;
        $report_question_group_label = array();
        $report_question_group_data = array();
        foreach($report_question_group as $index => $rpt_qg){
            array_push($report_question_group_label, $rpt_qg->question_group_number . "." . $rpt_qg->question_group_name);
            array_push($report_question_group_data, round(($rpt_qg->average_point*100)/$rpt_qg->max_choice_point,2));
        }
        $this->data['report_question_group_label'] = $report_question_group_label;
        $this->data['report_question_group_data'] = $report_question_group_data;


        $report_question = $this->Report->report_question($evaluation_id);
        $this->data['report_question'] = $report_question;
        $report_question_label = array();
        $report_question_data = array();
        $question_chart_height = array();
        $i=0;
        //$j=0;
        $old_group = 0;
        foreach($report_question as $index => $rpt_q){
            if($index == 0){
                $old_group = $rpt_q->question_group_id;
                $report_question_label[$i] = array();
                $report_question_data[$i] = array();
            }
            if($rpt_q->question_group_id != $old_group){
                $i++;
                //$j=0;
                $old_group = $rpt_q->question_group_id;
                $report_question_label[$i] = array();
                $report_question_data[$i] = array();
            }
            array_push($report_question_label[$i], $rpt_q->question_group_number . "." . $rpt_q->question_number . " " . $rpt_q->question_name);
            array_push($report_question_data[$i], round(($rpt_q->average_point*100)/$rpt_q->max_choice_point,2));
        }
        $this->data['report_question_label'] = $report_question_label;
        $this->data['report_question_data'] = $report_question_data;

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Report/reports');  
        $this->breadcrumb->add('รายงานแบบประเมิน',   base_url().'Report/report/' . $evaluation_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "รายงานแบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('report/report_guage_view'), array('report/report_guage_script'));      
    }

    function summary($evaluation_id){
        
        $result = $this->Report->summary($evaluation_id);
        
        if(!$result){
            $this->addReport();
        }else{
            $this->reports(); 
        }
    }

    /*
    function addReport(){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "add";
        $this->data['forms'] = $this->Form->getForms();

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Report/reports');    
        $this->breadcrumb->add('เพิ่ม แบบประเมิน',   base_url().'Report/addReport');      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "เพิ่ม แบบประเมิน";
        //$this->data['categories'] = $this->Category->getCategories();
        $this->loadData();
        $this->loadViewWithScript(array('report/report_form_view'), array());      
    }

    

    function addReportWizardDo(){
        $result = $this->Report->addReportWizard();
        $data = $this->Report->getReportsWizard();
        echo json_encode($data);
    }

    function updateReport($evaluation_id){   
        $this->data['error'] = $this->db->error(); 
        $this->data['method'] = "update";
        $this->data['forms'] = $this->Form->getForms();
        $this->data['report'] = $this->Report->getReport($evaluation_id);

        $this->breadcrumb->add('หน้าหลัก', base_url() .'Home');      
        $this->breadcrumb->add('รายการแบบประเมิน',   base_url().'Report/reports');    
        $this->breadcrumb->add('แก้ไข แบบประเมิน',   base_url().'Report/updateReport/' . $evaluation_id);      
        $this->data['breadcrumb'] = $this->breadcrumb->output();

        $this->data['head_title'] = "แก้ไข แบบประเมิน";
        $this->loadData();
        $this->loadViewWithScript(array('report/report_form_view'), array());      
    }
    
    function updateReportDo(){
        
        $result = $this->Report->updateReport();
        //echo $result;
        if(!$result){
            //$this->addReport();
            $this->reports(); 
        }else{
            $this->reports(); 
        }
    }

    function deleteReportDo($evaluation_id){
        
        $result = $this->Report->deleteReport($evaluation_id);
        
        if(!$result){
            //$this->addReport();
            $this->reports(); 
        }else{
            $this->reports(); 
        }
    }
    */
}