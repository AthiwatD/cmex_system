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
                        <button type="button" class="btn btn-info" onclick="clear_patient()">ล้าง</button>

                  </h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                  </div>
                    
                  <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Moving/updateMovingDo">
                    <table>
                        <tbody>
                                    <input type="hidden" class="form-control" id="txt_patient_id" name="patient_id" value="">
                            <tr>
                                <td><label>ชื่อ</label></td>
                                <td><input type="text" class="form-control" id="txt_fname" name="fname" placeholder="ชื่อ" disabled></td>
                            </tr>
                            <tr>
                                <td><label>นามสกุล</label></td>
                                <td><input type="text" class="form-control" id="txt_lname" name="lname" placeholder="นามสกุล" disabled></td>
                            </tr>
                            <tr>
                                <td><label>HN</label></td>
                                <td><input type="text" class="form-control" id="txt_hn" name="hn" placeholder="HN" disabled></td>
                            </tr>
                            <tr>
                                <td><label>วันเกิด</label></td>
                                <td><input type="date" class="form-control" id="txt_birth_date" name="birth_date" placeholder="วันเกิด" disabled></td>
                            </tr>
                            <tr>
                                <td><label>โทร 1</label></td>
                                <td><input type="text" class="form-control" id="txt_tel_1" name="tel_1" placeholder="โทรศัพท์ 1" disabled></td>
                            </tr>
                            <tr>
                                <td><label>โทร 2</label></td>
                                <td><input type="text" class="form-control" id="txt_tel_2" name="tel_2" placeholder="โทรศัพท์ 2" disabled></td>
                            </tr>

                                    <input type="hidden" class="form-control" id="txt_booking_id" name="booking_id" value="">
                                    <input type="hidden" class="form-control" id="txt_booking_date_old" name="booking_date_old" value="">
                                    <input type="hidden" class="form-control" id="txt_receiving_date" name="receiving_date" placeholder="วันรับ">
                                    <input type="hidden" class="form-control" id="txt_doctor" name="doctor" placeholder="แพทย์">
                                    <input type="hidden" class="form-control" id="txt_test_type" name="test_type" placeholder="Test Type">
                                    <input type="hidden" class="form-control" id="txt_appointment_from" name="appointment_from" placeholder="ส่งจาก">
                                    <input type="hidden" class="form-control" id="txt_channel" name="channel" placeholder="รู้จักผ่านทาง">
                                    <input type="hidden" class="form-control" id="txt_two_staff" name="two_staff" value="0">
                                    <input type="hidden" class="form-control" id="txt_change_type" name="changed" value="1" placeholder="ย้าย/ยกเลิก/เลื่อนนัด">
                        
                            <tr>
                                <td><label>วันนัดเดิม</label></td>
                                <td><input type="date" class="form-control" id="txt_booking_date" name="booking_date" placeholder="วันนัดเดิม" disabled></td>
                            </tr>
                            <!-- <tr>
                                <td><label>ดำเนินการ </label></td>
                                <td>
                                    <select class="form-control" id="sel_change_type" name="changed" dusabled required>
                                        <option value="1" selected>ย้าย / ยกเลิก / เลื่อนนัด</option>
                                        <option value="2">ยกเลิก</option>
                                    </select>
                                </td>
                            </tr> -->
                            <tr>
                                <td><label>เหตุผล *</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input type="text" class="form-control" id="txt_change_reason" name="change_reason" placeholder="เหตุผล" required>
                                    </div>        
                                </td>
                            </tr>
                            <tr>
                                <td><label>วันนัดใหม่</label></td>
                                <td><input type="date" class="form-control" id="txt_booking_date_new" name="booking_date_new" placeholder="วันนัดใหม่" ></td>
                            </tr>

                            <tr>
                                <td><label>ห้อง</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input type="text" class="form-control" id="txt_operation_room_new" name="operation_room_new" placeholder="ห้อง">
                                    </div>    
                                </td>
                            </tr>
                            <tr>
                                <td><label>หมายเหตุ</label></td>
                                <td>
                                    <input type="text" class="form-control" id="txt_note_new" name="note_new" placeholder="หมายเหตุ">
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
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->