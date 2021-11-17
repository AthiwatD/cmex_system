    <!-- Main content -->
    <div class="content">
      <div class="container">
		<div class="row">
			<!-- general form elements -->
            <div class="col-12 card card-primary">
              <div class="card-header">
                <h3 class="card-title">รายการลงทะเบียน</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body row">
				  <div class="table-responsive" id="table_wrapper">
                    
                    <table id="table_registered" class="table table-striped table-bordered table-hover dataTable dtr-inline">
                        <thead>
                            <tr>
                                <th>เวลา</th>
                                <th>คิว</th>
                                <th>HN</th>
								<th>ชื่อ</th>
								<th>มาเพื่อ</th>
								<th>แพทย์</th>
								<th>สิทธิ์</th>
								<th>โทรศัพท์</th>
                                <th>ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_registered">
                            <?php
								foreach($registered as $reg){
									$date_time = explode(" ", $reg->register_datetime);
									$time = $date_time[1];
							?>
									<tr>
										<td><?php echo $time; ?></td>
										<td><?php echo $reg->register_type . " " . $reg->register_number; ?></td>
										<td><?php echo $reg->register_hn; ?></td>
										<td><?php echo $reg->register_name; ?></td>
										<td><?php echo $reg->path_name; ?></td>
										<td><?php echo $reg->staff; ?></td>
										<td><?php echo $reg->claim_name_show; ?></td>
										<td><?php echo $reg->telephone; ?></td>
										<td>
											<button class="btn-danger" onclick='delete_register("<?php echo $reg->register_id; ?>")'>ลบ</button>
											<button class=" btn-warning" onclick='print_queue_json(<?php echo json_encode($reg); ?>)'>พิมพ์</button>
										</td>

									</tr>
							<?php
								}
							?>
                        </tbody>
                    </table>
                </div>
							</div> <!-- end card body -->
						</div> <!-- end card -->
				</div> <!-- end row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <div style="display:none;">
		<canvas id="canvas" width="512" height="480"></canvas>
  </div>
