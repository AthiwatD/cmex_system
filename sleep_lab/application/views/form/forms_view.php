<div class="card">
    <div class="card-header">
    <!-- <h3 class="card-title">DataTable with default features</h3> -->
        <a href="<?php echo base_url(); ?>Form/addForm"><button type="button" class="btn btn-success">เพิ่ม</button></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped my_table_data">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ชื่อฟอร์ม</th>
                    <th >การดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($forms as $form){
                        echo "<tr>";
                        echo "<td><a href='" . base_url() . "Form/form/" . $form->form_id . "'>" . $form->form_id . "</a></td>";
                        echo "<td><a href='" . base_url() . "Form/form/" . $form->form_id . "'>" . $form->form_name . "</a></td>";
                        echo "<td width='250'>";
                        echo "<a href='" . base_url() . "Form/form/" . $form->form_id . "' class='btn btn-primary btn-sm'><i class='fas fa-folder'></i>View</a> ";
                        echo "<a href='" . base_url() . "Form/updateForm/" . $form->form_id . "' class='btn btn-warning btn-sm'><i class='fas fa-pencil-alt'></i>Edit</a> ";
                        echo "<a href='" . base_url() . "Form/deleteFormDo/" . $form->form_id . "' class='btn btn-danger btn-sm' onclick='return confirm(\"คุณต้องการ ลบ?\")'><i class='fas fa-trash'></i>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <!-- /.card-body -->
</div>