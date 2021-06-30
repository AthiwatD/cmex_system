<?php
	function getSuggest($checkup, $datas){
		$txt_html = '<p align="center"><h1>คำแนะนำ</h1></p>';
		if(!empty($datas)){
			$txt_html .= suggest($datas);
		}
		return $txt_html;
	}

	function suggest($datas){
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

	