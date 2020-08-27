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
                        echo " action='" . base_url() . "Category/addCategoryDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Category/updateCategoryDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="category_id" value="<?php echo $category->category_id; ?>">
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
                                            if (!empty($category->form_id)) {
                                                if($category->form_id == $form->form_id){
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
                    <label for="exampleInputEmail1">ลำดับ</label>
                    <input type="text" class="form-control" id="txt_category_number" name="category_number" placeholder="กรุณากรอกชื่อลำดับ" value="<?php
                                        if($method == "update"){
                                            if (!empty($category->category_number)) {
                                                echo $category->category_number;
                                            }
                                        }
                                    ?>" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">ชื่อ Category</label>
                    <input type="text" class="form-control" id="txt_category_name" name="category_name" placeholder="กรุณากรอกคำถาม" value="<?php
                                        if($method == "update"){
                                            if (!empty($category->category_name)) {
                                                echo $category->category_name;
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