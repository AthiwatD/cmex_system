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
              <!-- evaluation start -->
              <form role="form" class="needs-validation" method="POST"
                <?php
                    if($method == "add"){
                        echo " action='" . base_url() . "Evaluation/addEvaluationDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Evaluation/updateEvaluationDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="evaluation_id" value="<?php echo $evaluation->evaluation_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                  <div class="evaluation-group">
                    <label for="exampleInputEmail1">ชื่อแบบประเมิน</label>
                    <input type="text" class="form-control" id="txt_evaluation_name" name="evaluation_name" placeholder="กรุณากรอกชื่อแบบประเมิน" value="<?php
                                        if($method == "update"){
                                            echo $evaluation->evaluation_name;
                                        }
                                    ?>" required>
                  </div>

                  <div class="evaluation-group">
                    <label for="exampleInputEmail1">หน่วยงานที่จัดทำ</label>
                    <input type="text" class="form-control" id="txt_evaluation_by" name="evaluation_by" placeholder="กรุณากรอกชื่อแบบประเมิน" value="<?php
                                        if($method == "update"){
                                            echo $evaluation->evaluation_by;
                                        }
                                    ?>" >
                  </div>

                  
                  <div class="evaluation-group">
                    <label for="exampleInputPassword1">รายละเอียด</label>
                    <textarea class="form-control" id="txt_evaluation_description" name="evaluation_description"><?php
                                        if($method == "update"){
                                            echo $evaluation->evaluation_description;
                                        }
                                    ?></textarea>
                  </div>
                  
                  <div class="form-group">
                        <label for="exampleInputEmail1">ฟอร์ม</label>
                        
                        <select id="select_form_id" name="form_id" class="form-control" required>
                            <?php
                                foreach($forms as $form){
                            ?>
                                    <option value="<?php echo $form->form_id; ?>"
                                        <?php
                                            if (!empty($evaluation->form_id)) {
                                                if($evaluation->form_id == $form->form_id){
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

                  <div class="evaluation-group">
                    <label for="exampleInputEmail1">วันที่เริ่มต้น</label>
                    <input type="date" class="form-control" id="txt_date_start" name="date_start" placeholder="เลือกวันที่เริ่มประเมิน" value="<?php
                                        if($method == "update"){
                                            echo $evaluation->date_start;
                                        }
                                    ?>" >
                  </div>

                  

                  <div class="evaluation-group">
                    <label for="exampleInputEmail1">วันที่สิ้นสุด</label>
                    <input type="date" class="form-control" id="txt_date_end" name="date_end" placeholder="เลือกวันที่สิ้นสุดประเมิน" value="<?php
                                        if($method == "update"){
                                            echo $evaluation->date_end;
                                        }
                                    ?>" >
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