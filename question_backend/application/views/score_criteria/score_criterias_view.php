<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="<?php echo base_url(); ?>ScoreCriteria/addScoreCriteria"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อเกณฑ์คะแนน</th>
                    <th >การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($scoreCriterias as $scoreCriteria){
                        echo "<tr>";
                        echo "<td>" . $scoreCriteria->score_criteria_name . "</td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "ScoreCriteria/scoreCriteria/" . $scoreCriteria->score_criteria_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "ScoreCriteria/updateScoreCriteria/" . $scoreCriteria->score_criteria_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        echo "<a href='" . base_url() . "ScoreCriteria/deleteScoreCriteriaDo/" . $scoreCriteria->score_criteria_id . "' class='btn btn-danger btn-sm' onclick='confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a> </td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>