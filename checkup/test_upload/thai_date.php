<?php

function convert_to_thai_date_full($date) {
    
    $date = explode("-",$date);
    $year =  doubleval($date[0]) + 543;
    
	$month = 0;
    if($date[1] == "01"){
        $month = "มกราคม";
    }
    if($date[1] == "02"){
        $month = "กุมภาพันธ์";
    }
    if($date[1] == "03"){
        $month = "มีนาคม";
    }
    if($date[1] == "04"){
        $month = "เมษายน";
    }
    if($date[1] == "05"){
        $month = "พฤษภาคม";
    }
    if($date[1] == "06"){
        $month = "มิถุนายน";
    }
    if($date[1] == "07"){
        $month = "กรกฎาคม";
    }
    if($date[1] == "08"){
        $month = "สิงหาคม";
    }
    if($date[1] == "09"){
        $month = "กันยายน";
    }
    if($date[1] == "10"){
        $month = "ตุลาคม";
    }
    if($date[1] == "11"){
        $month = "พฤศจิกายน";
    }
    if($date[1] == "12"){
        $month = "ธันวาคม";
    }

    return $date[2] . " " . $month . " " . $year;
}

function convert_to_thai_date($date) {
    
    $date = explode("-",$date);
    $year = $date[0] + 543;
	$month = 0;
    if($date[1] == "01"){
        $month = "ม.ค.";
    }
    if($date[1] == "02"){
        $month = "ก.พ.";
    }
    if($date[1] == "03"){
        $month = "มี.ค.";
    }
    if($date[1] == "04"){
        $month = "เม.ย.";
    }
    if($date[1] == "05"){
        $month = "พ.ค.";
    }
    if($date[1] == "06"){
        $month = "มิ.ย.";
    }
    if($date[1] == "07"){
        $month = "ก.ค.";
    }
    if($date[1] == "08"){
        $month = "ส.ค.";
    }
    if($date[1] == "09"){
        $month = "ก.ย.";
    }
    if($date[1] == "10"){
        $month = "ต.ค.";
    }
    if($date[1] == "11"){
        $month = "พ.ย.";
    }
    if($date[1] == "12"){
        $month = "ธ.ค.";
    }

    return $date[2] . " " . $month . " " . $year;
}

function get_thai_day($date){
    $date = explode("-",$date);
    return $date[2];
}

function get_thai_month_full($date){
    $date = explode("-",$date);
	//$month = 0;
    if($date[1] == "01"){
        $month = "มกราคม";
    }
    if($date[1] == "02"){
        $month = "กุมภาพันธ์";
    }
    if($date[1] == "03"){
        $month = "มีนาคม";
    }
    if($date[1] == "04"){
        $month = "เมษายน";
    }
    if($date[1] == "05"){
        $month = "พฤษภาคม";
    }
    if($date[1] == "06"){
        $month = "มิถุนายน";
    }
    if($date[1] == "07"){
        $month = "กรกฎาคม";
    }
    if($date[1] == "08"){
        $month = "สิงหาคม";
    }
    if($date[1] == "09"){
        $month = "กันยายน";
    }
    if($date[1] == "10"){
        $month = "ตุลาคม";
    }
    if($date[1] == "11"){
        $month = "พฤศจิกายน";
    }
    if($date[1] == "12"){
        $month = "ธันวาคม";
    }
    return $month;
}

function get_thai_month_full_by_month($month){
	//$month = 0;
    if(($month == "01") || ($month == "1")){
        $month = "มกราคม";
    }
    if(($month == "02")|| ($month == "2")){
        $month = "กุมภาพันธ์";
    }
    if(($month == "03")|| ($month == "3")){
        $month = "มีนาคม";
    }
    if(($month == "04")|| ($month == "4")){
        $month = "เมษายน";
    }
    if(($month == "05")|| ($month == "5")){
        $month = "พฤษภาคม";
    }
    if(($month == "06")|| ($month == "6")){
        $month = "มิถุนายน";
    }
    if(($month == "07")|| ($month == "7")){
        $month = "กรกฎาคม";
    }
    if(($month == "08")|| ($month == "8")){
        $month = "สิงหาคม";
    }
    if(($month == "09")|| ($month == "9")){
        $month = "กันยายน";
    }
    if($month == "10"){
        $month = "ตุลาคม";
    }
    if($month == "11"){
        $month = "พฤศจิกายน";
    }
    if($month == "12"){
        $month = "ธันวาคม";
    }
    return $month;
}

function get_thai_year($date){
    $date = explode("-",$date);
    return $date[0] + 543;
}

function convert_to_two_digit($month){
    if($month == "1"){
        $month = "01";
    }
    if($month == "2"){
        $month = "02";
    }
    if($month == "3"){
        $month = "03";
    }
    if($month == "4"){
        $month = "04";
    }
    if($month == "5"){
        $month = "05";
    }
    if($month == "6"){
        $month = "06";
    }
    if($month == "7"){
        $month = "07";
    }
    if($month == "8"){
        $month = "08";
    }
    if($month == "9"){
        $month = "09";
    }
    return $month;
}
?>