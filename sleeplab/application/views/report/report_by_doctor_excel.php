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
                    <td>ลำดับ</td>
                    <td>วันที่</td>
                    <td>ชื่อ-สกุล คนไข้</td>
                    <td>hn</td>
                    <td>อายุ (ปี)</td>
                    <td>โทร</td>
                    <td>ตรวจ</td>
                    <td>ห้อง</td>
                    <td>แพทย์</td>
                </tr>
                <?php
                    $count = 0;
                    foreach($bookings as $booking){
                        $count++;
                ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $booking->booking_date; ?></td>
                            <td><?php echo $booking->fname . " " . $booking->lname; ?></td>
                            <td><?php echo $booking->hn; ?></td>
                            <td><?php echo !empty($booking->birth_date) && ($booking->birth_date != 0000-00-00) ? cal_age_year($booking->birth_date) : "ไม่ระบุ" ; ?></td>
                            <td><?php echo $booking->tel_1; ?> <?php if(!empty($booking->tel_2)) echo ", " . $booking->tel_2; ?></td>
                            <td><?php echo $booking->test_type; ?></td>
                            <td><?php echo $booking->operation_room; ?></td>
                            <td><?php echo $booking->doctor; ?></td>
                        </tr>
                <?php
                    }
                ?>
        </table>
    </body>
</html>