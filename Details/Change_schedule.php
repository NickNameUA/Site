<?php
session_start();
include "Db.php";
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
		mysqli_query($connectSchedule, "UPDATE `time` SET `$count` = '$time' WHERE `time`.`Time` = '$whileStatus';");
		$count++;
	};
}
header('Location: /ForStudents.php');
exit;	