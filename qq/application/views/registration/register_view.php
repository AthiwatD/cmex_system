    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
			<!-- general form elements -->
            <div class="col-12 card card-primary">
              <div class="card-header" style="margin:-8px;">
                <h3 class="card-title">ลงทะเบียน</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body row">
									<div class="col-6">
											<div class="form-group">
												<label for="input_register_hn">รหัส HN</label>
												<div class="form-inline col-12" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px" >
													<input type="text" name="register_hn" class="form-control col-10" 
															id="input_register_hn" placeholder="HN" maxlength="10" required>
													<button type="button" class="btn btn-info form-control col-2" 
															style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 00px" 
															id="button_check_hn" onclick="get_data_by_hn()"><i class="fas fa-search"></i></button>
												</div>
											</div>

											<!--
											<div class="form-group">
												<label for="select_register_type">หมวด</label>
												<select name="register_type" id="select_register_type" class="form-control col-12" required>  
													<option value="A">A (นัดไม่มีหัตถการ)</option>
													<option value="B">B (นัดมีหัตถการ)</option>
													<option value="C">C (Walk in, อื่นๆ)</option>
													<option value="D">D </option>
													<option value="E">E (Refill ยา)</option>
												</select> 
											</div>
												-->

											<div class="form-group">
												<label for="select_register_type">มาเพื่อ</label>
												<input type="hidden" name="path_name" value="">
												<select name="path_id" id="select_register_path" class="form-control col-12" required>
													<?php
														foreach($paths as $path){
													?>
															<option value="<?php echo $path->path_id; ?>"><?php echo $path->path_name; ?></option>
													<?php
														}
													?>
												</select>
											</div>

											<div class="form-group">
												<label for="input_staff">แพทย์</label>
													<div class="autocomplete">
														<input type="text" class="form-control" id="input_staff" name="staff" placeholder="แพทย์">
													</div>
											</div>

											<div class="form-group">
												<label for="input_claim">สิทธิการรักษา</label>
													<div class="autocomplete">
														<input type="text" class="form-control" id="input_claim" name="claim" placeholder="สิทธิการรักษา">
													</div>
											</div>
										
											<div class="form-group form-inline">
												<input type="checkbox" class="form-control" id="input_new_patient" name="new_patient" value="1" style="width: 35px;"> 
												<label for="input_claim"> คนไข้ลงทะเบียนใหม่</label>
											</div>

											<div class="form-group form-inline">
												<input type="checkbox" class="form-control" id="input_not_print" name="not_print" value="1" style="width: 35px;"> 
												<label for="input_claim"> ไม่ต้องพิมพ์บัตรคิว</label>
											</div>

										</div>		<!-- end div col-6 -->				
										
										<div class="col-6" style="padding:10px;">
											<div class="form-group">
													<label>
														ข้อมูลผู้รับบริการ					
													</label>	
													<div class="col-12">
															<input type="hidden" id="input_patient_name" name="patient_name" value="">
															<label id="lbl_patient_name" >																	
															</label><br>
															<label id="lbl_sex">																			
															</label><br>
															<label id="lbl_birth_date">																			
															</label><br>
															<label id="lbl_age">																			
															</label><br>
															<input type="hidden" id="input_tel_old" name="tel_old" value="">
															<label id="lbl_tel_old">																			
															</label><br>
															<label id="lbl_allergic">																			
															</label>
													</div>
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
															<!-- <h3 class="display-4 text-light">รหัส HN</h3> -->
															<div class="form-inline col-12" style="margin: 0px -5px 0px 0px; padding: 0px 10px 0px 0px" >
																	
															</div>
													</div>		
											</div>
											<div class="form-group">
												<label for="input_staff">เอกสารแนบ</label>

												
														<?php
															$count = 0;
															foreach($documents as $document){
														?>
																<div class="custom-control custom-switch">
																	<input type="checkbox" class="custom-control-input" 
																	 			id="input_document_<?php echo $count; ?>" name="document_name_show" value="<?php echo $document->document_name_show; ?>"
																 	>
																	<label class="custom-control-label" for="input_document_<?php echo $count; ?>"><?php echo $document->document_name; ?></label>
																</div>
														<?php
																$count++;
															}
														?>
											</div>
															
										</div>
										<div class="card-footer">
											<button type="button" class="btn btn-primary" onclick="register()">ลงทะเบียน</button>
										</div>
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->

				<div class="row">
			<!-- general form elements -->
            <div class="col-12 card card-primary">
              <div class="card-header" style="margin:-8px;">
                <h3 class="card-title">รายการลงทะเบียน 10 ลำดับล่าสุด</h3>
								
								
									<span class="float-sm-right">
										<button type="button" class="btn btn-success btn-sm" onclick="listRegisteredLimit()"><i class="fa fa-sync"></i></button>				

										<a href="<?php echo base_url() . "Registration/registered/" . $site_id; ?>" target="_blank">
											<button class="btn btn-warning btn-sm" type="button">ดูรายการทั้งหมด</button>
										</a>
										&nbsp;
										
									</span>
							
								
              </div>
              <!-- /.card-header -->
              <div class="card-body row">
								<div class="table-responsive" id="table_wrapper">
                    <!-- <a href="report_register.php?site_id=<?php echo $site_id; ?>&site_name=<?php echo $site_name; ?>">
                        <button class="btn btn-info">ดูรายการ</button>
                    </a><br>    -->    
                    <table id="table_registered" class="table table-striped table-bordered table-hover dataTable dtr-inline">
                        <thead>
                            <tr>
                                <th>เวลา</th>
                                <th>คิว</th>
                                <th>HN</th>
																<th>ชื่อ</th>
																<th>มาเพื่อ</th>
                                <th>ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_registered">
                            
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
