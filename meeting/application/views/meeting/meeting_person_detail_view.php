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

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">กลุ่ม</label>
                        <?php
                            echo $meeting->board_name;
                        ?>
                    </div>
                        
                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อการประชุม</label>
                    <?php
                        echo $meeting->meeting_name;
                    ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">สถานที่</label>
                    <?php
                        echo $meeting->meeting_location;
                    ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ประชุม วันที่-เวลา</label>
                    <?php
                        echo $meeting->meeting_datetime;
                    ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">รับรองเอกสารได้ถึง วันที่-เวลา </label>
                    <?php
                        echo $meeting->approve_expire_datetime;
                    ?>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ</label>
                    <?php
                        echo $meeting_person->person_name;
                    ?>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ตำแหน่ง</label>
                    <?php
                        echo  $meeting_person->position_name;
                    ?>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ดูครั้งแรก</label>
                    <?php 
                        if($meeting_person->watched_datetime == "0000-00-00 00:00:00"){
                            echo "ยังไม่ได้เปิด";
                        }else{
                            echo $meeting_person->watched_datetime; 
                        }        
                    ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">รับรอง</label>
                    <?php 
                        if($meeting_person->approved_datetime == "0000-00-00 00:00:00"){
                            echo "ยังไม่ได้รับรอง";
                        }else{
                            echo $meeting_person->approved_datetime; 
                        }        
                    ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">รายละเอียดเพิ่มเติม</label>
                    <?php
                        echo $meeting_person->suggest;
                    ?>

                  </div>
                  

                    <div class="form-group">
                        <label class="label-control" for="upl_files"> เอกสารแนบเพิ่มเติม</label>
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
                                        foreach($meeting_person_with_files as $index => $file){
                                    ?>
                                            <tr>
                                                <td><?php echo $file->file_name; ?></td>
                                                <td>
                                                    <a href='<?php echo $file->file_path; ?>' class='btn btn-primary btn-sm' target="_blank"><i class='fas fa-folder'></i>View</a>
                                                </td>
                                            </tr>
                                    <?php        
                                        }
                                    ?>
                                </tbody>
                            </table>
                        <div>
                       
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> QR Code</label><br>
                        <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $meeting_person_link; ?>&choe=UTF-8" alt="<?php echo $meeting_person->person_name; ?>" />
                    </div>

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