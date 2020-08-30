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
                        echo " action='" . base_url() . "Wizard/addWizardDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Wizard/updateWizardDo' ";
                    }
                ?>
                > 
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="form_id" value="<?php echo $wizard->form_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อฟอร์ม</label>
                        <input type="text" class="form-control" id="txt_form_name" name="form_name" placeholder="กรุณากรอกชื่อฟอร์ม" value="<?php
                                            if($method == "update"){
                                                echo $wizard->form_name;
                                            }
                                        ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">คำอธิบาย</label>
                        <textarea class="form-control" id="txt_form_description" name="form_description"><?php
                                            if($method == "update"){
                                                echo $wizard->form_description;
                                            }
                                        ?></textarea>
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputPassword1">รายละเอียดฟอร์ม</label>
                        <div id="div_form_detail_list">

                        </div>
                        <button type="button" class="btn btn-success" onclick="new_form_detail()">เพิ่ม รายละเอียดฟอร์ม</button>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <div id="div_category_list">

                        </div>
                        <button type="button" class="btn btn-success" onclick="new_category()">เพิ่ม Category</button>
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="exampleInputPassword1">array</label>
                        <div>
                            <textarea id="print_array_area" class="col-12"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" onclick="update_item_arr()">show array</button>
                    </div>
                    -->
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" onclick="add_wizard();">บันทึก</button>
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