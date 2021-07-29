<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                  <div class="row">
                    <div class="col-lg-8">
                      <p class="mb-0">
                          <?php  
                              if((!empty($error)) && ($error["code"]!=0)){
                                  foreach($error as $err){
                          ?>
                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                          <span class="alert-text"><strong>Error!</strong> 
                                              <?php echo $err; ?> </span>
                                      </div>
                          <?php
                                  }
                              }
                          ?>
                      </p>
                    </div>
                  </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?php 
                    // if($method == "add"){
                    //     echo form_open_multipart('Checkup/addCheckupDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation'));
                    // }else if($method == "update"){
                    //     echo form_open_multipart('Checkup/updateCheckupDo', array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left needs-validation')); 
                    // }
                ?> 

              <form role="form" enctype="multipart/form-data" class="needs-validation" method="POST"
                <?php
                    if($method == "add"){
                        echo " action='" . base_url() . "Checkup/addCheckupDo' ";
                    }else if($method == "update"){
                        echo " action='" . base_url() . "Checkup/updateCheckupDo' ";
                    }
                ?>
                >
                    <?php
                        if($method == "update"){
                    ?>
                            <input type="hidden" name="checkup_id" value="<?php echo $checkup->checkup_id; ?>">
                    <?php
                        }
                    ?>

                <div class="card-body">
                    
					<div class="form-group">
						<label for="txt_txn">รหัส TXN</label>
						<input type="text" class="form-control" id="txt_txn" name="txn" placeholder="รหัส TXN" value="<?php
											if($method == "update"){
												echo $checkup->txn;
											}
										?>">
                  	</div>

					

					<div class="form-group">
						<label for="txt_hn">รหัส HN *</label>
						<input type="text" class="form-control" id="txt_hn" name="hn" placeholder="กรุณากรอกรหัส HN" value="<?php
											if($method == "update"){
												echo $checkup->hn;
											}
										?>" required>
						<button type="button" id="btn_get_data_from_hn" class="btn btn-primary form-control" onclick="get_data_from_hn()">ดึงข้อมูล</button>
					</div>

					<div class="form-group">
						<label for="txt_pid">รหัสบัตรประชาชน</label>
						<input type="text" class="form-control" id="txt_pid" name="pid" placeholder="รหัสบัตรประชาชน" value="<?php
											if($method == "update"){
												echo $checkup->pid;
											}
										?>">
                  	</div>

					<div class="form-group">
						<label for="txt_title_name">คำนำหน้า</label>
						<input type="text" class="form-control" id="txt_title_name" name="title_name" placeholder="คำนำหน้า" value="<?php
											if($method == "update"){
												echo $checkup->title_name;
											}
										?>" >
                  	</div>

					<div class="form-group">
						<label for="txt_first_name">ชื่อ *</label>
						<input type="text" class="form-control" id="txt_first_name" name="first_name" placeholder="ชื่อ" value="<?php
											if($method == "update"){
												echo $checkup->first_name;
											}
										?>" required>
                  	</div>

					<div class="form-group">
						<label for="txt_last_name">นามสกุล *</label>
						<input type="text" class="form-control" id="txt_last_name" name="last_name" placeholder="นามสกุล" value="<?php
											if($method == "update"){
												echo $checkup->last_name;
											}
										?>" required>
                  	</div>

					<div class="form-group">
						<label for="txt_sex">เพศ *</label>
						<input type="text" class="form-control" id="txt_sex" name="sex" placeholder="เพศ" value="<?php
											if($method == "update"){
												// if($checkup->sex == "ช"){
												// 	echo "ชาย";
												// }
												// else if($checkup->sex == "ญ"){
												// 	echo "หญิง";
												// }
												echo $checkup->sex;
											}
										?>" required>
                  	</div>

					<div class="form-group">
						<label for="date_birthdate">วันเกิด *</label>
						<input type="date" class="form-control" id="date_birthdate" name="birthdate" placeholder="วันเกิด" value="<?php
											if($method == "update"){
												echo $checkup->birthdate;
											}
										?>" required>
                  	</div>
					
					  <div class="form-group">
						<label for="txt_age">อายุ(ปี) *</label>
						<input type="text" class="form-control" id="txt_age" name="age" placeholder="อายุ" value="<?php
											if($method == "update"){
												echo $checkup->age;
											}
										?>" required>
                  	</div>

					<div class="form-group">
						<label for="txt_tel">โทรศัพท์ *</label>
						<input type="text" class="form-control" id="txt_tel" name="tel" placeholder="โทรศัพท์" value="<?php
											if($method == "update"){
												echo $checkup->tel;
											}
										?>" required>
                  	</div>

					<div class="form-group">
						<label for="txt_address">ที่อยู่</label>
						<input type="text" class="form-control" id="txt_address" name="address" placeholder="ที่อยู่" value="<?php
											if($method == "update"){
												echo $checkup->address;
											}
										?>">
                  	</div>

					<div class="form-group">
						<label for="txt_zip_code">รหัสไปรษณีย์</label>
						<input type="text" class="form-control" id="txt_zip_code" name="zip_code" placeholder="รหัสไปรษณีย์" value="<?php
											if($method == "update"){
												echo $checkup->zip_code;
											}
										?>">
                  	</div>

					<div class="form-group">
						<label for="date_birthdate">แพ้ยา</label>
						<input type="text" class="form-control" id="txt_allergic" name="allergic" placeholder="แพ้ยา" value="<?php
											if($method == "update"){
												echo $checkup->allergic;
											}
										?>">
                  	</div>

				  	


				  <div class="form-group">
                        <label for="hdn_package_name">แพคเกจตรวจสุขภาพ *</label>
                        <!-- <input type="hidden" id="hdn_package_id" name="package_id" value="<?php
                                            if (($method == "update") && (!empty($checkup->package_id)) ){
                                                    echo $checkup->package_id;
                                            }
                                        ?>"> -->
                        <select class="form-control" id="select_package_id" name="package_id" required>
                            <option disabled selected>โปรดเลือกแพคเกจ</option>
                            <?php
                                foreach($packages as $index => $package){
                            ?>
                                   <option value="<?php echo $package->package_id; ?>"
                                        <?php
                                            if (!empty($checkup->package_id)) {
                                                if($checkup->package_id == $package->package_id){
                                                    echo " selected ";
                                                }
                                            }
                                        ?>
                                        ><?php 
											echo $package->package_name; 
                                        ?></option>
                            <?php
                                }
                            ?>
                            <!-- <option value="0">อื่น ๆ</option> -->
                        </select>
                    </div>

					<div class="form-group">
                        <label for="select_location_id">สถานที่ตรวจ *</label>
                        <select class="form-control" id="select_location_id" name="location_id" required>
                            <option disabled selected>โปรดเลือกสถานที่ตรวจ</option>
                            <?php
                                foreach($locations as $index => $location){
                            ?>
                                   <option value="<?php echo $location->location_id; ?>"
                                        <?php
                                            if (!empty($checkup->location_id)) {
                                                if($checkup->location_id == $location->location_id){
                                                    echo " selected ";
                                                }
                                            }
                                        ?>
                                        ><?php 
											echo $location->location_abbre . " " . $location->location_name; 
                                        ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

					<div class="form-group">
						<label for="date_checkup_date">วันที่ตรวจ *</label>
						<input type="date" class="form-control" id="date_checkup_date" name="checkup_date" placeholder="วันที่ตรวจ" value="<?php
											if($method == "update"){
												echo $checkup->checkup_date;
											}elseif($method == "add"){
												echo date("Y-m-d");
											}
										?>" required>
                  	</div>
                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
              </form>
            </div>  
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
