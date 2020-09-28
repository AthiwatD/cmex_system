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
                        <?php echo $scoreCriteria->score_criteria_id; ?>
                    </div>
                </div>
                
                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ชื่อเกณฑ์คะแนน</label>
                    <div class="col-md-9">
                        <?php echo $scoreCriteria->score_criteria_name; ?>
                    </div>
                </div>

            </div>
        </div>
       
    </div>
    <!-- /.card-body -->
</div>