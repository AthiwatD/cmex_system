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
                      <h1><?php echo $head_title; ?></h1>
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

<!--
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
-->
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


                

                <form role="form" enctype="multipart/form-data" class="needs-validation" method="POST" action='<?php echo base_url() . "Approve/approveDo"; ?>'>
                    <input type="hidden" name="meeting_id" value="<?php echo $meeting_id; ?>">
                    <input type="hidden" name="meeting_person_id" value="<?php echo $meeting_person_id; ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">รายละเอียดเพิ่มเติม</label>
                    <textarea name="suggest" id="txt_suggest" class="form-control" rows="3">
                        <?php
                            echo $meeting_person->suggest;
                        ?>
                    </textarea>
                  </div>
                  
                  <div class="form-group row">
                        <label class="label-control" for="upl_files"> ไฟล์เอกสาร *</label>
                        <input name="upl_files[]" id="upl_files" type="file" class="inputFile form-control" 
                                            accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" multiple />
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
                                            foreach($files as $index => $file){
                                        ?>
                                                <tr>
                                                    <td><?php echo $file->file_name; ?></td>
                                                    <td>
                                                        <a href='<?php echo $file->file_path; ?>' class='btn btn-primary btn-sm' target="_blank"><i class='fas fa-folder'></i>ดู</a>
                                                        <a href='<?php echo base_url() . "Approve/deleteFileDo/" . $meeting_id . "/" . $meeting_person_id . "/" . $file->file_id; ?>' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>ลบ</a>
                                                    </td>
                                                </tr>
                                        <?php        
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            <div>
                        
                        </div>
                    </div>

                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-success form-control">รับรองเอกสาร</button>
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