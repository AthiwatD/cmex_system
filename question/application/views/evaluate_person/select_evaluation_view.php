<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <!-- <a href="<?php echo base_url(); ?>EvaluatePerson/addEvaluatePerson"><button type="button" class="btn btn-success">เพิ่ม</button></a> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อแบบประเมิน</th>
                    <th>จำนวนผู้ประเมิน</th>
                    <th>เริ่ม</th>
                    <th>สิ้นสุด</th>
                    <!-- <th>สร้างโดย</th> -->
                    <th >การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($evaluations as $evaluation){
                        echo "<tr>";
                        echo "<td><a href='" . base_url() . "EvaluatePerson/evaluatePersons/" . $evaluation->evaluation_id . "'>" . $evaluation->evaluation_name . "</a></td>";
                        echo "<td>" . $evaluation->person_count . "</td>";
                        echo "<td>" . $evaluation->date_start . "</td>";
                        echo "<td>" . $evaluation->date_end . "</td>";
                        //echo "<td>" . $evaluation->person_fname . " " . $evaluation->person_lname . "</td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "EvaluatePerson/evaluatePersons/" . $evaluation->evaluation_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "EvaluatePerson/updateEvaluatePersons/" . $evaluation->evaluation_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        // echo "<a href='" . base_url() . "EvaluatePerson/deleteEvaluatePersonDo/" . $evaluation->evaluation_id . "' class='btn btn-danger btn-sm' onclick='confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a> </td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>