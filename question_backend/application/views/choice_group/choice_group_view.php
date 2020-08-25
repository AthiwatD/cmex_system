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
                        <?php echo $choice_group[0]->choice_group_id; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">ชื่อกลุ่มคำตอบ</label>
                    <div class="col-md-9">
                        <?php echo $choice_group[0]->choice_group_name; ?>
                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-3 label-control" for="document_name">คำตอบ</label>
                    <div class="col-md-9">
                        <table>
                            <thead class="table table-bordered table-striped">
                                <tr>
                                    <th>ข้อ</th>
                                    <th>คำตอบ</th>
                                    <th>คะแนน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    
                                    foreach($choice_group as $cg){
                                ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $cg->choice_number; ?></td>
                                            <td style="text-align: center;"><?php echo $cg->choice_name; ?></td>
                                            <td style="text-align: center;"><?php echo $cg->choice_point; ?></td>
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