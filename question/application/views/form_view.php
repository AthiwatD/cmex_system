<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <div class="form-body">
                <form role="form" class="needs-validation" method="POST" action="<?php echo base_url() . "Home/formDo/" . $evaluation[0]->evaluation_id; ?>">
                    <div class="evaluation_header">
                        <h2 class="form-section"><?php echo $evaluation[0]->evaluation_name; ?></h2><br>
                        <h4 class="form-section"><?php echo $evaluation[0]->evaluation_by; ?></h4>

                    </div>
                    <br><br>
                    <div class="evaluation-form-detail">
                        <h4 class="form-section">รายละเอียด</h4>
                        <?php
                            foreach($form_details as $form_detail){
                                echo "<div class='form-group' id='div_form_detail_$form_detail->form_detail_id'>";
                                echo "<p>$form_detail->form_detail_number. $form_detail->form_detail_name</p>";
                                $items = explode("(.)", $form_detail->form_detail_items);
                                foreach($items as $index => $item){
                                    echo "<div class='form-check'>";
                                    echo "<label class='form-check-label'>";
                                    if($item != ""){
                                        echo "  <input type='radio' class='form-check-input' id='input_rad_" . $form_detail->form_detail_id . "_" . $index . "' name='form_detail[]' required>$item <br>";
                                    }
                                    else{
                                        echo " <input type='text' class='form-control' placeholder='โปรดระบุ'>";
                                    }
                                    echo "</label>";
                                    echo "</div>";
                                }
                                echo "</div>";
                            }
                        ?>
                    </div>
                        
                    <div class="evaluation-form-question">
                        <?php
                            $category_id = 0;
                            $category_div_close = 0;
                            $question_group_id = 0;
                            $question_id = 0;
                            $question_div_close = 0;
                            foreach($evaluation as $index => $item){
                                
                                        if(($question_div_close > 0) && ($question_id != $item->question_id)){
                                            $question_div_close = 0;
                                            echo "</select>";
                                            echo "</div>";
                                        }
                                if(($category_div_close > 0) &&  ($category_id != $item->category_id)){
                                    $category_div_close=0;
                                    echo "</div>";
                                }
                                // CATEGORY
                                if($category_id != $item->category_id){
                                    
                                    $category_id = $item->category_id;
                                    echo "<div class='form-group>";
                                    echo "<div class='form-group' id='div_category_$item->category_id'>";
                                    echo "<h4>$item->category_number. $item->category_name</h4>";
                                    echo "</div>";
                                    $category_div_close++;
                                }
                                    if($question_group_id != $item->question_group_id){
                                        $question_group_id = $item->question_group_id;
                                        echo "<br><br>";
                                        echo "<div class='form-group' id='div_question_group_$item->question_group_id'>";
                                        echo "<h5>$item->question_group_number. $item->question_group_name</h5>";
                                        echo "</div>";
                                    }
                                        
                                        if($question_id != $item->question_id){
                                            $question_id = $item->question_id;
                                            echo "<div class='form-group' id='div_question_$item->question_id'>";
                                            echo "<p>$item->question_number. $item->question_name</p>";
                                            echo "<select class='form-control' id='select_choice_of_question_$item->question_id' name='choice_of_question[]' required>";
                                            echo "<option value='' disabled selected>$item->choice_group_name_show</option>";
                                            $question_div_close++;
                                        }
                                            echo "<option value='" . $item->evaluation_id . "(.)" .
                                                                    $item->form_id . "(.)" .
                                                                    $item->category_id . "(.)" .
                                                                    $item->question_group_id . "(.)" . 
                                                                    $item->question_id . "(.)" . 
                                                                    $item->choice_group_id . "(.)" .
                                                                    $item->choice_id . "(.)" .
                                                                    $item->choice_name . "(.)" .
                                                                    $item->choice_point . "(.)" .
                                                                    $this->session->username .
                                                                "'>$item->choice_name</option>";
                                            
                            }
                                    if($question_div_close > 0){
                                        $question_div_close = 0;
                                        echo "</select>";
                                        echo "</div>";
                                    }
                            if($category_div_close > 0){
                                $category_div_close=0;
                                echo "</div>";
                            }

                        ?>
                    </div>
                    <br><br>
                    <div class="evaluation-suggestion">
                        <div class="form-group">
                            <label for="exampleInputPassword1">ข้อคิดเห็น - ข้อเสนอแนะ</label>
                            <textarea class="form-control" id="txt_suggestion_detail" name="suggestion_detial" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="evaluation-submit">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success form-control" onclick="check_send();">ส่งแบบประเมิน</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
       
    </div>
    <!-- /.card-body -->
</div>