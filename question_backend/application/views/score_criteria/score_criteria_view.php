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

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>เกณฑ์</th>
                            <th>คะแนนต่ำสุด</th>
                            <th>คะแนนสูงสุด</th>
                            <th>ความหมาย</th>
                            <th>รหัสสี</th>
                        </tr>
                    <thead>
                    <tbody>
                        <?php 
                            foreach($criterias as $index => $criteria){
                        ?>
                        
                                <tr>
                                    <td><?php echo $criterias[$index]; ?></td>
                                    <td><?php echo $min_scores[$index]; ?></td>
                                    <td><?php echo $max_scores[$index]; ?></td>
                                    <td><?php echo $meanings[$index]; ?></td>
                                    <td style="background-color:<?php echo $color_codes[$index]; ?>"><?php echo $color_codes[$index]; ?></td>
                                </tr>
                        <?php
                            }
                        ?>
                    <tbody>
                </table>
            </div>
        </div>
       
    </div>
    <!-- /.card-body -->
</div>