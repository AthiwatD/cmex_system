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
                        <?php echo $form_detail->form_detail_id; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ชื่อฟอร์ม</label>
                    <div class="col-md-9">
                        <?php echo $form_detail->form_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ข้อ</label>
                    <div class="col-md-9">
                        <?php echo $form_detail->form_detail_number; ?>
                    </div>
                </div>
                
                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">คำถาม</label>
                    <div class="col-md-9">
                        <?php echo $form_detail->form_detail_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">คำตอบ</label>
                    <div class="col-md-9">
                        <?php 
                            $items = explode("(.)", $form_detail->form_detail_items);
                            foreach($items as $item){
                                if($item == ""){
                                    echo "โปรดระบุ...<br>";
                                }else{
                                    echo $item . "<br>";
                                }
                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!-- /.card-body -->
</div>