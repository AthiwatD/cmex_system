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
                  <h4 class="card-title">รายงานแยกตามแพทย์
                  </h4>
                </div>
                <div class="card-body">
                  
                  <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Report/reportByDoctor">
                    <table>
                        <tbody>
                            <tr>
                                <td><label>แพทย์</label></td>
                                <td>
                                    <!-- <div class="autocomplete">
                                        <input id="txt_report_by_doctor_doctor" type="text" class="form-control " name="doctor" placeholder="แพทย์">
                                    </div> -->
                                    <select class="form-control" id="sel_doctor" name="doctor">
                                        <option value="%">เลือกแพทย์ทั้งหมด</option> 
                                        <?php
                                            foreach($doctors as $doctor){
                                        ?>
                                                <option value="<?php echo $doctor; ?>"><?php echo $doctor; ?></option>                                        
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                       
                            <tr>
                                <td><label>วันที่เริ่มต้น</label></td>
                                <td><input type="date" class="form-control" id="txt_report_by_doctor_start_date" name="start_date" placeholder="วันที่เริ่มต้น"
                                  value="<?php echo date("Y-m-d"); ?>"
                                ></td>
                            </tr>
                            <tr>
                                <td><label>วันที่สิ้นสุด</label></td>
                                <td><input type="date" class="form-control" id="txt_report_by_doctor_end_date" name="end_date" placeholder="วันที่สิ้นสุด"
                                  value="<?php echo date("Y-m-d", strtotime("+3 month")); ?>"
                                ></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                        <button type="submit" class="form-control btn btn-success" >รายงาน</button>
                  <!-- /input-group -->
                    </form>
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