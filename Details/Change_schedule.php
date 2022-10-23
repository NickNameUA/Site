<?php
session_start();
include "Db.php";
$do = $_POST['save'];
if ($do == 'Зберегти час'){
	$whileStatus = 'Start';
	$whileStatus1 = '';
	$count = 1;
	while ($whileStatus1 != 'Finish8'){
		if ($count == 9){
			$whileStatus = 'Finish';
			$count = 1;
		}else{
			$whileStatus1 = $whileStatus . $count;
			$time = $_POST[$whileStatus1];
			if ($time != NULL){
				mysqli_query($connectSchedule, "UPDATE `time` SET `$count` = '$time' WHERE `time`.`Time` = '$whileStatus';");
			};
			$count++;
		};
	};
}elseif($do == 'Зберегти розклад'){
	$count = 1;
	$day = 'monday';
	$whileDay = ''; 
	while ($whileDay != 'friday8'){
		if ($count == 9){
			switch ($day){
				case 'monday':
				$day = 'tuesday';
				break;
				case 'tuesday':
				$day = 'wednesday';
				break;
				case 'wednesday':
				$day = 'thursday';
				break;
				case 'thursday':				
				$day = 'friday';
				break;
			};
			echo'<br>';
			$count = 1;
		}else{
			$whileDay = $day . $count;
			$lesson = $_POST[$whileDay];
			if ($lesson != NULL){
				mysqli_query($connectSchedule, "UPDATE `class10b` SET `$count` = '$lesson' WHERE `class10b`.`Day` = '$day';");
			};
			$count++;
		}
	};
}
header('Location: /ForStudents.php');
exit;