<div class="card">
    <div class="card-header">
    <a href="<?php echo base_url(); ?>Meeting/addMeeting"><button type="button" class="btn btn-success">เพิ่มการประชุม</button></a>
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data_desc">
            <thead>
                <tr>
                    <th>วันที่ประชุม</th>
                    <th>กลุ่ม</th>
                    <th>การประชุม</th>
                    <th>การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($meetings as $meeting){
                        echo "<tr>";
                        echo "<td>" . $meeting->meeting_datetime . "</td>";
                        echo "<td><a href='" . base_url() . "Meeting/boardMeetings/" . $meeting->board_id . "'>" . $meeting->board_name . "</td>";
                        echo "<td><a href='" . base_url() . "Meeting/meeting/" . $meeting->meeting_id . "'>" . $meeting->meeting_name . "</a></td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "Meeting/meeting/" . $meeting->meeting_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i> ดู</a> ";
                        echo "<a href='" . base_url() . "Meeting/meetingSendToPersons/" . $meeting->meeting_id . "' class='btn btn-info btn-sm' target='_blank'><i class='fas fa-folder'></i> เอกสาร</a> ";
                        echo "<a href='" . base_url() . "Meeting/updateMeeting/" . $meeting->meeting_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i> แก้ไข</a> ";
                        echo "<a href='" . base_url() . "Meeting/deleteMeetingDo/" . $meeting->meeting_id . "' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i> ลบ</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>