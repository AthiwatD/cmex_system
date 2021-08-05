<?php
	function getExamLabResult($datas, $record_files){
		$txt_html = '<p align="center"><h1>สรุปผลการตรวจทางห้องปฏิบัติการ (Laboratory Result)</h1></p>';
		
		if(!empty($datas)){
			$txt_html .= exam_lab_result($datas, $record_files);
		}
		else{
			$txt_html .= "No Datas";
		}
		return $txt_html;
	}

	function exam_lab_result($datas, $record_files){
		$txt = '';

		if(!empty($record_files)){
			if(is_array($record_files)){
				$txt .= '<p align="center">';
				for($i=0;$i<sizeof($record_files);$i++){
					if($record_files[$i]->tab_id == "lab"){
						$txt .= '<img src="' . base_url() . 'uploads/lab/' . $record_files[$i]->file_name . '" ><br>';
					}
				}
				$txt .= '</p>';
			}
			else{
				$txt .= '<p align="center">';
				if($record_files->tab_id == "lab"){
					$txt .= '<img src="' . base_url() . 'uploads/lab/' . $record_files->file_name . '" ><br>';
				}
				$txt .= '</p>';
			}
		}
		else{

		}
		
		if(!empty($datas)){
			$txt .= '<p align="justify">';
			// $txt .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			if(is_array($datas)){
				if(is_array($datas[0]->value)){
					for($i=0;$i<sizeof($datas[0]->value);$i++){
						$txt .= $datas[0]->value[$i] . "<br>";
					}
				}
				else{
					$txt .= $datas[0]->value . "<br>";
				}
			}
			else{

				if(is_array($datas->value)){
					for($i=0;$i<sizeof($datas->value);$i++){
						$txt .= $datas->value[$i] . "<br>";
					}
				}
				else{
					$txt .= $datas->value . "<br>";
				}
				// $txt .= $datas->id;
			}
		}
		else{
			$txt .= "ไม่มีข้อมูล";
		}
		$txt .= '</p>';
		return $txt;
	}

	