<?php
	function getMedicalHistory($checkup, $datas){
		$txt_html = '<p align="center"><h1>ประวัติสุขภาพ (Medical History)</h1></p>';
		$txt_html .= current_medical_problem($datas);
		$txt_html .= "<br>";
		$txt_html .= allergy($datas);
		$txt_html .= "<br>";
		$txt_html .= operation($datas);
		if($checkup->sex == "หญิง"){
			$txt_html .= "<br>";
			$txt_html .= mens($datas);
		}
		$txt_html .= "<br>";
		$txt_html .= alcohol($datas);
		$txt_html .= "<br>";
		$txt_html .= smoke($datas);
		$txt_html .= "<br>";
		$txt_html .= family($datas);
		$txt_html .= "<br>";
		$txt_html .= emotion($datas);
		return $txt_html;
	}

	function current_medical_problem($datas){
		$txt = "";
		$txt .= '<H2>โรคประจำตัว (Current medical problem)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:10%;">ลำดับ</th>
							<th align="center" style="width:40%;">โรคประจำตัว</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			$arr = explode("_", $datas[$i]->id);

			if(($arr[0] == "history") && ($arr[1] == "problem")){ // $datas[$i]->id == "history_problem_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td align="center" style="width:10%;">' . $num_show .'</td>';
					$txt .= '<td style="width:40%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	function allergy($datas){
		$txt = "";
		$txt .= '<H2>ประวัติการแพ้ยาและอื่นๆ (Allergy)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:10%;">ลำดับ</th>
							<th align="center" style="width:40%;">รายการ</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			if($datas[$i]->id == "allergy_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td align="center" style="width:10%;">' . $num_show .'</td>';
					$txt .= '<td style="width:40%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	function operation($datas){
		$txt = "";
		$txt .= '<H2>ประวัติผ่าตัด (Operation)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:10%;">ลำดับ</th>
							<th align="center" style="width:40%;">รายการ</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			if($datas[$i]->id == "operation_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td align="center" style="width:10%;">' . $num_show .'</td>';
					$txt .= '<td style="width:40%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	function mens($datas){
		$txt = "";
		$txt .= '<H2>ประวัติประจำเดือน (หญิง 11-60 ปี) (Menstruation history)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:50%;">รายการ</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			if($datas[$i]->id == "mens_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td style="width:50%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	function alcohol($datas){
		$txt = "";
		$txt .= '<H2>การใช้สารเสพติดและดื่มสุรา (Alcoholic and drug addiction history)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:50%;">รายการ</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			if($datas[$i]->id == "alcohol_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td style="width:50%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	function smoke($datas){
		$txt = "";
		$txt .= '<H2>การสูบบุหรี่ (Smoking)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:50%;">รายการ</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			if($datas[$i]->id == "smoke_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td style="width:50%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	function family($datas){
		$txt = "";
		$txt .= '<H2>ประวัติโรคในครอบครัวที่เกี่ยวข้อง (Family history)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:50%;">รายการ</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			if($datas[$i]->id == "family_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td style="width:50%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	function emotion($datas){
		$txt = "";
		$txt .= '<H2>ปัญหาด้านอารมณ์ จิตสังคม เศรษฐกิจ (Emotional, Psychologic and Economic problem)</h2>';
		$txt .= '<table border="1" cellspacing="0" cellpadding="1" >
					<thead>
						<tr>
							<th align="center" style="width:50%;">รายการ</th>
							<th align="center" style="width:50%;">รายละเอียด</th>
						</tr>
					</thead>
					<tbody>';
		
		$count = 1;
		$num_show = 1;
		for($i=0;$i<sizeof($datas);$i+=2){
			if($datas[$i]->id == "emotion_" . $count ){

				if(($datas[$i]->checked == "true")){
					$txt .= '<tr>';
					$txt .= '<td style="width:50%;">' . $datas[$i]->value .'</td>';
					$txt .= '<td style="width:50%;">' . $datas[$i+1]->value .'</td>';
					$txt .= '</tr>';
					$num_show++;
				}
				$count++;
			}
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}
