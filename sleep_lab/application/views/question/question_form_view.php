<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                  <div class="row">
                    <div class="col-lg-8">
                      <p class="mb-0">
                          <?php  
                              if((!empty($error)) && ($error["code"]!=0)){
                                  foreach($error as $err){
                          ?>
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                          <span class="alert-text"><strong>Error!</strong> 
                                              <?php echo $err; ?> </span>
                                      </div>
                          <?php
                                  }
                              }
                          ?>
                      </p>
                    </div>
                  </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" class="needs-validation" method="POST"
                <?php
                    if($method == "add"){
                        echo " action='" . base_url() . "Question/addQuestionDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Question/updateQuestionDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="question_id" value="<?php echo $question->question_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ฟอร์ม</label>
                        
                        <select id="select_form_id" name="form_id" class="form-control" onchange="show_categories();show_question_groups();" required>
                            <?php
                                foreach($forms as $form){
                            ?>
                                    <option value="<?php echo $form->form_id; ?>"
                                        <?php
                                            if (!empty($question->form_id)) {
                                                if($question->form_id == $form->form_id){
                                                    echo " selected ";
                                                }
                                            }
                                        ?>
                                        ><?php echo $form->form_name; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>


                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select id="select_category_id" name="category_id" class="form-control" onchange="show_question_groups();" required>
                            
                        </select>
                    </div>

                    
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">กลุ่มคำถาม</label>
                        <select id="select_question_group_id" name="question_group_id" class="form-control" required>
                            
                        </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">ข้อ</label>
                    <input type="text" class="form-control" id="txt_question_number" name="question_number" placeholder="กรุณากรอกชื่อข้อ" value="<?php
                                        if($method == "update"){
                                            if (!empty($question->question_number)) {
                                                echo $question->question_number;
                                            }
                                        }
                                    ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">คำถาม</label>
                    <input type="text" class="form-control" id="txt_question_name" name="question_name" placeholder="กรุณากรอกชื่อคำถาม" value="<?php
                                        if($method == "update"){
                                            if (!empty($question->question_name)) {
                                                echo $question->question_name;
                                            }
                                        }
                                    ?>" required>
                  </div>

    

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
              </form>
            </div>  
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->