<div class="tab-pane fade active show history_tab" id="history_tab" role="tabpanel" aria-labelledby="custom-tabs-four-history-tab">
	<div class="card card-body row col-12" style="margin-left:0px; margin-right: 0px;">
		<h3 style="margin-top: 10px">โรคประจำตัว (Current medical problem)</h3>
		<div class="mt-4">
			<div class="">
				<button type="button" class="form-control btn btn-success" onclick="save_tab_data('history_tab')">บันทึก</button>
			</div>
		</div>
		<div class="mt-4">
			<!-- <input type="hidden" class="input_data" name="checkup_id" id="history_tab" value="<?php echo $checkup_id; ?>"> -->
			<table class="table">
				<thead>
					<tr>
						<th width="30%">รายการ</th>
						<th width="70%">ระบุ</th>
					</tr>
				</thead>
				<tbody>
					<!-- 21 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
											id="history_problem_21" 
											value="ปฏิเสธ (no)" 
											placeholder="ปฏิเสธ (no)">
											ปฏิเสธ (no)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_21" placeholder="ปฏิเสธ (no)">
							</div>
						</td>
					</tr>

					<!-- 1 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline" >
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
											id="history_problem_1" 
											value="โรคเบาหวาน (diabetes)" 
											placeholder="โรคเบาหวาน (diabetes)">
												โรคเบาหวาน (diabetes)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_1" placeholder="โรคเบาหวาน (diabetes)">
							</div>
						</td>
					</tr>
					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_2" 
										value="โรคความดันโลหิตสูง (hypertension)" 
										placeholder="โรคความดันโลหิตสูง (hypertension)">
											โรคความดันโลหิตสูง (hypertension)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_2" placeholder="โรคความดันโลหิตสูง (hypertension)">
							</div>
						</td>
					</tr>

					<!-- 3 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_3" 
										value="โรคไขมันในเลือดสูง (dyslipidemia)" 
										placeholder="โรคไขมันในเลือดสูง (dyslipidemia)">
											โรคไขมันในเลือดสูง (dyslipidemia)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_3" placeholder="โรคไขมันในเลือดสูง (dyslipidemia)">
							</div>
						</td>
					</tr>

					<!-- 4 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_4" 
										value="โรคภูมิแพ้ (allergy)" 
										placeholder="โรคภูมิแพ้ (allergy)">
										โรคภูมิแพ้ (allergy)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_4" placeholder="โรคภูมิแพ้ (allergy)">
							</div>
						</td>
					</tr>

					<!-- 5 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_5" 
										value="โรคต่อมลูกหมากโต (prostatic enlargment)" 
										placeholder="โรคต่อมลูกหมากโต (prostatic enlargment)">
										โรคต่อมลูกหมากโต (prostatic enlargment)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_5" placeholder="โรคต่อมลูกหมากโต (prostatic enlargment)">
							</div>
						</td>
					</tr>

					<!-- 6 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_6" 
										value="โรคเอสแอลอี (SLE)" 
										placeholder="โรคเอสแอลอี (SLE)">
										โรคเอสแอลอี (SLE)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_6" placeholder="โรคเอสแอลอี (SLE)">
							</div>
						</td>
					</tr>

					<!-- 7 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_7" 
										value="โรคเอสแอลอี (SLE)" 
										placeholder="โรคเอสแอลอี (SLE)">
										โรคเอสแอลอี (SLE)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_7" placeholder="โรคเอสแอลอี (SLE)">
							</div>
						</td>
					</tr>

					<!-- 8 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_8" 
										value="โรคหัวใจและหลอดเลือด (cardiovascular disease)" 
										placeholder="โรคหัวใจและหลอดเลือด (cardiovascular disease)">
										โรคหัวใจและหลอดเลือด (cardiovascular disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_8" placeholder="โรคหัวใจและหลอดเลือด (cardiovascular disease)">
							</div>
						</td>
					</tr>

					<!-- 9 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_9" 
										value="โรคไต (kidney disease)" 
										placeholder="โรคไต (kidney disease)">
										โรคไต (kidney disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_9" placeholder="โรคไต (kidney disease)">
							</div>
						</td>
					</tr>

					<!-- 10 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_10" 
										value="โรคทางระบบประสาทและสมอง (neurologic and brain disease)" 
										placeholder="โรคทางระบบประสาทและสมอง (neurologic and brain disease)">
										โรคทางระบบประสาทและสมอง (neurologic and brain disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_10" placeholder="โรคทางระบบประสาทและสมอง (neurologic and brain disease)">
							</div>
						</td>
					</tr>

					<!-- 11 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_11" 
										value="โรคเลือด (hematologic disease)" 
										placeholder="โรคเลือด (hematologic disease)">
										โรคเลือด (hematologic disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_11" placeholder="โรคเลือด (hematologic disease)">
							</div>
						</td>
					</tr>

					<!-- 12 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_12" 
										value="โรคระบบทางเดินหายใจ (respiratory disease)" 
										placeholder="โรคระบบทางเดินหายใจ (respiratory disease)">
										โรคระบบทางเดินหายใจ (respiratory disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_12" placeholder="โรคระบบทางเดินหายใจ (respiratory disease)">
							</div>
						</td>
					</tr>

					<!-- 13 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_13" 
										value="โรคมะเร็ง (cancer)" 
										placeholder="โรคมะเร็ง (cancer)">
										โรคมะเร็ง (cancer)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_13" placeholder="โรคมะเร็ง (cancer)">
							</div>
						</td>
					</tr>

					<!-- 14 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_14" 
										value="โรคระบบทางเดินอาหาร (gastrointestinal diseases)" 
										placeholder="โรคระบบทางเดินอาหาร (gastrointestinal diseases)">
										โรคระบบทางเดินอาหาร (gastrointestinal diseases)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_14" placeholder="โรคระบบทางเดินอาหาร (gastrointestinal diseases)">
							</div>
						</td>
					</tr>

					<!-- 15 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_15" 
										value="โรคทางจิตเวช (psychetic disease)" 
										placeholder="โรคทางจิตเวช (psychetic disease)">
										โรคทางจิตเวช (psychetic disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_15" placeholder="โรคทางจิตเวช (psychetic disease)">
							</div>
						</td>
					</tr>

					<!-- 16 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_16" 
										value="โรคทางต่อมไร้ท่อ (endocrine disease)" 
										placeholder="โรคทางต่อมไร้ท่อ (endocrine disease)">
										โรคทางต่อมไร้ท่อ (endocrine disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_16" placeholder="โรคทางต่อมไร้ท่อ (endocrine disease)">
							</div>
						</td>
					</tr>

					<!-- 17 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_17" 
										value="โรคกระดูกและข้อ (joint skeleton muscular disease)" 
										placeholder="โรคกระดูกและข้อ (joint skeleton muscular disease)">
										โรคกระดูกและข้อ (joint skeleton muscular disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_17" placeholder="โรคกระดูกและข้อ (joint skeleton muscular disease)">
							</div>
						</td>
					</tr>
					
					<!-- 18 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_18" 
										value="โรคตับ (liver disease)" 
										placeholder="โรคตับ (liver disease)">
										โรคตับ (liver disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_18" placeholder="โรคตับ (liver disease)">
							</div>
						</td>
					</tr>

					<!-- 19 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_19" 
										value="โรคผิวหนัง (skin disease)" 
										placeholder="โรคผิวหนัง (skin disease)">
										โรคผิวหนัง (skin disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_19" placeholder="โรคผิวหนัง (skin disease)">
							</div>
						</td>
					</tr>

					<!-- 20 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_20" 
										value="โรคติดเชื้อเรื้อรัง (chronic infectious disease)" 
										placeholder="โรคติดเชื้อเรื้อรัง (chronic infectious disease)">
										โรคติดเชื้อเรื้อรัง (chronic infectious disease)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_20" placeholder="โรคติดเชื้อเรื้อรัง (chronic infectious disease)">
							</div>
						</td>
					</tr>

					

					<!-- 22 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
										id="history_problem_22" 
										value="อื่นๆ" 
										placeholder="อื่นๆ">
										อื่นๆ
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="history_problem_detail_22" placeholder="อื่นๆ">
							</div>
						</td>
					</tr>
				</tbody>
			</table>

		</div>

		<hr>

		<h3 style="margin-top: 10px">ประวัติการแพ้ยาและอื่นๆ (Allergy)</h3>
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
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
											id="allergy_1" 
											value="ปฏิเสธ (no)" 
											placeholder="ปฏิเสธ (no)">
											ปฏิเสธ (no)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="allergy_detail_1" placeholder="ปฏิเสธ (no)">
							</div>
						</td>
					</tr>

					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
											id="allergy_2" 
											value="แพ้ยา (drug allergy)" 
											placeholder="แพ้ยา (drug allergy)">
											แพ้ยา (drug allergy)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="allergy_detail_2" placeholder="แพ้ยา (drug allergy)">
							</div>
						</td>
					</tr>

					<!-- 3 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
											id="allergy_3" 
											value="แพ้อื่นๆ (other allergy)" 
											placeholder="แพ้อื่นๆ (other allergy)">
											แพ้อื่นๆ (other allergy)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="allergy_detail_3" placeholder="แพ้อื่นๆ (other allergy)">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<hr>

		<h3 style="margin-top: 10px">ประวัติผ่าตัด (Operation)</h3>
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
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
											id="operation_1" 
											value="ปฏิเสธ (no)" 
											placeholder="ปฏิเสธ (no)">
											ปฏิเสธ (no)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="operation_detail_1" placeholder="ปฏิเสธ (no)">
							</div>
						</td>
					</tr>

					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="checkbox" class="form-check-input big-checkbox input_data" 
											id="operation_2" 
											value="มี (yes)" 
											placeholder="มี (yes)">
											มี (yes)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" id="operation_detail_2" placeholder="มี (yes)">
							</div>
						</td>
					</tr>

				</tbody>
			</table>
		</div>

		<hr>

		<h3 style="margin-top: 10px">ประวัติประจำเดือน (หญิง 11-60 ปี) (Menstruation history)</h3>
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
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="mens"
											id="mens_1" 
											value="ประจำเดือนครั้งล่าสุด (LMP)" 
											placeholder="ประจำเดือนครั้งล่าสุด (LMP)">
											ประจำเดือนครั้งล่าสุด (LMP)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="mens_detail" id="mens_detail_1" placeholder="ประจำเดือนครั้งล่าสุด (LMP)">
							</div>
						</td>
					</tr>

					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="mens"
											id="mens_2" 
											value="หมดประจำเดือน (menopause)" 
											placeholder="หมดประจำเดือน (menopause)">
											หมดประจำเดือน (menopause)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="mens_detail" id="mens_detail_2" placeholder="หมดประจำเดือน (menopause)">
							</div>
						</td>
					</tr>


				</tbody>
			</table>

		</div>

		<hr>

		<h3 style="margin-top: 10px">การใช้สารเสพติดและดื่มสุรา (Alcoholic and drug addiction history)</h3>
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
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_1" 
											value="ปฏิเสธ (no)" 
											placeholder="ปฏิเสธ (no)">
											ปฏิเสธ (no)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_1" placeholder="ปฏิเสธ (no)">
							</div>
						</td>
					</tr>

					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_2" 
											value="เคยใช้แต่หยุดมาแล้ว" 
											placeholder="เคยใช้แต่หยุดมาแล้ว">
											เคยใช้แต่หยุดมาแล้ว
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_2" placeholder="เคยใช้แต่หยุดมาแล้ว">
							</div>
						</td>
					</tr>

					<!-- 3 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_3" 
											value="ดื่มทุกวัน" 
											placeholder="ดื่มทุกวัน">
											ดื่มทุกวัน
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_3" placeholder="ดื่มทุกวัน">
							</div>
						</td>
					</tr>

					<!-- 4 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_4" 
											value="2-3 ครั้งต่อสัปดาห์" 
											placeholder="2-3 ครั้งต่อสัปดาห์">
											2-3 ครั้งต่อสัปดาห์
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_4" placeholder="2-3 ครั้งต่อสัปดาห์">
							</div>
						</td>
					</tr>

					<!-- 5 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_5" 
											value="สัปดาห์ละครั้ง" 
											placeholder="สัปดาห์ละครั้ง">
											สัปดาห์ละครั้ง
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_5" placeholder="สัปดาห์ละครั้ง">
							</div>
						</td>
					</tr>

					<!-- 6 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_6" 
											value="2 ครั้งต่อเดือน" 
											placeholder="2 ครั้งต่อเดือน">
											2 ครั้งต่อเดือน
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_6" placeholder="2 ครั้งต่อเดือน">
							</div>
						</td>
					</tr>

					<!-- 7 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_7" 
											value="ตามเทศกาล" 
											placeholder="ตามเทศกาล">
											ตามเทศกาล
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_7" placeholder="ตามเทศกาล">
							</div>
						</td>
					</tr>

					<!-- 101 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="alcohol"
											id="alcohol_101" 
											value="อื่นๆ (other)" 
											placeholder="อื่นๆ (other)">
											อื่นๆ (other)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="alcohol_detail" id="alcohol_detail_101" placeholder="อื่นๆ (other)">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<hr>

		<h3 style="margin-top: 10px">การสูบบุหรี่ (Smoking)</h3>
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
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="smoke"
											id="smoke_1" 
											value="ปฏิเสธ (no)" 
											placeholder="ปฏิเสธ (no)">
											ปฏิเสธ (no)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="smoke_detail" id="smoke_detail_1" placeholder="ปฏิเสธ (no)">
							</div>
						</td>
					</tr>

					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="smoke"
											id="smoke_2" 
											value="เคยใช้แต่หยุดมาแล้ว (เดือน/ปี)" 
											placeholder="เคยใช้แต่หยุดมาแล้ว (เดือน/ปี)">
											เคยใช้แต่หยุดมาแล้ว (เดือน/ปี)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="smoke_detail" id="smoke_detail_2" placeholder="เคยใช้แต่หยุดมาแล้ว (เดือน/ปี)">
							</div>
						</td>
					</tr>

					<!-- 3 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="smoke"
											id="smoke_3" 
											value="มากกว่า 1 ซองต่อวัน (more than 1 pack per day)" 
											placeholder="มากกว่า 1 ซองต่อวัน (more than 1 pack per day)">
											มากกว่า 1 ซองต่อวัน (more than 1 pack per day)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="smoke_detail" id="smoke_detail_3" placeholder="มากกว่า 1 ซองต่อวัน (more than 1 pack per day)">
							</div>
						</td>
					</tr>

					<!-- 4 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="smoke"
											id="smoke_4" 
											value="ครึ่งซองขึ้นไปแต่ไม่เกินหนึ่งซองต่อวัน (half to one pack per day)" 
											placeholder="ครึ่งซองขึ้นไปแต่ไม่เกินหนึ่งซองต่อวัน (half to one pack per day)">
											ครึ่งซองขึ้นไปแต่ไม่เกินหนึ่งซองต่อวัน (half to one pack per day)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="smoke_detail" id="smoke_detail_4" placeholder="ครึ่งซองขึ้นไปแต่ไม่เกินหนึ่งซองต่อวัน (half to one pack per day)">
							</div>
						</td>
					</tr>

					<!-- 5 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="smoke"
											id="smoke_5" 
											value="ครึ่งซองขึ้นไปแต่ไม่เกินหนึ่งซองต่อวัน (half to one pack per day)" 
											placeholder="ครึ่งซองขึ้นไปแต่ไม่เกินหนึ่งซองต่อวัน (half to one pack per day)">
											น้อยกว่าครึ่งซองต่อวัน (less than half pack per day)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="smoke_detail" id="smoke_detail_5" placeholder="น้อยกว่าครึ่งซองต่อวัน (less than half pack per day)">
							</div>
						</td>
					</tr>

					<!-- 101 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="smoke"
											id="smoke_101" 
											value="อื่นๆ (other)" 
											placeholder="อื่นๆ (other)">
											อื่นๆ (other)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="smoke_detail" id="smoke_detail_101" placeholder="อื่นๆ (other)">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<hr>

		<h3 style="margin-top: 10px">ประวัติโรคในครอบครัวที่เกี่ยวข้อง (Family history)</h3>
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
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="family"
											id="family_1" 
											value="ปฏิเสธ (no)" 
											placeholder="ปฏิเสธ (no)">
											ปฏิเสธ (no)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="mens_detail" id="family_detail_1" placeholder="ปฏิเสธ (no)">
							</div>
						</td>
					</tr>

					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="family"
											id="family_2" 
											value="มี (yes)" 
											placeholder="มี (yes)">
											มี (yes)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="mens_detail" id="family_detail_2" placeholder="มี (yes)">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<hr>

		<h3 style="margin-top: 10px">ปัญหาด้านอารมณ์ จิตสังคม เศรษฐกิจ (Emotional, Psychologic and Economic problem)</h3>
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
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="emotion"
											id="emotion_1" 
											value="ปฏิเสธ (no)" 
											placeholder="ปฏิเสธ (no)">
											ปฏิเสธ (no)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="emotion_detail" id="emotion_detail_1" placeholder="ปฏิเสธ (no)">
							</div>
						</td>
					</tr>
					<!-- 2 -->
					<tr>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group form-inline">
								<div class="form-check div-checkbox" >
									<label class="form-control-label form-check-label big-checkbox-label" >
										<input type="radio" class="form-check-input big-checkbox input_data" 
											name="emotion"
											id="emotion_2" 
											value="มี (yes)" 
											placeholder="มี (yes)">
											มี (yes)
									</label>
								</div>
							</div>
						</td>
						<td style="padding: 0px; vertical-align: middle; border-top: 0px solid #dee2e6;">
							<div class="form-group div-text" style="margin-bottom: 0rem;">
								<input type="text" class="form-control input_data" name="emotion_detail" id="emotion_detail_2" placeholder="มี (yes)">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>


		<div class="mt-4">
			<div class="">
				<button type="button" class="form-control btn btn-success" onclick="save_tab_data('history_tab')">บันทึก</button>
			</div>
		</div>
	</div>
</div>
