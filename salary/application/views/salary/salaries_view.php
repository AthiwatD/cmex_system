<div class="card">
    <div class="card-header">
    <a href="<?php echo base_url(); ?>Salary/addSalary"><button type="button" class="btn btn-success">เพิ่มเงินเดือน</button></a>
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data_desc">
            <thead>
                <tr>
                    <th>วันที่</th>
                    <th>ไฟล์</th>
                    <th>การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($salaries as $salary){
                        echo "<tr>";
                        echo "<td>" . $salary->salary_datetime . "</td>";
                        echo "<td><a href='" . base_url() . "uploads/" . $salary->salary_file . "'>ไฟล์</td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "Salary/salary/" . $salary->salary_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i> ดู</a> ";
                        echo "<a href='" . base_url() . "Salary/updateSalary/" . $salary->salary_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i> แก้ไข</a> ";
                        echo "<a href='" . base_url() . "Salary/deleteSalaryDo/" . $salary->salary_id . "' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i> ลบ</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>