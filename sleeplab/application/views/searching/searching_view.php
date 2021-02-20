<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">รายการค้นหาคนไข้
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-flush table-striped table-bordered table-hover my_table_data">
                            <thead>
                                <tr>
                                    <!-- <th>id</th> -->
                                    <th>ชื่อ-สกุล</th>
                                    <th>hn</th>
                                    <th>โทร</th>
                                    <th>วันนัด</th>
                                    <th>ห้อง</th>
                                    <th>นัดหมาย</th>
                                    <th>เลื่อนนัด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($bookings as $booking){
                                ?>
                                        <tr>
                                            <!-- <td><a href="#" onclick="getBookingService(<?php echo $booking->booking_id; ?>)"><?php echo $booking->patient_id; ?></a></td> -->
                                            <td><a href="#" ><?php echo $booking->fname . " " . $booking->lname; ?></a></td>
                                            <td><a href="#" ><?php echo $booking->hn; ?></a></td>
                                            <td><a href="#" ><?php echo $booking->tel_1; ?></a></td>
                                            <td><a href="#" ><?php echo $booking->booking_date; ?></a></td>
                                            <td><a href="#" ><?php echo $booking->operation_room; ?></a></td>
                                            <td><a href="#" onclick="goBookingService(<?php echo $booking->booking_id; ?>)"><button class="btn btn-primary form-control" type="button"><i class="nav-icon fas fa-calendar"></i></button></a></td>
                                            <td><a href="#" onclick="goMovingService(<?php echo $booking->booking_id; ?>)"><button class="btn btn-warning form-control" type="button"><i class="nav-icon fas fa-share-square"></i></button></a></td>

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
        <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <iframe id="iframe_search" class="toggle_div" width="100%" height="1080px">

            </iframe>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->