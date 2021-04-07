<!-- [manage recruit list] -->
<?php $count=1 ?>
<div class="card">
    <div class="card-header">
        <a href="<?php echo base_url(); ?>Recruit/addRecruit"><button type="button" class="btn btn-success">เพิ่มประกาศรับสมัคร</button></a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data_desc" style="width:100%">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>วันที่ประกาศ</th>
                    <th>วันที่สิ้นสุด</th>
                    <th>ประเภท</th>
                    <th>ตำแหน่ง </th>
                    <th>หน่วยงาน </th>
                    <th>อัตราค่าจ้าง </th>
                    <th>สถานะ </th>
                    <th>หมายเหตุ </th>
                    <th>การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php echo base_url(); ?> -->
               <!--  <?php
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
                ?> -->
            </tbody>
        </table>
    </div>
</div>