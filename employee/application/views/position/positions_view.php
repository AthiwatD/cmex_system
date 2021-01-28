<div class="card">
    <div class="card-header">
    <!-- <a href="<?php echo base_url(); ?>Location/addLocation"><button type="button" class="btn btn-success">เพิ่มสถานที่</button></a> -->
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>รหัส</th>
                    <th>ชื่อตำแหน่ง</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($positions as $position){
                        echo "<tr>";
                        echo "<td>" . $position->position_code . "</td>";
                        echo "<td>" . $position->position_name . "</td>";
                        // echo "<td width='250'>";
                        // echo "<a href='" . base_url() . "Meeting/meeting/" . $meeting->meeting_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i> ดู</a> ";
                        // echo "<a href='" . base_url() . "Meeting/meetingSendToPersons/" . $meeting->meeting_id . "' class='btn btn-info btn-sm' target='_blank'><i class='fas fa-folder'></i> เอกสาร</a> ";
                        // echo "<a href='" . base_url() . "Meeting/updateMeeting/" . $meeting->meeting_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i> แก้ไข</a> ";
                        // echo "<a href='" . base_url() . "Meeting/deleteMeetingDo/" . $meeting->meeting_id . "' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i> ลบ</a>";
                        // echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>