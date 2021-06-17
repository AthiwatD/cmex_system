<div class="tab-pane fade" id="input_lab_tab" role="tabpanel" aria-labelledby="custom-tabs-four-input_lab-tab">
	<div class="card card-body row col-12" style="margin-left:0px; margin-right: 0px;">
		<h3 style="margin-top: 10px">กรอกผล Labs</h3>
		<div class="mt-4">
			<table class="table">
				<thead>
					<tr>
						<th width="30%">รายการ</th>
						<th width="30%">ผล</th>
						<th width="40%">คำบรรยาย</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$lab_group_id = "";
						for($i=0;$i<sizeof($labs);$i++){
							if($lab_group_id != $labs[$i]->lab_group_id){
								$lab_group_id = $labs[$i]->lab_group_id;
								echo "<tr><th colspan='3'>" . $labs[$i]->lab_group_name . "</th></tr>";
							}

					?>

							<tr>
								<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
									<?php echo $labs[$i]->lab_name; ?>
								</td>
								<td style=" vertical-align: middle; border-top: 0px solid #dee2e6;">
									<?php
										if(!empty($labs[$i]->low_result)){
									?>
											<label class="radio-inline btn btn-warning"><input type="radio" id="lab_<?php echo $i; ?>_low" class="input_data" name="lab_<?php echo $i; ?>" onclick="load_lab_meaning('<?php echo $labs[$i]->lab_meaning_id; ?>','low','lab_<?php echo $i; ?>_result')">ต่ำ</label>
									<?php
										}
									?>

										<label class="radio-inline btn btn-success"><input type="radio" id="lab_<?php echo $i; ?>_normal" class="input_data" name="lab_<?php echo $i; ?>" onclick="load_lab_meaning('<?php echo $labs[$i]->lab_meaning_id; ?>','normal','lab_<?php echo $i; ?>_result')" checked>ปกติ</label>
									<?php
										if(!empty($labs[$i]->abnormal_result)){
									?>
											<label class="radio-inline btn btn-danger"><input type="radio" id="lab_<?php echo $i; ?>_abnormal" class="input_data"  name="lab_<?php echo $i; ?>" onclick="load_lab_meaning('<?php echo $labs[$i]->lab_meaning_id; ?>','abnormal','lab_<?php echo $i; ?>_result')">ผิดปกติ</label>
									<?php
										}
									?>
									<?php
										if(!empty($labs[$i]->high_result)){
									?>
											<label class="radio-inline btn btn-warning"><input type="radio" id="lab_<?php echo $i; ?>_high" class="input_data" name="lab_<?php echo $i; ?>" onclick="load_lab_meaning('<?php echo $labs[$i]->lab_meaning_id; ?>','high','lab_<?php echo $i; ?>_result')">สูง</label>
									<?php
										}
									?>
								</td>
								<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
									<!-- <input type="text" class="form-control input_data" id="lab_<?php echo $i; ?>_result" alt="<?php echo $labs[$i]->lab_name; ?>"> -->
									<textarea class="form-control input_data" id="lab_<?php echo $i; ?>_result" placeholder="<?php echo $labs[$i]->lab_name; ?>"></textarea>
								</td>
							</tr>
					<?php
						}
					?>

				</tbody>
			</table>

		</div>

		<div class="mt-4">
			<div class="">
				<button type="button" class="form-control btn btn-success" onclick="save_tab_data('input_lab_tab')">บันทึก</button>
			</div>
		</div>

	</div>
</div>
