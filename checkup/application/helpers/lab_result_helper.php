<?php
	function getLabResults($checkup, $datas, $record_files){
		$txt_html = '<p align="center"><h1>ผลการตรวจทางห้องปฏิบัติการ (Laboratory Result)</h1></p>';
		if(!empty($datas)){
			$txt_html .= lab_results($datas, $record_files);
		}
		return $txt_html;
	}

	function lab_results($datas, $record_files){
		
		$txt = '';
		// $txt .= '<p align="center">';
		// for($i=0;$i<sizeof($record_files);$i++){
		// 	if($record_files[$i]->tab_id == "lab"){
		// 		$txt .= '<img src="' . base_url() . 'uploads/lab/' . $record_files[$i]->file_name . '" ><br>';
		// 	}
		// }
		// $txt .= '</p>';
		if(!empty($datas)){
			
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
					if($datas[$i]->value != "ปกติ (Normal)"){
						$txt .= '<tr>';
						$txt .= '<td align="center" style="width:10%;">' . $num_show .'</td>';
						$num_show++;
						$txt .= '<td style="width:40%;">' . $datas[$i]->placeholder .'</td>';
						$txt_add = false;
						while(($i<sizeof($datas)) && ($datas[$i]->id != "lab_" . $val[1] . "_result")){
							$tmp_val = explode("_",$datas[$i]->id);
							if($tmp_val[1] > $val[1]){
								$txt_add = true;
								break;
							}
							$i++;
						}
						if($txt_add == false){
							if(!empty($datas[$i]->value)){
								$txt .= '<td style="width:50%;">' . $datas[$i]->value[0] .'</td>';
							}
							else{
								$txt .= '<td style="width:50%;">&nbsp;</td>';
							}
						}else{
							$txt .= '<td style="width:50%;">&nbsp;</td>';
						}
						$txt .= '</tr>';
						
					}
				}
				$count++;
			}
		}
		
		$txt .= '</tbody>
            </table>';

		return $txt;
	}

	