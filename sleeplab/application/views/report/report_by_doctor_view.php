<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                    <div id="external-events">
                    </div>

                  <h4 class="card-title">
                        แพทย์: <?php echo $doctor; ?><br><br>
                        วันที่: <?php echo convert_to_thai_date_full($start_date); ?> 
                        ถึง <?php echo convert_to_thai_date_full($end_date); ?>
                  </h4>
                </div>
                <div class="card-body">
                    
                    <div id="calendar"></div>

                    <table class="table table-flush table-striped table-bordered table-hover my_table_data">
                        <thead>
                            <tr>
                                <th>วันที่</th>
                                <th>ชื่อ-สกุล คนไข้</th>
                                <th>hn</th>
                                <th>อายุ (ปี)</th>
                                <th>โทร</th>
                                <th>แพทย์</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($bookings as $booking){
                            ?>
                                    <tr>
                                        <td><?php echo convert_to_thai_date_full($booking->booking_date); ?></td>
                                        <td><?php echo $booking->fname . " " . $booking->lname; ?></td>
                                        <td><?php echo $booking->hn; ?></td>
                                        <td><?php echo !empty($booking->birth_date) && ($booking->birth_date != 0000-00-00) ? cal_age_year($booking->birth_date) : "ไม่ระบุ" ; ?></td>
                                        <td><?php echo $booking->tel_1; ?> <?php if(!empty($booking->tel_2)) echo ", " . $booking->tel_2; ?></td>
                                        <td><?php echo $booking->doctor; ?></td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->