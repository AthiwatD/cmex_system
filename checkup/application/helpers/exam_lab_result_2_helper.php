<?php
	function getExamLabResult2($checkup, $datas, $record_files){
		$txt_html = '<p align="center"><h1>สรุปผลการตรวจทางห้องปฏิบัติการ (Laboratory Result)</h1></p>';
		if(!empty($datas)){
			$txt_html .= exam_lab_result_2($datas, $record_files);
		}
		return $txt_html;
	}

	function exam_lab_result_2($datas, $record_files){
		$txt = '';
		
		if(!empty($record_files)){
			$txt .= '<p align="center">';
			for($i=0;$i<sizeof($record_files);$i++){
				if($record_files[$i]->tab_id == 'lab'){
					// $txt .= '<img src="' . base_url() . 'uploads/lab/' . $record_files[$i]->file_name . '" ><br>'; //40_60dd4705c2aa3.png
					// $txt .= '<img src="' . base_url() . 'uploads/lab/40_60dd4705c2aa3.png' . '" ><br>';
					$txt .= '<img src="' . $record_files[$i]->file_path . '" ><br>';
				}
			}
			$txt .= '</p>';
			// $txt .= "Have record_files";
		}
		else{
			// $txt .= "No record_files";
		}

		$txt .= '<p align="justify">';
		// $txt .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		if(is_array($datas[0]->value)){
			for($i=0;$i<sizeof($datas[0]->value);$i++){
				$txt .= $datas[0]->value[$i] . "<br>";
			}
		}
		else{
			$txt .= $datas[0]->value . "<br>";
		}
		$txt .= '</p>';
		return $txt;
	}

	