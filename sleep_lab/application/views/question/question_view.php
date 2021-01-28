<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <div class="form-body">
                
                <div class="form-group row">
                    <label class="col-md-3 label-control" for="doc_register_number">ID</label>
                    <div class="col-md-9 form-inline">
                        <?php echo $question->question_id; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ฟอร์ม</label>
                    <div class="col-md-9">
                        <?php echo $question->form_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">Category</label>
                    <div class="col-md-9">
                        <?php echo $question->category_number . ". " . $question->category_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ชื่อกลุ่มคำถาม</label>
                    <div class="col-md-9">
                        <?php echo $question->question_group_number . ". " . $question->question_group_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ข้อ</label>
                    <div class="col-md-9">
                        <?php echo $question->question_number; ?>
                    </div>
                </div>
                
                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">คำถาม</label>
                    <div class="col-md-9">
                        <?php echo $question->question_name; ?>
                    </div>
                </div>

            </div>
        </div>
       
    </div>
    <!-- /.card-body -->
</div>