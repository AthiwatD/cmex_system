<?php
	$rn=md5(rand());
	$capt_code=substr($rn,0,6);
	header('Content-Type: image/png');
	$img=imagecreatetruecolor(200, 35);
	$bg_color=imagecolorallocate($img, 231, 100, 189);
	$txt_color=imagecolorallocate($img,255,255,255);
	imagefilledrectangle($img, 0, 0, 200, 38, $bg_color);
	$font=dirname(__FILE__).'/arial.ttf';
	imagettftext($img,20,060,28,$txt_color,$font,$capt_code);
	imagepng($img);
	imagedestroy($img);
?>