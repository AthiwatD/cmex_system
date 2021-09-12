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

                <div class="form-group row" >
                    <div class="col-12">
                        <table id="table_persons" class="table table-flush table-striped table-bordered table-hover my_table_person"> 
                            <thead class="thead-light">
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสพนักงาน</th>
                                    <th>ชื่อ</th>
                                    <th>ตำแหน่ง</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $count = 0;
                                    if(!empty($evaluate_persons)){
                                        foreach($evaluate_persons as $evaluate_person){
                                            $count++;
                                ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $evaluate_person->person_id; ?></td>
                                                <td ><?php echo $evaluate_person->person_fname . " " . $evaluate_person->person_lname; ?></td>
                                                <td ><?php echo $evaluate_person->position_name; ?></td>
                                                <td ><?php 
                                                    if(empty($evaluate_person->answer_id)){
                                                        echo "<span class='text-danger'>ยังไม่ได้ประเมิน</span>"; 
                                                    }
                                                    else{
                                                        echo "<span class='text-success'>ประเมิณแล้ว</span>"; 
                                                    }

                                                        ?></td>
                                            </tr>
                                <?php        
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
