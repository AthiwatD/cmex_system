 <!--Main content-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">

				<div class="card-header" style="background-color:#343a40;">
				  <div class="row">
				    <div class="col-lg-8">
				      <p class="mb-0">
				          <?php  if((!empty($error)) && ($error["code"]!=0)){
				                  foreach($error as $err){  ?>
			                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
			                          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
			                          <span class="alert-text"><strong>Error!</strong> <?php echo $err; ?> </span>
			                      </div>
				          <?php }
				              }
				          ?>
				      </p>
				    </div>
				  </div>
				</div>
                <?php                	
                	// $publish_statuses13=unserialize(PUBLIDH_STATUSES);
                	// print_r($publish_statuses);

                    // if($method == "add"){
                    //     echo form_open_multipart('Person/addPersonDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation'));
                    // }else if($method == "update"){
                    //     echo form_open_multipart('Person/updatePersonDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation')); 
                    // }
                ?> 
				<!-- <form id="form_add_publish" role="form" enctype="multipart/form-data" class="needs-validation" method="POST"  -->
					 <?php 
					 // if($method == "add") echo " action='" . base_url() . "Recruit/addRecruit' ";
					 // else if($method == "update") echo " action='" . base_url() . "Recruit/updateRecruit' ";
					?>  
				<!-- > -->
				<form id="form_add_publish" class="needs-validation" role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">

					<!-- ================================ HD ================================ -->
				    <div class="form-group">
				        <div class="row">
				            <label for="ward_code" class="col-sm-3 col-form-label">หน่วยงาน</label>
				            <div class="col-sm-9">
				                <select id="ward_code" name="ward_code" class="form-control " style="max-width:100%;" required>
				                    <?php
				                    $sql="SELECT ward_code,ward_name1 from tb_location1";
				                    $query=$this->db->query($sql);
				                    foreach ($query ->result() as $row) {
				                        echo "<option value='$row->ward_code'>$row->ward_name1</option>";
				                    }
				                    ?>
				                </select>
				                <p class="wardcodeError"></p>
				            </div>
				        </div>
				    </div>

				    <div class="form-group">
				        <div class="row">
				            <label for="position_id" class="col-sm-3 col-form-label">ตำแหน่งงาน</label>
				            <div class="col-sm-9">
				                <select id="position_id" name="position_id" class="form-control " style="max-width:100%;" required>
				                    <?php
				                    $sql="SELECT * from sev_position";
				                    $query=$this->db->query($sql);
				                    foreach ($query->result_array() as $row) {
				                    	echo "<option value='$row[position_id]'>$row[position_name]</option>";
				                    }
				                    ?>
				                </select>
				                <p class="positionidError"></p>
				            </div>
				        </div>
				    </div>

				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="position_type_id" class="col-sm-3 col-form-label">ประเภทพนักงาน</label>
				            <div class="col-sm-9">
				                <select id="position_type_id" name="position_type_id" class="form-control " style="max-width:100%;" required>
				                    <?php
				                    $sql_pt="SELECT * FROM rc_position_type order by position_type_id DESC";
				                    $query_pt=$this->db->query($sql_pt);
				                    foreach($query_pt->result_array() as $row){
				                    ?>
				                    	<option value="<?=$row['position_type_id']?>"><?=$row['position_type_name']?></option>
				                    <?php } ?>
				               </select>
				               <p class="positiontypeidError"></p>
				           </div>
				       </div>
				    </div>

				    <div class="form-group">
				    	<div class="row">
				    		<label for="start_date" class="col-sm-3 col-form-label">วันเวลาเริ่มต้น</label>
				    		<div class="col-sm-9" style="float:right;">
	                    		<div class="row">
		                    		<input type="date" class="form-control col-6" id="start_date" name="start_date" required> <p class="start_dateError"></p>
		                        	<input type="time" class="form-control col-6" id="start_time" name="start_time" required> <p class="start_timeError"></p>
	                        	</div>
	                    	</div>
                    	</div>
                  	</div>

                  	<div class="form-group">
                  		<div class="row">
				    		<label for="start_date" class="col-sm-3 col-form-label">วันเวลาสิ้นสุด</label>
				    		<div class="col-sm-9" style="float:right;">
				    			<div class="row">
		                    		<input type="date" class="form-control col-6" id="end_date" name="end_date" required> <p class="end_dateError"></p>
		                        	<input type="time" class="form-control col-6" id="end_time" name="end_time" required> <p class="end_timeError"></p>
		                      	</div>
	                    	</div>
                    	</div>
                  	</div>

				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="publish_name" class="col-sm-3 col-form-label">ชื่อประกาศ</label>
				            <div class="col-sm-9">
				                <input type="text" class="form-control" id="publish_name" name="publish_name" placeholder="กรุณากรอกชื่อประกาศ" required>
				                <p class="docunoError"></p>
				            </div>
				        </div>
				    </div>

				    <div class="form-group">
				    	<div class="row">
				    		<label for="publish_status" class="col-sm-3 col-form-label">สถานะประกาศ</label>
				    		<div class="col-sm-9">
				    			<div class="autocomplete width100p" style="width: 100%;">
				    				<input type="text" class="form-control" id="publish_status" name="publish_status" placeholder="กรุณากรอกสถานะประกาศ" required>	
				    			</div>
				    		</div>
				    	</div>
				    </div>

				    <!-- Text area -->
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="publish_remark" class="col-sm-3 col-form-label">หมายเหตุ</label>
				            <div class="col-sm-9">
				              <textarea class="form-control" id="publish_remark" name="publish_remark" placeholder="หมายเหตุ"></textarea>
				              <p class="hdremarkError"></p>
				          </div>
				        </div>
				    </div>

				    <!-- ================================ DT ================================<hr> -->

				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="position_number" class="col-sm-3 col-form-label">เลขที่ตำแหน่ง</label>
				            <div class="col-sm-9">
				                <input type="text" class="form-control" id="position_number" name="position_number" placeholder="กรุณากรอกเลขที่ตำแหน่ง" required>
				                <p class="positionnumberError"></p>
				            </div>
				        </div>
				    </div>

				    

				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="position_rate" class="col-sm-3 col-form-label">อัตราค่าจ้าง / บาท</label>
				            <div class="col-sm-9">
				                <input type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="position_rate" name="position_rate" placeholder="00.00 บาท"  required />
				                <p class="positionrateError"></p>
				            </div>
				        </div>
				    </div>

				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="position_amount" class="col-sm-3 col-form-label">จำนวนรับสมัคร / คน</label>
				            <div class="col-sm-9">
				                <input type="number" value="1" min="1" step="1" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control" id="position_amount" name="position_amount" required/>
				                <p class="positionincomecountError"></p>
				            </div>
				        </div>
				    </div>

				    <hr>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam1_status" class="col-sm-3 col-form-label"></label>
				            <div class="col-sm-9">
				                <div class="col-sm-9 checkbox" >
				                    <input type="checkbox" class="form-check-input" id="exam1_status" name="exam1_status">
				                    <label class="form-check-label" for="exam1_status"><b>สอบข้อเขียน</b></label>
				                    <p class="exam1statusError"></p>
				                </div>
				            </div>
				        </div>
				    </div>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam1_date" class="col-sm-3 col-form-label">วันที่สอบข้อเขียน</label>
				            <div class="col-sm-9">
				              <input type="date" class="form-control" id="exam1_date" name="exam1_date">
				              <p class="exam1dateError"></p>
				          </div>
				      </div>
				    </div>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam1_publish_date" class="col-sm-3 col-form-label">วันที่ประกาศผล ผลสอบข้อเขียน</label>
				            <div class="col-sm-9">
				              <input type="date" class="form-control" id="exam1_publish_date" name="exam1_publish_date">
				              <p class="resultexam1dateError"></p>
				          </div>
				      </div>
				    </div>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam2_status" class="col-sm-3 col-form-label"></label>
				            <div class="col-sm-9">
				                <div class="col-sm-9 checkbox" >
				                    <input type="checkbox" class="form-check-input" id="exam2_status" name="exam2_status">
				                    <label class="form-check-label" for="exam2_status"><b>สอบปฏิบัติ</b></label>
				                    <p class="exam2statusError"></p>
				                </div>
				            </div>
				        </div>
				    </div>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam2_date" class="col-sm-3 col-form-label">วันที่สอบปฏิบัติ</label>
				            <div class="col-sm-9">
				              <input type="date" class="form-control" id="exam2_date" name="exam2_date">
				              <p class="exam2dateError"></p>
				          </div>
				      </div>
				    </div>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam2_publish_date" class="col-sm-3 col-form-label">วันที่ประกาศผล สอบปฏิบัติ</label>
				            <div class="col-sm-9">
				              <input type="date" class="form-control" id="exam2_publish_date" name="exam2_publish_date">
				              <p class="resultexam2dateError"></p>
				          </div>
				      </div>
				    </div>

				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam3_status" class="col-sm-3 col-form-label"></label>
				            <div class="col-sm-9">
				                <div class="col-sm-9 checkbox" >
				                    <input type="checkbox" class="form-check-input" id="exam3_status" name="exam3_status">
				                    <label class="form-check-label" for="exam3_status"><b>สอบสัมภาษณ์</b></label>
				                    <p class="exam3statusError"></p>
				                </div>
				            </div>
				        </div>
				    </div>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam3_date" class="col-sm-3 col-form-label">วันที่สอบสัมภาษณ์</label>
				            <div class="col-sm-9">
				              <input type="date" class="form-control" id="exam3_date" name="exam3_date">
				              <p class="exam3dateError"></p>
				          </div>
				      </div>
				    </div>
				    <div class="form-group">
				        <div class="row mb-3">
				            <label for="exam3_publish_date" class="col-sm-3 col-form-label">วันที่ประกาศผล สอบสัมภาษณ์</label>
				            <div class="col-sm-9">
				              <input type="date" class="form-control" id="exam3_publish_date" name="exam3_publish_date">
				              <p class="resultexam3dateError"></p>
				          </div>
				      </div>
				    </div>

				    <!-- ================================ DT ================================ --><hr>
				    <div class="form-group">
				    <div class="row">
				    	<label class="col-sm-3 col-form-label" for="">รายละเอียดประกาศ</label>
				    	<div class="col-sm-3 publishDt" style="float:left;"><p class="publishDtError" style="font-weight: bold; font-size:16px;"></p></div>
                    	<div class="col-sm-6" style="text-align: right; padding-bottom:5px;">
                    		<button type="button" class="btn btn-success" onclick="add_publish_dt()">เพิ่ม</button>
                    	</div>	
				    </div>
                        <table id="table_publish_dt" class="table table-flush table-striped table-bordered table-hover col-12">
                            <thead class="thead-light">
                                <tr>
                                    <th>ชื่อเอกสาร</th>
                                    <th>วันที่ประกาศ</th>
                                    <th>ไฟล์</th>
                                    <th style="width:100px;">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_publish_dt">
                              <!--   <?php
                                    if($method == "update"){
                                        foreach($meeting_persons as $index => $meeting_person){
                                ?>
                                            <tr>
                                                <td><?php echo $meeting_person->person_name; ?></td>
                                                <td><?php echo $meeting_person->position_name; ?></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                <?php
                                        }
                                    }
                                ?> -->
                            </tbody>
                        </table>
                        
                  </div>

				    <!-- ================================ DT file ================================ --><hr>
				    <!-- <div class="form-group">
				        <div class="row mb-3">
				            <label for="files" class="col-sm-3 col-form-label">เอกสาร</label>
				            <div class="col-sm-9">
				                <input type="file" class="form-control" id="files" name="files" multiple="multiple" style="padding:3px !important"> 
				                <p class="filesError"></p>
				            </div>
				        </div>
				    </div>   -->

                </div>

                <div class="card-footer" style="text-align: right;">
                	<button type="button" class="btn btn-secondary" onclick="goback_index()">ยกเลิก</button>
                	<button type="submit" class="btn btn-primary">บันทึก</button>
                </div>

              </form>
        	</div>
      	</div>
      <!-- right column -->
      <div class="col-md-6"></div>
    </div>
  </div>
</section> <!--/Main content-->