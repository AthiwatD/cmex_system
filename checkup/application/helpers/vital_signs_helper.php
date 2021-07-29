<?php
	function getVitalSigns($checkup, $datas){
		$txt_html = '<p align="center"><h1>การตรวจสัญญาณชีพ (Vital signs)</h1></p>';
		if(!empty($datas)){
			$txt_html .= vital_signs($datas);
		}
		return $txt_html;
	}

	function vital_signs($datas){
		
		$txt = "";

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
		for($i=0;$i<sizeof($datas);$i++){
			$txt .= '<tr>';
			$txt .= '<td align="center" style="width:10%;">' . $num_show .'</td>';
			$txt .= '<td style="width:40%;">' . $datas[$i]->alt .'</td>';
			$txt .= '<td style="width:50%;">' . $datas[$i]->value .'</td>';
			$txt .= '</tr>';
			$num_show++;
			$count++;
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	