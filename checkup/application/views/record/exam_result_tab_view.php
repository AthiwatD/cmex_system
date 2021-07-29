<div class="tab-pane fade" id="exam_result_tab" role="tabpanel" aria-labelledby="custom-tabs-four-exam_result-tab">
	<div class="card card-body row col-12" style="margin-left:0px; margin-right: 0px;">
		<h3 style="margin-top: 10px">ผลการตรวจร่างกาย (Physical Examination Result)</h3>
		<div class="mt-4">
			<div class="">
				<button type="button" class="form-control btn btn-success" onclick="save_tab_data('exam_result_tab')">บันทึก</button>
			</div>
		</div>
		<div class="mt-4">
			<table class="table">
				<thead>
					<tr>
						<th width="30%">รายการ</th>
						<th width="10%">ปกติ</th>
						<th width="10%">ผิดปกติ</th>
						<th width="50%">รายละเอียด</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>สุขภาพทั่วไป</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_general" id="result_general_1" 
							value="สุขภาพทั่วไป ปกติ" alt="สุขภาพทั่วไป ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_general" id="result_general_2" 
							value="สุขภาพทั่วไป ผิดปกติ" alt="สุขภาพทั่วไป ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_general_detail" id="result_general_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>

					<tr>
						<td>ศีรษะและใบหน้า</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_head" id="result_head_1" 
							value="ศีรษะและใบหน้า ปกติ" alt="ศีรษะและใบหน้า ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_head" id="result_head_2" 
							value="ศีรษะและใบหน้า ผิดปกติ" alt="ศีรษะและใบหน้า ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_head_detail" id="result_head_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>

					<tr>
						<td>หัวใจและหลอดเลือด</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_heart" id="result_heart_1" 
							value="หัวใจและหลอดเลือด ปกติ" alt="หัวใจและหลอดเลือด ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_heart" id="result_heart_2" 
							value="หัวใจและหลอดเลือด ผิดปกติ" alt="หัวใจและหลอดเลือด ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_heart_detail" id="result_heart_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>

					<tr>
						<td>ปอด</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_lungs" id="result_lungs_1" 
							value="ปอด ปกติ" alt="ปอด ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_lungs" id="result_lungs_2" 
							value="ปอด ผิดปกติ" alt="ปอด ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_lungs_detail" id="result_lungs_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>

					<tr>
						<td>ช่องท้อง</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_abdomen" id="result_abdomen_1" 
							value="ช่องท้อง ปกติ" alt="ช่องท้อง ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_abdomen" id="result_abdomen_2" 
							value="ช่องท้อง ผิดปกติ" alt="ช่องท้อง ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_abdomen_detail" id="result_abdomen_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>

					<tr>
						<td>รยางค์</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_appendage" id="result_appendage_1" 
							value="รยางค์ ปกติ" alt="รยางค์ ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_appendage" id="result_appendage_2" 
							value="รยางค์ ผิดปกติ" alt="รยางค์ ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_appendage_detail" id="result_appendage_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>

					<tr>
						<td>ระบบประสาท</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_nerve" id="result_nerve_1" 
							value="ระบบประสาท ปกติ" alt="ระบบประสาท ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_nerve" id="result_nerve_2" 
							value="ระบบประสาท ผิดปกติ" alt="ระบบประสาท ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_nerve_detail" id="result_nerve_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>
					
					<tr>
						<td>อื่นๆ</td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_other" id="result_other_1" 
							value="อื่นๆ ปกติ" alt="อื่นๆ ปกติ" checked="checked"></td>
						<td><input type="radio" class="form-check-input big-checkbox input_data" 
							name="result_other" id="result_other_2" 
							value="อื่นๆ ผิดปกติ" alt="อื่นๆ ผิดปกติ"></td>
						<td><input type="text" class="form-control input_data" 
							name="result_other_detail" id="result_other_detail" 
							value="" alt="รายละเอียด"></td>
					</tr>

				</tbody>
			</table>
		</div>

		<div class="mt-4">
			<div class="">
				<button type="button" class="form-control btn btn-success" onclick="save_tab_data('exam_result_tab')">บันทึก</button>
			</div>
		</div>

	</div>
</div>
