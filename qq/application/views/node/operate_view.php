    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
			<!-- general form elements -->
            <div class="col-12 card card-primary">
              	<div class="card-header" style="margin:-8px;">
                	<h3 class="card-title">ส่งคิว</h3>
              	</div>
              	<!-- /.card-header -->
              	<!-- form start -->
                <div class="card-body row col-12">
					<div class="form-group col-6">
						<label for="input_register_hn">คิว</label>
						<div class="form-inline col-12" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px" >
							<input type="text" name="register" class="form-control col-12" 
									id="input_register" placeholder="หมายเลขคิว" maxlength="10" 
									readonly="readonly" style="color: #000000; background-color:cornsilk"
									required disabled>
							
						</div>
						<!-- hidden data -->
						<input type="hidden" name="register_id" id="input_register_id">
						<input type="hidden" name="register_type" id="input_register_type">
						<input type="hidden" name="register_number" id="input_register_number">
						<input type="hidden" name="register_hn" id="input_register_hn">
						<input type="hidden" name="waiting_id" id="input_waiting_id">
					</div>
					<div class="form-group col-6">
						<label for="input_register_hn">ส่งไป</label>
						<div class="form-inline col-12" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px" >

							<select name="select_receive_by_department_id" id="select_receive_by_department_id" class="form-control col-12" required>
								<option value="0" selected>ส่งไปตามลำดับ</option>
							</select>
							
						</div>
					</div>
				</div>
                <!-- /.card-body -->
					
				<div class="card-footer">
					<div class="form-group">
						<button type="button" class="btn btn-success form-control" onclick="send_register()">ส่งคิว</button>
					</div>
				</div>
                <!-- /.card-footer -->

                
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->

			<div class="row" style="padding-right: 5px; background-color: #f4f6f9;">

				<!--
				/////////////////////////////////////////////////////////
				//
				//	รอเรียก
				//
				/////////////////////////////////////////////////////////
				-->
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card card-primary">
					<div class="card-header" style="margin:-8px;">
						<h3 class="card-title">รอเรียก</h3>
										
							<span class="float-right">
								<button type="button" class="btn btn-success btn-sm" onclick="getWaitingHn()"><i class="fa fa-sync"></i></button>				

								<a href="<?php echo base_url() . "Registration/registered/" . $site_id; ?>" target="_blank">
									<button class="btn btn-warning btn-sm" type="button"><i class="fa fa-sync"></i></button>
								</a>
								&nbsp;
							</span>
										
					</div>
					<!-- /.card-header -->
					<div class="card-body" style="padding:10px 0px 10px 0px;" >
						<div class="table-responsive" id="table_wrapper"  style="padding:10px 0px 10px 0px;" > 
							<table class="table table-striped table-bordered table-hover dtr-inline">
								<thead>
									<tr>
										<th>จาก</th>
										<th>เวลา</th>
										<th>เรียก</th>
										<th>HN</th>
									</tr>
								</thead>
								<tbody id="tbody_received">
									
								</tbody>
							</table>
						</div>
					</div> <!-- end card body -->
				</div> <!-- end card -->

				<!--
				/////////////////////////////////////////////////////////
				//
				//	เรียกแล้ว
				//
				/////////////////////////////////////////////////////////
				-->
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card card-primary" >
					<div class="card-header" style="margin:-8px;">
						<h3 class="card-title">เรียกแล้ว</h3>
						<span class="float-right">
							<button type="button" class="btn btn-success btn-sm" onclick="listRegisteredLimit()"><i class="fa fa-sync"></i></button>				
							<a href="<?php echo base_url() . "Registration/registered/" . $site_id; ?>" target="_blank">
								<button class="btn btn-warning btn-sm" type="button"><i class="fa fa-sync"></i></button>
							</a>
							&nbsp;
						</span>
					</div>
					<!-- /.card-header -->
					<div class="card-body" style="padding:10px 0px 10px 0px;">
						<div class="table-responsive" id="table_wrapper" style="padding:10px 0px 10px 0px;">
							<table class="table table-striped table-bordered table-hover dtr-inline">
								<thead>
									<tr>
										<th>ยกเลิก</th>
										<th>เรียกซ้ำ</th>
										<th>ส่ง</th>
										<th>HN</th>
									</tr>
								</thead>
								<tbody id="tbody_called">
									
								</tbody>
							</table>
						</div>
					</div> <!-- end card body -->
				</div> <!-- end card -->


				<!--
				/////////////////////////////////////////////////////////
				//
				//	ส่งแล้ว
				//
				/////////////////////////////////////////////////////////
				-->
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 card card-primary">
					<div class="card-header" style="margin:-8px;">
						<h3 class="card-title">ส่งแล้ว</h3>
						<span class="float-right">
							<button type="button" class="btn btn-success btn-sm" onclick="listRegisteredLimit()"><i class="fa fa-sync"></i></button>				

							<a href="<?php echo base_url() . "Registration/registered/" . $site_id; ?>" target="_blank">
								<button class="btn btn-warning btn-sm" type="button"><i class="fa fa-sync"></i></button>
							</a>
							&nbsp;
						</span>
					</div>
					<!-- /.card-header -->
					<div class="card-body row" style="padding:10px 0px 10px 0px;">
						<div class="table-responsive" id="table_wrapper" style="padding:10px 5px 10px 5px;">
							<table class="table table-striped table-bordered table-hover dtr-inline">
								<thead>
									<tr>
										<th>ยกเลิก</th>
										<th>หมายเลข</th>
										<th>HN</th>
										<th>ส่งไปที่</th>
									</tr>
								</thead>
								<tbody id="tbody_send">
									
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

	<div id="div_popup_information" style="display:none;">
			<canvas id="canvas" width="512" height="480"></canvas>
	</div>

