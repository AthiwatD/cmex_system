<div class="tab-pane fade " id="exam_lab_tab" role="tabpanel" aria-labelledby="custom-tabs-four-exam_lab-tab">
	<div class="card card-body row col-12" style="margin-left:0px; margin-right: 0px;">

		<h3 style="margin-top: 10px">ผลการตรวจทางห้องปฏิบัติการ (Laboratory Result)</h3>

		<div class="form-group">
			
			<label class="label-control" for="upl_files"> ไฟล์เอกสาร *</label><br>
			<!-- <div class='preview'>
				<img src="" id="exam_lab_file_preview" width="100" height="100">
			</div> -->
			<div class="form-inline">
				<input type="file" name="exam_lab_upl_files[]" id="exam_lab_upl_files"  class="inputFile form-control" 
								accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" multiple />
				<button type="button" class="btn btn-success form-control" value="Upload" id="button_exam_lab_upload" onclick="upload_files('<?php echo $checkup_id; ?>', 'exam_lab_tab')>Upload</button>
			</div>
			
			<!-- <?php
				if($method == "update"){
			?>
					<div class="form-group">
						<table id="table_files" class="table table-flush table-striped table-bordered table-hover col-12">
							<thead>
								<tr>
									<th>ชื่อไฟล์</th>
									<th>การดำเนินการ</th>
								</tr>
							</thead>
							<tbody>
								
								<?php 
									foreach($files as $index => $file){
								?>
										<tr>
											<td><?php echo $file->file_name; ?></td>
											<td>
												<a href='<?php echo $file->file_path; ?>' class='btn btn-primary btn-sm' target="_blank"><i class='fas fa-folder'></i>View</a>
												<a href='<?php echo base_url(); ?>Meeting/deleteFileDo/<?php echo $meeting_id; ?>/<?php echo $file->file_id; ?>' class='btn btn-danger btn-sm' onclick='return confirm("คุณต้องการ ลบ?")'><i class='fas fa-trash'></i>Delete</a>
											</td>
										</tr>
								<?php        
									}
								?>
							</tbody>
						</table>
					<div>
			<?php
				}
			?> -->
		</div>

		<button type="button" class="form-control btn btn-info" onclick="load_lab_result()">ข้อมูลการแปลผล Lab</button>
		<div class="mt-4">
			
			<div class="form-group form-inline " style="display: block;">
				<div class="textarea-wrapper">
					<textarea id="exam_lab_detail" class="full-width textarea_white_space input_data" rows="10" cols="" alt="ผลการตรวจทางห้องปฏิบัติการ (Laboratory Result)"></textarea>
				</div>
			</div>
	
		</div>

		<div class="mt-4">
			<div class="">
				<button type="button" class="form-control btn btn-success" onclick="save_tab_data('exam_lab_tab')">บันทึก</button>
			</div>
		</div>

	</div>
</div>
