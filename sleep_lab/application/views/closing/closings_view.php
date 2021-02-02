<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">ข้อมูลคนไข้
                        <button type="button" class="btn btn-info" onclick="clear_patient()">สร้างใหม่</button>

                  </h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                  </div>
                    
                  <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Closing/save">
                    <table>
                        <tbody>
                                <input type="hidden" class="form-control" id="txt_booking_id" name="booking_id" value="">
                            
                            <tr>
                                <td><label>วันที่ปิด</label></td>
                                <td><input type="date" class="form-control" id="txt_booking_date" name="booking_date" placeholder="วันนัด"></td>
                            </tr>
                            
                            <tr>
                                <td><label>ห้อง</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input type="text" class="form-control" id="txt_operation_room" name="operation_room" placeholder="ห้อง">
                                    </div>    
                                </td>
                            </tr>
                            <tr>
                                <td><label>หมายเหตุ</label></td>
                                <td>
                                    <input type="text" class="form-control" id="txt_note" name="note" placeholder="หมายเหตุ">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <br>
                        <button type="submit" class="form-control btn btn-success" >บันทึก</button>
                  <!-- /input-group -->
                    </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <h4>คนไข้ยังไม่ได้นัดเวลา</h4>
                <table class="table table-flush table-striped table-bordered table-hover my_table_data">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>ชื่อ-สกุล</th>
                            <th>hn</th>
                            <th>โทร</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($none_bookings as $nbooking){
                        ?>
                                <tr>
                                    <td><a href="#" onclick="getClosingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->patient_id; ?></a></td>
                                    <td><a href="#" onclick="getClosingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->fname . " " . $nbooking->lname; ?></a></td>
                                    <td><a href="#" onclick="getClosingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->hn; ?></a></td>
                                    <td><a href="#" onclick="getClosingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->tel_1; ?></a></td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->