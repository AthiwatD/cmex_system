<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="<?php echo base_url(); ?>QuestionGroup/addQuestionGroup"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อฟอร์ม</th>
                    <th>ชื่อ Category</th>
                    <th>ข้อ</th>
                    <th>กลุ่มคำถาม</th>
                    <th >การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($question_groups as $question_group){
                        echo "<tr>";
                        echo "<td>" . $question_group->form_name . "</td>";
                        echo "<td>" . $question_group->category_number . ". " . $question_group->category_name . "</td>";
                        echo "<td>" . $question_group->question_group_number . "</td>";
                        echo "<td>" . $question_group->question_group_name . "</td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "QuestionGroup/questionGroup/" . $question_group->question_group_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "QuestionGroup/updateQuestionGroup/" . $question_group->question_group_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        echo "<a href='" . base_url() . "QuestionGroup/deleteQuestionGroupDo/" . $question_group->question_group_id . "' class='btn btn-danger btn-sm' onclick='confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a> </td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>