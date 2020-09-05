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
                <div class="evaluation-group row" id="div_doc_hour">
                    <label class="col-md-3 label-control" for="document_name">ลิงก์</label>
                    <div class="col-md-9">
                        http://excellent.med.cmu.ac.th/cmex_system/question/Home/form/<?php echo $evaluation->evaluation_id; ?>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!-- /.card-body -->
</div>