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
                    //     echo form_open_multipart('Meeting/addMeetingDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation'));
                    // }else if($method == "update"){
                    //     echo form_open_multipart('Meeting/updateMeetingDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation')); 
                    // }
                ?> 

              <form role="form" enctype="multipart/form-data" class="needs-validation" method="POST"
                <?php
                    if($method == "add"){
                        echo " action='" . base_url() . "Meeting/addMeetingDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Meeting/updateMeetingDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="meeting_id" value="<?php echo $meeting->meeting_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">กลุ่ม</label>
                        <input type="hidden" id="hdn_board_name" name="board_name" value="">
                        <select class="form-control" id="select_board" name="board_id" onchange="get_board_persons()" required>
                            <option disabled selected>โปรดเลือกกลุ่ม</option>
                            <?php
                                foreach($boards as $index => $board){
                            ?>
                                   <option value="<?php echo $board->board_id; ?>"
                                        <?php
                                            if (!empty($meeting->board_id)) {
                                                if($meeting->board_id == $board->board_id){
                                                    echo " selected ";
                                                }
                                            }
                                        ?>
                                        ><?php 
                                                if (!empty($meeting->board_name)) {
                                                    
                                                    echo $meeting->board_name;
                                                }
                                                else{
                                                    echo $board->board_name; 
                                                }
                                        
                                        ?></option>
                            <?php
                                }
                            ?>
                            <option value="0">อื่น ๆ</option>
                        </select>
                    </div>
                        
                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อการประชุม *</label>
                    <input type="text" class="form-control" id="txt_meeting_name" name="meeting_name" placeholder="กรุณากรอกชื่อการประชุม" value="<?php
                                        if($method == "update"){
                                            echo $meeting->meeting_name;
                                        }
                                    ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">สถานที่ *</label>
                    <input type="text" class="form-control" id="txt_meeting_location" name="meeting_location" placeholder="กรุณากรอกสถานที่ประชุม" value="<?php
                                        if($method == "update"){
                                            echo $meeting->meeting_location;
                                        }
                                    ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ประชุม วันที่-เวลา *</label>
                    <input type="datetime-local" class="form-control" id="txt_meeting_datetime" name="meeting_datetime" placeholder="กรุณากรอกเวลาประชุม" value="<?php
                                        if($method == "update"){
                                            echo $meeting->meeting_datetime;
                                        }
                                    ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">รับรองเอกสารได้ถึง วันที่-เวลา </label>
                    <input type="datetime-local" class="form-control" id="txt_meeting_datetime" name="approve_expire_datetime" placeholder="กรุณากรอกเวลาiy[iv'gvdlki" value="<?php
                                        if($method == "update"){
                                            echo $meeting->approve_expire_datetime;
                                        }
                                    ?>">
                  </div>


                    <div class="form-group row">
                        <label class="label-control" for="upl_files"> ไฟล์เอกสาร *
                        </label>
                            <input name="upl_files" id="upl_files" type="file" class="inputFile form-control" 
                                accept="video/*, image/* ,audio/*, application/pdf, .xlsx, .xls, .csv,  .doc, .docx, .ppt, .pttx, text/plain, .zip, .rar" 
                                multiple required/>
                        
                    </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">ผู้รับรายงานการประชุม</label>
                        <table id="table_persons" class="table table-flush table-striped table-bordered table-hover col-12"> <!-- id="datatable-basic" -->
                            <thead class="thead-light">
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>ตำแหน่ง</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody id="table_body_persons">
                                
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-success" onclick="new_person()">เพิ่มคนรับรายงาน</button>
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