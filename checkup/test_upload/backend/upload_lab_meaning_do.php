<?php
    include "../config_db.php";

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);
    
    //require_once __DIR__.'SimpleXLSX.php';
    require_once '../SimpleXLSX.php';

    if ( isset($_POST["submit"]) ) {

        if ( isset($_FILES["lab_meaning_file"])) {

                //if there was an error uploading the file
            if ($_FILES["lab_meaning_file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["lab_meaning_file"]["error"] . "<br />";

            }
            else {


                    //Print file details
                echo "Upload: " . $_FILES["lab_meaning_file"]["name"] . "<br />";
                echo "Type: " . $_FILES["lab_meaning_file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["lab_meaning_file"]["size"] / 1024) . " Kb<br />";
                echo "Temp file: " . $_FILES["lab_meaning_file"]["tmp_name"] . "<br />";



                // $file = fopen("../upload/" . $basename,"r");
                // date_default_timezone_set('Asia/Bangkok');
                // $create_time = date('Y-m-d H:i:s');

                if ( $xlsx = SimpleXLSX::parse($_FILES["lab_meaning_file"]['tmp_name'])) {
                        
					$sql = "TRUNCATE TABLE chkup_lab_group";      
					// echo $sql . "<br>";
					$result = mysqli_query($db_connect, $sql);  
					// echo $result . "<br>";
					
					$sql = "TRUNCATE TABLE chkup_lab_meaning";  
					// echo $sql . "<br>";					
					$result = mysqli_query($db_connect, $sql);  
					// echo $result . "<br>";
					
					for($sheet=0;$sheet<sizeof($xlsx->sheetNames());$sheet++){
						// echo $sheet . "<br>";
						$sql = "INSERT INTO chkup_lab_group 
								VALUES (NULL, '" . $xlsx->sheetName($sheet) . "')";
						// echo $sql . "<br>";
						
						//$result2 = mysqli_query($db_connect, $sql);      
						//echo $result2 . "<br>";
						
						if (mysqli_query($db_connect, $sql)) {
							$lab_group_id = mysqli_insert_id($db_connect);
							// echo "New record created successfully. Last inserted ID is: " . $lab_group_id;
						} else {
							// echo "Error: " . $sql . "<br>" . mysqli_error($db_connect);
						}

						
						//$lab_group_id = mysqli_insert_id($db_connect);
						//echo $lab_group_id . "<br>";
						
						echo '<h2>'. $xlsx->sheetName($sheet) .'</h2>';
						echo '<table border=1>';
						$sheet_detail_arr[$sheet] = array();
						foreach($xlsx->rows($sheet) as $index_sheet => $row){
                            if($index_sheet != 0){
                                echo "<tr>";
                                $sheet_detail_arr[$sheet][$index_sheet] = array();
                                echo "<td>";
                                echo $lab_group_id;
                                echo "</td>";
                                
                                array_push($sheet_detail_arr[$sheet][$index_sheet],$lab_group_id);
                                foreach($row as $data){
                                    echo "<td>";
                                    echo $data;
                                    echo "</td>";
                                    array_push($sheet_detail_arr[$sheet][$index_sheet],$data);
                                }
                                echo "</tr>";

                                $sql = "INSERT INTO chkup_lab_meaning
                                                    (lab_meaning_id, lab_group_id, lab_name, normal_min, normal_max,
                                                    normal_male_min, normal_male_max, normal_female_min, normal_female_max, unit,
                                                    low_result, high_result, abnormal_result) 
                                        VALUES (NULL"; // . $xlsx->sheetName($sheet) . "')";
                                for($j=0;$j<sizeof($sheet_detail_arr[$sheet][$index_sheet]);$j++){
                                    $sql .= ", '" . $sheet_detail_arr[$sheet][$index_sheet][$j] . "'";
                                }
                                $sql .= ");";
                                echo $sql . "<br>";

                                $result2 = mysqli_query($db_connect, $sql);      
                                if(!$result2){
                                    echo "ERROR insert lab meaning<br>";
                                }
                            }
						}
						
						echo '</table>';
						echo "<br><br><br>";
						
						
					}
						
						
        
                } else {
                    echo SimpleXLSX::parseError();
                }

                

                $name = pathinfo($_FILES["lab_meaning_file"]['name'], PATHINFO_FILENAME);
                $extension = pathinfo($_FILES["lab_meaning_file"]['name'], PATHINFO_EXTENSION);
                $basename = $name . '.' . $extension;
                    //if file already exists
                if (file_exists("../upload/" . $_FILES["lab_meaning_file"]["name"])) {
                    //echo $_FILES["lab_meaning_file"]["name"] . " already exists. ";
                    
                    $i = 1;
                    $new_name = $name . "_" . $i;
                    while(file_exists("../upload/" . $new_name . '.' . $extension)) {
                        $new_name = $name . "_" . $i;
                        $i++;
                    }
                    $basename = $new_name . '.' . $extension;
                }
                move_uploaded_file($_FILES["lab_meaning_file"]["tmp_name"], "../upload/" . $basename);
                echo "Stored in: " . "../upload/" . $basename . "<br />";
                
                // fclose($file);
                echo "##### FINISH INSERT #####<br>";
				
            }
			
        } else {
                echo "No file selected <br />";
        }
    }

?>