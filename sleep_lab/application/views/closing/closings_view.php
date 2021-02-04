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
                  <h4 class="card-title">วันหยุด
                        <button type="button" class="btn btn-info" onclick="clear_closing()">สร้างใหม่</button>

                  </h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                  </div>
                    
                  <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Closing/addClosingDo">
                    <table>
                        <tbody>
                                <input type="hidden" class="form-control" id="txt_closing_id" name="closing_id" value="">
                            
                            <tr>
                                <td><label>วันที่ปิด *</label></td>
                                <td><input type="date" class="form-control" id="txt_closing_date" name="closing_date" placeholder="วันนัด" required></td>
                            </tr>
                            
                            <tr>
                                <td><label>ห้อง *</label></td>
                                <td>
                                    <div class="autocomplete">
                                        <input type="text" class="form-control" id="txt_operation_room" name="operation_room" placeholder="ห้อง" required>
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
                    <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Closing/deleteClosingDo">
                        <input type="hidden" class="form-control" id="txt_closing_id_2" name="closing_id" value="">
                        <button type="submit" class="form-control btn btn-danger" onclick='return confirm("คุณต้องการลบ ใช่ หรือ ไม่")'>ลบ</button>
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