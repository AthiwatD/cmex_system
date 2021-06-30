<div class="tab-pane fade" id="exam_tab" role="tabpanel" aria-labelledby="custom-tabs-four-exam-tab">
	<div class="card card-body row col-12" style="margin-left:0px; margin-right: 0px;">
		<h3 style="margin-top: 10px">การตรวจสัญญาณชีพ (Vital signs)</h3>
		<div class="mt-4">
			<table class="table">
				<thead>
					<tr>
						<th width="30%">รายการ</th>
						<th width="70%">ระบุ</th>
					</tr>
				</thead>
				<tbody>
					<!-- 1 -->
					<tr>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							น้ำหนัก (กิโลกรัม)
						</td>
						<td style=" vertical-align: middle; border-top: 0px solid #dee2e6;">
							<input type="number" class="form-control input_data" id="exam_1" alt="น้ำหนัก (กิโลกรัม)" placeholder="น้ำหนัก (กิโลกรัม)">
						</td>
					</tr>

					<!-- 2 -->
					<tr>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							ส่วนสูง (เซนติเมตร)
						</td>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							<input type="number" class="form-control input_data" id="exam_2" alt="ส่วนสูง (เซนติเมตร)" placeholder="ส่วนสูง (เซนติเมตร)">
						</td>
					</tr>

					<!-- 3 -->
					<tr>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							ความดันโลหิต (มิลลิเมตร/ปรอท) : บน
						</td>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							<input type="number" class="form-control input_data" id="exam_3" alt="ความดันโลหิต (มิลลิเมตร/ปรอท) : บน"  placeholder="ความดันโลหิต (มิลลิเมตร/ปรอท) : บน">
						</td>
					</tr>

					<!-- 4 -->
					<tr>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							ความดันโลหิต (มิลลิเมตร/ปรอท) : ล่าง
						</td>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							<input type="number" class="form-control input_data" id="exam_4" alt="ความดันโลหิต (มิลลิเมตร/ปรอท) : ล่าง"  placeholder="ความดันโลหิต (มิลลิเมตร/ปรอท) : ล่าง">
						</td>
					</tr>

					<!-- 5 -->
					<tr>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							ชีพจร (ครั้ง/นาที)
						</td>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							<input type="number" class="form-control input_data" id="exam_5" alt="ชีพจร (ครั้ง/นาที)"  placeholder="ชีพจร (ครั้ง/นาที)" >
						</td>
					</tr>

					<!-- 6 -->
					<tr>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							อัตราการหายใจ (ครั้ง/นาที)
						</td>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							<input type="number" class="form-control input_data" id="exam_6" alt="อัตราการหายใจ (ครั้ง/นาที)"  placeholder="อัตราการหายใจ (ครั้ง/นาที)">
						</td>
					</tr>

					<!-- 7 -->
					<tr>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							อุณหภูมิ (องศาเซลเซียส)
						</td>
						<td style="vertical-align: middle; border-top: 0px solid #dee2e6;">
							<input type="number" class="form-control input_data" id="exam_7" alt="อุณหภูมิ (องศาเซลเซียส)"  placeholder="อุณหภูมิ (องศาเซลเซียส)">
						</td>
					</tr>

				</tbody>
			</table>

		</div>

		<div class="mt-4">
			<div class="">
				<button type="button" class="form-control btn btn-success" onclick="save_tab_data('exam_tab')">บันทึก</button>
			</div>
		</div>

	</div>
</div>
