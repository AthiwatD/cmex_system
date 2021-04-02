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
                        
                  </h4>
                  <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Kpi/kpis">
                    <div class="">
                        <div>
                                <label>วันที่เริ่ม</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" placeholder="วันที่เริ่ม" 
                                    value="<?php echo $start_date; ?>"
                                >
                        </div>
                        <br>
                        <div>
                                <label>วันที่สิ้นสุด</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" placeholder="วันที่สิ้นสุด" 
                                    value="<?php echo $end_date; ?>"
                                >
                        </div>
                        <br>
                        <div>
                                <label>จำนวนวัน</label>
                                <input type="number" class="form-control" id="days" name="days" placeholder="จำนวนวัน" 
                                    value="<?php echo $days; ?>"
                                >
                        </div>
                        <br>
                        <button type="submit" class="form-control btn btn-success">รายงาน</button>
                    </div>
                  </form>
                </div>
                <div class="card-body">
                    <div>
                      <form role="form" class="needs-validation" method="POST" action="<?php echo base_url(); ?>Kpi/kpisExcel">
                        <input type="hidden" name="start_date" value="<?php echo $start_date; ?>">
                        <input type="hidden" name="end_date" value="<?php echo $end_date; ?>">
                        <input type="hidden" name="days" value="<?php echo $days; ?>">
                        <button type="submit" class="form_control btn btn-primary">export excel</button>
                      </form>
                    </div>

                    <table  class="table table-flush table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>หัวข้อ</th>
                                <th>ผลลัพธ์</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>ระยะเวลารอคิวตรวจเฉลี่ย (วัน)</th>
                                <th><?php echo number_format($patient_waiting_time_to_admit->waiting_time_to_admit,2); ?> วัน</th>
                            </tr>
                            
                            <tr>
                                <th>อัตราผู้ป่วยยกเลิก/ผิดนัด/ไม่มา admit</th>
                                <?php
                                    $p_changed = ($patient_changed->patient_count/$patient_all_booking->booking_count) * 100;
                                ?>
                                <th><?php echo number_format($p_changed, 2); ?> %</th>
                            </tr>

                            <tr>
                                <th>จำนวนผู้ป่วยที่เลื่อนตรวจเนื่องจากอุบัติการณ์ทางเครื่องมือ</th>
                                <th><?php echo $changed_because_instrument->booking_count; ?> ครั้ง</th>
                            </tr>

                            <tr>
                                <th>อัตราการกลับเข้ามา PAP titration</th>
                                <?php
                                    $p_titrat = ($patient_pap_titration->booking_count/$patient_all_booking->booking_count) * 100;
                                ?>
                                <th><?php echo number_format($p_titrat,2); ?> %</th>
                            </tr> 

                            <tr>
                                <th valign="top">สถิติผู้ป่วยตามสาเหตุการยกเลิก</th>
                                <th>
                                    <?php 
                                        $count = 0;
                                        foreach($patient_change_reasons as $p){
                                            $count++;
                                            echo $p->booking_count . " " . $p->change_reason . "<br>";
                                        }
                                    ?>
                                </th>
                            </tr>


                            <tr>
                                <td>จำนวนผู้ป่วยที่ถูกส่งใบ request และทำการนัดภายใน (<?php echo $days; ?> วัน)</td>
                                <td><?php echo $patient_admit_within_days->patient_count; ?> ราย</td>
                            </tr>
                            <tr>
                                <td>จำนวนผู้ป่วยยกเลิก admit ทั้งหมด</td>
                                <td><?php echo $patient_changed->patient_count; ?> ราย</td>
                            </tr>
                            <tr>
                                <td>จำนวนผู้ป่วยที่ถูกนัดทั้งหมด(ทั้งตรวจ+ไม่ตรวจ) </td>
                                <td><?php echo $patient_all_booking->booking_count; ?> ราย</td>
                            </tr>
                            <tr>
                                <td>จำนวนการกลับเข้ามา PAP titration</td>
                                <td><?php echo $patient_pap_titration->booking_count; ?> ราย</td>
                            </tr> 
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
  <!-- /.content-wrapper