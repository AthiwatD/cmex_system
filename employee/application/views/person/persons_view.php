<div class="card">
    <div class="card-header">
    <a href="<?php echo base_url(); ?>Person/addPerson"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover my_table_data">
            <thead>
                <tr>
                    <th width="50px">รหัส</th>
                    <th width="50px">รหัสผ่าน</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ตำแหน่ง</th>
                    <th>สถานที่</th>
                    <th>การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($persons as $person){
                        echo "<tr>";
                        echo "<td>" . $person->NUM_OT . "</td>";
                        echo "<td>" . $person->Upass . "</td>";
                        echo "<td>" . $person->Fname . "</td>";
                        echo "<td>" . $person->Lname . "</td>";
                        echo "<td>" . $person->position_name . "</td>";
                        echo "<td>" . $person->ward_name . "</td>";
                        echo "<td width='250'>";
                        //echo "<a href='" . base_url() . "Person/person/" . $person->person_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i> ดู</a> ";
                        // echo "<a href='" . base_url() . "Person/personSendToPersons/" . $person->person_id . "' class='btn btn-info btn-sm' target='_blank'><i class='fas fa-folder'></i> เอกสาร</a> ";
                        echo "<a href='" . base_url() . "Person/updatePerson/" . $person->NUM_OT . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i> แก้ไข</a> ";
                        echo "<a href='" . base_url() . "Person/deletePersonDo/" . $person->NUM_OT . "' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i> ลบ</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>