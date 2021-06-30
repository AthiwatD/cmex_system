<?php
	function getExamResult($checkup, $datas){
		$txt_html = '<p align="center"><h1>ผลการตรวจร่างกาย (Physical Examination Result)</h1></p>';
		if(!empty($datas)){
			$txt_html .= exam_result($datas);
		}
		return $txt_html;
	}

	function exam_result($datas){
		
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
			$val = explode("_",$datas[$i]->id);
			if((!empty($datas[$i]->checked)) && ($datas[$i]->checked == "true")){
				if(explode(" ", $datas[$i]->value)[1] != "ปกติ"){
					$txt .= '<tr>';
					$txt .= '<td align="center" style="width:10%;">' . $num_show .'</td>';
					$txt .= '<td style="width:40%;">' . $datas[$i]->value .'</td>';
					$txt_add = false;
					while(($i<sizeof($datas)) && ($datas[$i]->id != $val[0] . "_" . $val[1] . "_detail")) {
						$tmp_val = explode("_",$datas[$i]->id);
						if($tmp_val[1] != $val[1]){
							$txt_add = true;
							break;
						}


						$i++;
					}
					if($txt_add == false){
						if(!empty($datas[$i]->value)){
							$txt .= '<td style="width:50%;">' . $datas[$i]->value .'</td>';
						}
						else{
							$txt .= '<td style="width:50%;">&nbsp;</td>';
						}
					}else{
						$txt .= '<td style="width:50%;">&nbsp;</td>';
					}

					$txt .= '</tr>';
					$num_show++;
				}
			}
			$count++;
		}
		$txt .= '</tbody>
            </table>';
		return $txt;
	}

	