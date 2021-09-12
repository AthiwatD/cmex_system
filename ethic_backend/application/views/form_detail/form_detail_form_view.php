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
                        echo " action='" . base_url() . "FormDetail/addFormDetailDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "FormDetail/updateFormDetailDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="form_detail_id" value="<?php echo $form_detail->form_detail_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ฟอร์ม</label>
                        
                        <select id="select_form_id" name="form_id" class="form-control" required>
                            <?php
                                foreach($forms as $form){
                            ?>
                                    <option value="<?php echo $form->form_id; ?>"
                                        <?php
                                            if (!empty($form_detail->form_id)) {
                                                if($form_detail->form_id == $form->form_id){
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
                    <label for="exampleInputEmail1">ข้อ</label>
                    <input type="text" class="form-control" id="txt_form_detail_number" name="form_detail_number" placeholder="กรุณากรอกชื่อข้อ" value="<?php
                                        if($method == "update"){
                                            if (!empty($form_detail->form_detail_number)) {
                                                echo $form_detail->form_detail_number;
                                            }
                                        }
                                    ?>" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">คำถาม</label>
                    <input type="text" class="form-control" id="txt_form_detail_name" name="form_detail_name" placeholder="กรุณากรอกคำถาม" value="<?php
                                        if($method == "update"){
                                            if (!empty($form_detail->form_detail_name)) {
                                                echo $form_detail->form_detail_name;
                                            }
                                        }
                                    ?>" required>
                  </div>
                  
                    <div class="form-group row">
                        <label for="exampleInputPassword1">คำตอบ</label> *เพิ่มคำตอบเป็นช่องว่างเพื่อให้กรอกข้อมูลด้วยตัวเอง
                        
                    </div>
                    <div id="div_form_detail_item_list">

                    </div>
                    <button type="button" class="btn btn-success" onclick="new_item()">เพิ่ม</button>
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