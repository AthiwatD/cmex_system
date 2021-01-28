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
                <?php 
                    // if($method == "add"){
                    //     echo form_open_multipart('Salary/addSalaryDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation'));
                    // }else if($method == "update"){
                    //     echo form_open_multipart('Salary/updateSalaryDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation')); 
                    // }
                ?> 

              <form role="form" enctype="multipart/form-data" class="needs-validation" method="POST"
                <?php
                    if($method == "add"){
                        echo " action='" . base_url() . "Sal/addSalaryDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Salary/updateSalaryDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="salary_id" value="<?php echo $salary->salary_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                    
                        
                  <div class="form-group">
                    <label for="exampleInputEmail1">เงินเดือนประจำวันที่ *</label>
                    <div class="row">
                        <input type="date" class="form-control col-6" id="txt_salary_date" name="salary_date" placeholder="เงินเดือนประจำวันที่" value="<?php
                                            if($method == "update"){
                                                echo date("Y-m-d", strtotime($salary->salary_date));
                                            }
                                        ?>" required>

                    </div>
                  </div>

                  
                    <div class="form-group row">
                        <label class="label-control" for="upl_files"> ไฟล์เงินเดือน (.xlsx) *</label>
                        <input name="upl_files" id="upl_files" type="file" class="inputFile form-control" 
                                accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                        <?php
                            if($method == "update"){
                        ?>
                                <div class="form-group">
                                    <table id="table_files" class="table table-flush table-striped table-bordered table-hover col-12">
                                        <thead>
                                            <tr>
                                                <th>ชื่อไฟล์</th>
                                                <th>การดำเนินการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                                foreach($files as $index => $file){
                                            ?>
                                                    <tr>
                                                        <td><?php echo $file->file_name; ?></td>
                                                        <td>
                                                            <a href='<?php echo $file->file_path; ?>' class='btn btn-primary btn-sm' target="_blank"><i class='fas fa-folder'></i>View</a>
                                                            <a href='<?php echo base_url(); ?>Salary/deleteFileDo/<?php echo $salary_id; ?>/<?php echo $file->file_id; ?>' class='btn btn-danger btn-sm' onclick='return confirm("คุณต้องการ ลบ?")'><i class='fas fa-trash'></i>Delete</a>
                                                        </td>
                                                    </tr>
                                            <?php        
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                <div>
                        <?php
                            }
                        ?>
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