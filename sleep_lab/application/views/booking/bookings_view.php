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
                      <!--  
                    <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">Work on UI design</div>
                    <div class="external-event bg-danger">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label>
                    </div>
-->
                  </div>
                    
                  <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Booking/save">
                    <table>
                        <tbody>
                                    <input type="hidden" class="form-control" id="txt_patient_id" name="patient_id" value="">
                            <tr>
                                <td><label>ชื่อ</label></td>
                                <td><input type="text" class="form-control" id="txt_fname" name="fname" placeholder="ชื่อ"></td>
                            </tr>
                            <tr>
                                <td><label>นามสกุล</label></td>
                                <td><input type="text" class="form-control" id="txt_lname" name="lname" placeholder="นามสกุล"></td>
                            </tr>
                            <tr>
                                <td><label>HN</label></td>
                                <td><input type="text" class="form-control" id="txt_hn" name="hn" placeholder="HN"></td>
                            </tr>
                            <tr>
                                <td><label>วันเกิด</label></td>
                                <td><input type="date" class="form-control" id="txt_birth_date" name="birth_date" placeholder="วันเกิด"></td>
                            </tr>
                            <tr>
                                <td><label>โทร 1</label></td>
                                <td><input type="text" class="form-control" id="txt_tel_1" name="tel_1" placeholder="โทรศัพท์ 1"></td>
                            </tr>
                            <tr>
                                <td><label>โทร 2</label></td>
                                <td><input type="text" class="form-control" id="txt_tel_2" name="tel_2" placeholder="โทรศัพท์ 2"></td>
                            </tr>
                        <!--
                        </tbody>
                    </table>
                    <br>
                    <button type="button" class="form-control btn btn-success" onclick="save()">บันทึก</button>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">ข้อมูลการนัด</h3>
                </div>
                <div class="card-body">
                <table>
-->
                        <tbody>
                                    <input type="hidden" class="form-control" id="txt_booking_id" name="booking_id" value="">
                            <tr>
                                <td><label>วันรับ</label></td>
                                <td><input type="date" class="form-control" id="txt_receiving_date" name="receiving_date" placeholder="วันรับ"></td>
                            </tr>
                            <tr>
                                <td><label>วันนัด</label></td>
                                <td><input type="date" class="form-control" id="txt_booking_date" name="booking_date" placeholder="วันนัด"></td>
                            </tr>
                            <tr>
                                <td><label>แพทย์</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input id="txt_doctor" type="text" class="form-control " name="doctor" placeholder="แพทย์">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Test</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input id="txt_test_type" type="text" class="form-control " name="test_type" placeholder="Test Type">
                                    </div>
                                </td>
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
                                <td><label>ส่งจาก</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input type="text" class="form-control" id="txt_appointment_from" name="appointment_from" placeholder="ส่งจาก">
                                    </div>  
                                </td>
                            </tr>
                            <tr>
                                <td><label>รู้จาก</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input type="text" class="form-control" id="txt_channel" name="channel" placeholder="รู้จักผ่านทาง">
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
                                    <td><a href="#" onclick="getBookingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->patient_id; ?></a></td>
                                    <td><a href="#" onclick="getBookingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->fname . " " . $nbooking->lname; ?></a></td>
                                    <td><a href="#" onclick="getBookingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->hn; ?></a></td>
                                    <td><a href="#" onclick="getBookingService(<?php echo $nbooking->booking_id; ?>)"><?php echo $nbooking->tel_1; ?></a></td>
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