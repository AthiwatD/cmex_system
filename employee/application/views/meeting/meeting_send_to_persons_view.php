<!-- Main content -->
<?php
    foreach($meeting_persons as $index => $meeting_person){
?>
<p style="page-break-before: always">
    <section class="content approve">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header" style="background-color:#FFFFFF; color:#000000; padding-left:70px; padding-top:50px">
                    <div class="row">
                        <div class="header_logo" >
                            <img src="<?php echo base_url(); ?>../common/assets/images/logo_cmex.png" width="75px">
                        </div>
                        <div class="header_detail" style="padding-left:50px">
                            <h2>ศูนย์ความเป็นเลิศทางการแพทย์ <br>คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</h2>
                            <h4>โทร 053-934700</h4>
                        </div>
                    </div>
                </div>
                
                    <div class="card-body" style="background-color:#FFFFFF; color:#000000; padding-left:70px; padding-top:50px">
                    <div class="form-group">
                        <h4><?php echo $head_title . " " . $meeting->board_name; ?></h4>
                    </div>
                    <div class="form-group">
                        <h4>เรื่อง <?php echo $meeting->meeting_name; ?></h4>
                    </div>
                    <div class="form-group">
                        <h4>เรียน <?php echo $meeting_person->person_name . " " . $meeting_person->position_name; ?></h4>
                    </div>
                        
                  <div class="form-group">
                    <h4>สถานที่ <?php echo $meeting->meeting_location;?></h4>
                  </div>

                  <div class="form-group">
                    <?php
                        $date = explode(" ", $meeting->meeting_datetime);
                        $date = convert_to_thai_date_full($date[0]);
                    ?>
                    <h4>ประชุม วันที่-เวลา <?php echo $date . " เวลา " . date("H:i:s", strtotime($meeting->meeting_datetime)); ?></h4>
                  </div>
                    <br><br>
                  <div class="form-group">
                    <?php
                        $date = explode(" ", $meeting->approve_expire_datetime);
                        $date = convert_to_thai_date_full($date[0]);
                        
                    ?>

                    <p style="font-size: 18pt;">
                        เพื่อโปรดรับรองรายงานการประชุม ฯ ดังเอกสารแนบมาพร้อม หรือ QR Code <br>
                        ภายในวันที่ <?php echo $date . " เวลา " . date("H:i:s", strtotime($meeting->approve_expire_datetime)); ?>
                    </p>
                  </div>


                    <div class="form-group">
                        <p style="font-size: 18pt;">
                            Link<br>
                            <?php echo $meeting_persons_link[$index]; ?>
                        
                    </div>
                    <div class="form-group">
                        <p style="font-size: 18pt;">
                            QR Code<br>
                            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $meeting_persons_link[$index]; ?>&choe=UTF-8" alt="<?php echo $meeting_person->person_name; ?>" />
                        </p>
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
</p>
<?php
    }
?>