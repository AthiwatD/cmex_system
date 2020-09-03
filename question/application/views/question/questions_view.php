<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="<?php echo base_url(); ?>Question/addQuestion"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>ชื่อฟอร์ม</th>
                    <th>ชื่อ Category</th>
                    <th>กลุ่มคำถาม</th>
                    <th>ข้อ</th>
                    <th>คำถาม</th>
                    <th >การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($questions as $question){
                        echo "<tr>";
                        echo "<td>" . $question->form_name . "</td>";
                        echo "<td>" . $question->category_number . ". " . $question->category_name . "</td>";
                        echo "<td>" . $question->question_group_number . ". " . $question->question_group_name . "</td>";
                        echo "<td>" . $question->question_number . "</td>";
                        echo "<td>" . $question->question_name . "</td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "Question/question/" . $question->question_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "Question/updateQuestion/" . $question->question_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        echo "<a href='" . base_url() . "Question/deleteQuestionDo/" . $question->question_id . "' class='btn btn-danger btn-sm' onclick='confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a> </td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>