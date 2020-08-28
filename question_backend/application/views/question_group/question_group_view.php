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
                        <?php echo $question_group->question_group_id; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ฟอร์ม</label>
                    <div class="col-md-9">
                        <?php echo $question_group->form_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">Category</label>
                    <div class="col-md-9">
                        <?php echo $question_group->category_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ข้อ</label>
                    <div class="col-md-9">
                        <?php echo $question_group->question_group_number; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ชื่อกลุ่มคำถาม</label>
                    <div class="col-md-9">
                        <?php echo $question_group->question_group_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">คำถาม</label>
                    
                </div>
                
                <div class="form-group row" >
                    <div class="col-12">
                        <table class="table table-bordered table-striped"> 
                            <thead >
                                <tr>
                                    <th>ข้อ</th>
                                    <th>คำถาม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    
                                    foreach($questions as $question){
                                ?>
                                        <tr>
                                            <td ><?php echo $question->question_number; ?></td>
                                            <td ><?php echo $question->question_name; ?></td>
                                        </tr>
                                <?php        
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