<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <div class="form-body">
                <h4 class="form-section"><i class="ft-user"></i> ฟอร์ม</h4>

                <div class="form-group row" id="div_doc_register_number">
                    <label class="col-md-3 label-control" for="doc_register_number">ID</label>
                    <div class="col-md-9 form-inline">
                        <?php echo $form->form_id; ?>
                    </div>
                </div>

                <div class="form-group row" id="div_doc_date">
                    <label class="col-md-3 label-control" for="document_name">ชื่อฟอร์ม</label>
                    <div class="col-md-9">
                        <?php echo $form->form_name; ?>
                    </div>
                </div>

                <div class="form-group row" id="div_doc_hour">
                    <label class="col-md-3 label-control" for="document_name">รายละเอียด</label>
                    <div class="col-md-9">
                        <?php echo $form->form_description; ?>
                    </div>
                </div>
                
            </div>
        </div>
       
    </div>
    <!-- /.card-body -->
</div>