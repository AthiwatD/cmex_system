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
                        echo " action='" . base_url() . "ChoiceGroup/addChoiceGroupDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "ChoiceGroup/updateChoiceGroupDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="choice_group_id" value="<?php echo $choice_group->choice_group_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                    

                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อกลุ่มคำตอบ</label>
                    <input type="text" class="form-control" id="txt_choice_group_name" name="choice_group_name" placeholder="กรุณากรอกชื่อกลุ่มคำตอบ" value="<?php
                                        if($method == "update"){
                                            if (!empty($choice_group->choice_group_name)) {
                                                echo $choice_group->choice_group_name;
                                            }
                                        }
                                    ?>" required>
                  </div>
                  
                  
                  
                    <div class="form-group row">
                        <label for="exampleInputPassword1">คำตอบ</label>
                        
                    </div>
                    <div id="div_choice_list">

                    </div>
                    <button type="button" class="btn btn-success" onclick="new_choice()">เพิ่มคำตอบ</button>
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