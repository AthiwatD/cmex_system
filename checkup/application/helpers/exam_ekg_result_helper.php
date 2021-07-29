<?php
	function getExamEkgResult($checkup, $datas, $record_files){
		$txt_html = '<p align="center"><h1>ผลการตรวจคลื่นไฟฟ้าหัวใจ (Electrocardiography)</h1></p>';
		if(!empty($datas)){
			$txt_html .= exam_ekg_result($datas, $record_files);
		}
		return $txt_html;
	}

	function exam_ekg_result($datas, $record_files){
		$txt = '';
		
		$txt .= '<p align="center">';
		for($i=0;$i<sizeof($record_files);$i++){
			if($record_files[$i]->tab_id == "ekg"){
				// $txt .= '<img src="' . base_url() . 'uploads/ekg/' . $record_files[$i]->file_name . '" ><br>';
				$txt .= '<img src="' . $record_files[$i]->file_path . '" ><br>';
			}
		}
		$txt .= '</p>';

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

	