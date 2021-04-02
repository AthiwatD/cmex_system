<?php
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=" . $file_name . ".xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>devbanban</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
    <body>
                    <table class="table" border="1">
                            <tr>
                                <th>หัวข้อ</th>
                                <th>ผลลัพธ์</th>
                            </tr>
                            <tr>
                                <th>ระยะเวลารอคิวตรวจเฉลี่ย (วัน)</th>
                                <th><?php echo number_format($patient_waiting_time_to_admit->waiting_time_to_admit,2); ?> วัน</th>
                            </tr>
                            
                            <tr>
                                <th>อัตราผู้ป่วยยกเลิก/ผิดนัด/ไม่มา admit</th>
                                <?php
                                    $p_changed = ($patient_changed->patient_count/$patient_all_booking->booking_count) * 100;
                                ?>
                                <th><?php echo number_format($p_changed, 2); ?> %</th>
                            </tr>

                            <tr>
                                <th>จำนวนผู้ป่วยที่เลื่อนตรวจเนื่องจากอุบัติการณ์ทางเครื่องมือ</th>
                                <th><?php echo $changed_because_instrument->booking_count; ?> ครั้ง</th>
                            </tr>

                            <tr>
                                <th>อัตราการกลับเข้ามา PAP titration</th>
                                <?php
                                    $p_titrat = ($patient_pap_titration->booking_count/$patient_all_booking->booking_count) * 100;
                                ?>
                                <th><?php echo number_format($p_titrat,2); ?> %</th>
                            </tr> 

                            <tr>
                                <th valign="top">สถิติผู้ป่วยตามสาเหตุการยกเลิก</th>
                                <th>
                                    <?php 
                                        $count = 0;
                                        foreach($patient_change_reasons as $p){
                                            $count++;
                                            echo $p->booking_count . " " . $p->change_reason . "<br>";
                                        }
                                    ?>
                                </th>
                            </tr>


                            <tr>
                                <td>จำนวนผู้ป่วยที่ถูกส่งใบ request และทำการนัดภายใน (<?php echo $days; ?> วัน)</td>
                                <td><?php echo $patient_admit_within_days->patient_count; ?> ราย</td>
                            </tr>
                            <tr>
                                <td>จำนวนผู้ป่วยยกเลิก admit ทั้งหมด</td>
                                <td><?php echo $patient_changed->patient_count; ?> ราย</td>
                            </tr>
                            <tr>
                                <td>จำนวนผู้ป่วยที่ถูกนัดทั้งหมด(ทั้งตรวจ+ไม่ตรวจ) </td>
                                <td><?php echo $patient_all_booking->booking_count; ?> ราย</td>
                            </tr>
                            <tr>
                                <td>จำนวนการกลับเข้ามา PAP titration</td>
                                <td><?php echo $patient_pap_titration->booking_count; ?> ราย</td>
                            </tr> 
                    </table>
    </body>
</html>