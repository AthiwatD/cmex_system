<?php
	function getExamLabResult($checkup, $datas){
		$txt_html = '<p align="center"><h1>สรุปผลการตรวจทางห้องปฏิบัติการ (Laboratory Result)</h1></p>';
		if(!empty($datas)){
			$txt_html .= exam_lab_result($datas);
		}
		return $txt_html;
	}

	function exam_lab_result($datas){
		$txt = '';
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

	