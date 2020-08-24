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
                        echo " action='" . base_url() . "Form/addFormDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Form/updateFormDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="form_id" value="<?php echo $form->form_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อฟอร์ม</label>
                    <input type="text" class="form-control" id="txt_form_name" name="form_name" placeholder="กรุณากรอกชื่อฟอร์ม" value="<?php
                                        if($method == "update"){
                                            echo $form->form_name;
                                        }
                                    ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">รายละเอียด</label>
                    <textarea class="form-control" id="txt_form_description" name="form_description"><?php
                                        if($method == "update"){
                                            echo $form->form_description;
                                        }
                                    ?></textarea>
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