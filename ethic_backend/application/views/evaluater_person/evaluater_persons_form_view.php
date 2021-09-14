<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="evaluation-group">
            <div class="evaluation-body">
                <h4 class="evaluation-section"><i class="ft-user"></i> แบบประเมิน</h4>

                <div class="evaluation-group row" id="div_doc_register_number">
                    <label class="col-md-3 label-control" for="doc_register_number">ID</label>
                    <div class="col-md-9 evaluation-inline">
                        <?php echo $evaluation->evaluation_id; ?>
                    </div>
                </div>

                <div class="evaluation-group row" id="div_doc_date">
                    <label class="col-md-3 label-control" for="document_name">ชื่อฟอร์ม</label>
                    <div class="col-md-9">
                        <?php echo $evaluation->evaluation_name; ?>
                    </div>
                </div>

                <div class="evaluation-group row" id="div_doc_hour">
                    <label class="col-md-3 label-control" for="document_name">รายละเอียด</label>
                    <div class="col-md-9">
                        <?php echo $evaluation->evaluation_description; ?>
                    </div>
                </div>
                
                <div class="evaluation-group row" id="div_doc_hour">
                    <label class="col-md-3 label-control" for="document_name">เริ่ม</label>
                    <div class="col-md-9">
                        <?php echo $evaluation->date_start; ?>
                    </div>
                </div>

                <div class="evaluation-group row" id="div_doc_hour">
                    <label class="col-md-3 label-control" for="document_name">สิ้นสุด</label>
                    <div class="col-md-9">
                        <?php echo $evaluation->date_end; ?>
                    </div>
                </div>

                <div class="evaluation-group row" id="div_doc_hour">
                    <label class="col-md-3 label-control" for="document_name">สร้างโดย</label>
                    <div class="col-md-9">
                        <?php echo $evaluation->person_fname . " " . $evaluation->person_lname; ?>
                    </div>
                </div>

                
            </div>
        </div>
        <br><br>
        <div class="evaluation-group">
            <div class="evaluation-body">
                <h4 class="evaluation-section"><i class="ft-user"></i> ผู้ทำแบบประเมิน</h4>
				<div class="form-group" >
					<select class="form-control" id="evaluater_id" name="evaluater_id">
						<?php 
							for($i=0;$i<sizeof($persons);$i++){
						?>
								<option value="<?php echo $persons[$i]->person_id; ?>">
									<?php echo $persons[$i]->person_id . " " . $persons[$i]->person_fname . " " . $persons[$i]->person_lname . " " . $persons[$i]->position_name . " " . $persons[$i]->center_name; ?>
								</option>
						<?php        
							}
						?>
					</select>
				</div>
                <div class="form-group" >
                    <div class="row">
                        <button type="button" class="btn btn-success" onclick="select_list_all()">เลือกทั้งหมด</button>
                        <button type="button" class="btn btn-danger" onclick="select_list_cancel()">ยกเลิกทั้งหมด</button>
                        <button type="button" class="btn btn-info" onclick="select_list(10)">10</button>
                        <button type="button" class="btn btn-info" onclick="select_list(20)">20</button>
                        <button type="button" class="btn btn-info" onclick="select_list(50)">50</button>
                        <button type="button" class="btn btn-info" onclick="select_list(100)">100</button>
                    </div>
                    <br><button type="button" class="btn btn-primary form-control" onclick="update_evaluater_persons()">บันทึก</button>
                    <br><br>
                    
                    <div class="col-12 row">
                        <table class="table table-bordered table-striped my_table_person" > 
                            <thead class="thead-light">
                                <tr>
                                    <th>เลือก</th>
                                    <th>ลำดับ</th>
                                    <th>รหัสพนักงาน</th>
                                    <th>ชื่อ</th>
                                    <th>ตำแหน่ง</th>
                                    <th>ศูนย์</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $count = 0;
                                    for($i=0;$i<sizeof($evaluate_persons);$i++){
                                        $count++;
                                ?>
                                        <tr>
                                            <input type="hidden" class="form-control" name="person_id" value="<?php echo $evaluate_persons[$i]->person_id; ?>" >
                                            <td><input type="checkbox" class="form-control" name="table_check" ></td>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $evaluate_persons[$i]->person_id; ?></td>
                                            <td ><?php echo $evaluate_persons[$i]->person_fname . " " . $evaluate_persons[$i]->person_lname; ?></td>
                                            <td ><?php echo $evaluate_persons[$i]->position_name; ?></td>
                                            <td ><?php echo $evaluate_persons[$i]->center_name; ?></td>
                                        </tr>
                                <?php        
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <br><button type="button" class="btn btn-primary form-control" onclick="update_evaluater_persons()">บันทึก</button><br>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
