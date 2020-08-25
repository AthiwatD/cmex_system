<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="<?php echo base_url(); ?>ChoiceGroup/addChoiceGroup"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อกลุ่มคำตอบ</th>
                    <th>ข้อ</th>
                    <th>คำตอบ</th>
                    <th>คะแนน</th>
                    <th>การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($choice_groups as $choice_group){

                        echo "<tr>";
                        echo "<td>" . $choice_group->choice_group_name . "</td>";
                        echo "<td>" . $choice_group->choice_number . "</td>";
                        echo "<td>" . $choice_group->choice_name . "</td>";
                        echo "<td>" . $choice_group->choice_point . "</td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "ChoiceGroup/choiceGroup/" . $choice_group->choice_group_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "ChoiceGroup/updateChoiceGroup/" . $choice_group->choice_group_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        echo "<a href='" . base_url() . "ChoiceGroup/deleteChoiceGroupDo/" . $choice_group->choice_group_id . "' class='btn btn-danger btn-sm' onclick='confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a> </td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>