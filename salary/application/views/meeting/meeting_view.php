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
                      <h3><?php echo $head_title; ?></h3>
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
                        <label class="label-control" for="upl_files"> ไฟล์เอกสาร</label>
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
                    <label for="exampleInputPassword1">ผู้รับรายงานการประชุม</label>
                        <table id="table_persons" class="table table-flush table-striped table-bordered table-hover col-12"> <!-- id="datatable-basic" -->
                            <thead class="thead-light">
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>ตำแหน่ง</th>
                                    <th>ดู</th>
                                    <th>รับรอง</th>
                                    <th>การดำเนินการ</th>

                                </tr>
                            </thead>
                            <tbody id="table_body_persons">
                                <?php

                                    foreach($meeting_persons as $index => $meeting_person){
                                ?>
                                        <tr>
                                            <td><?php echo $meeting_person->person_name; ?></td>
                                            <td><?php echo $meeting_person->position_name; ?></td>
                                            <td>
                                                <?php 
                                                    if($meeting_person->watched_datetime == "0000-00-00 00:00:00"){
                                                        echo "ยังไม่ได้เปิด";
                                                    }else{
                                                        $date = explode(" ", $meeting_person->watched_datetime);
                                                        $date = convert_to_thai_date($date[0]);
                                                        echo $date . " เวลา " . date("H:i:s", strtotime($meeting_person->watched_datetime)); 
                                                    }        
                                                ?>
                                                        
                                            </td>
                                            <td>
                                                <?php 
                                                    if($meeting_person->approved_datetime == "0000-00-00 00:00:00"){
                                                        echo "ยังไม่ได้รับรอง";
                                                    }else{
                                                        $date = explode(" ", $meeting_person->approved_datetime);
                                                        $date = convert_to_thai_date($date[0]);
                                                        echo $date . " เวลา " . date("H:i:s", strtotime($meeting_person->approved_datetime)); 
                                                    }        
                                                ?>
                                                        
                                            </td>
                                            <td>
                                                <a href='<?php echo base_url() . "Meeting/meetingPersonDetail/" . $meeting_id . "/" . $meeting_person->meeting_person_id; ?>' class='btn btn-primary btn-sm' target="_blank"><i class='fas fa-folder'></i>View</a>
                                            
                                            </td>
                                        </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputPassword1">รายละเอียดเพิ่มเติม</label>
                        <table id="table_persons" class="table table-flush table-striped table-bordered table-hover col-12"> <!-- id="datatable-basic" -->
                            <thead class="thead-light">
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>ข้อความ</th>
                                </tr>
                            </thead>
                            <tbody id="table_body_persons">
                                <?php

                                    foreach($meeting_persons as $index => $meeting_person){
                                        if(!empty($meeting_person->suggest)){
                                ?>
                                            <tr>
                                                <td><?php echo $meeting_person->person_name; ?></td>
                                                <td><?php echo $meeting_person->suggest; ?></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">เอกสารแนบเพิ่มเติม</label>
                        <table id="table_persons" class="table table-flush table-striped table-bordered table-hover col-12"> <!-- id="datatable-basic" -->
                            <thead class="thead-light">
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>ไฟล์</th>
                                </tr>
                            </thead>
                            <tbody id="table_body_persons">
                                <?php

                                    foreach($meeting_persons_with_files as $index => $mpf){
                                        
                                ?>
                                            <tr>
                                                <td><?php echo $mpf->person_name; ?></td>
                                                <td><a href="<?php echo $mpf->file_path; ?>"><?php echo $mpf->file_name; ?></a></td>
                                            </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
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