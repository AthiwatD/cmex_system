<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">ข้อมูลคนไข้</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <!-- <div id="external-events">
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
                  </div> -->

                    <!-- <div class="input-group">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" id="txt_fname" name="fname" placeholder="ชื่อ">
                    </div>
                    <div class="input-group">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" id="txt_lname" name="lname" placeholder="นามสกุล">
                    </div>
                    <div class="input-group">
                        <label>HN</label>
                        <input type="text" class="form-control" id="txt_hn" name="hn" placeholder="HN">
                    </div>
                    <div class="input-group">
                        <label>วันเกิด</label>
                        <input type="date" class="form-control" id="txt_birth_date" name="birth_date" placeholder="วันเกิด">
                    </div>
                    <div class="input-group">
                        <label>โทรศัพท์ 1</label>
                        <input type="text" class="form-control" id="txt_tel_1" name="tel_1" placeholder="โทรศัพท์ 1">
                    </div>
                    <div class="input-group">
                        <label>โทรศัพท์ 2</label>
                        <input type="text" class="form-control" id="txt_tel_2" name="tel_2" placeholder="โทรศัพท์ 2">
                    </div> -->

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
                        </tbody>
                    </table>
                    <br>
                    <button type="button" class="form-control btn btn-success">บันทึก</button>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">ข้อมูลการนัด</h3>
                </div>
                <div class="card-body">
                <table>
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
                                <td><input type="text" class="form-control" id="txt_doctor" name="doctor" placeholder="แพทย์"></td>
                            </tr>
                            <tr>
                                <td><label>ห้อง</label></td>
                                <td><input type="text" class="form-control" id="txt_operation_room" name="operation_room" placeholder="ห้อง"></td>
                            </tr>
                            <tr>
                                <td><label>ส่งจาก</label></td>
                                <td><input type="text" class="form-control" id="txt_appointment_from" name="appointment_from" placeholder="ส่งจาก"></td>
                            </tr>
                            <tr>
                                <td><label>รู้จาก</label></td>
                                <td><input type="text" class="form-control" id="txt_tel_1" name="tel_1" placeholder="โทรศัพท์ 1"></td>
                            </tr>
                            <tr>
                                <td><label>โทร 2</label></td>
                                <td><input type="text" class="form-control" id="txt_tel_2" name="tel_2" placeholder="โทรศัพท์ 2"></td>
                            </tr>
                        </tbody>
                    </table>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->