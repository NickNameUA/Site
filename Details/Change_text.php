<?php
session_start();
$but = $_POST['do'];
include "Db.php";
switch($but){
  case 'Зберегти':
	foreach($_POST as $name => $key){
		mysqli_query($connectText, "UPDATE `maininfo` SET `Text` = '$key' WHERE `maininfo`.`textName` = '$name';");
	}
	header('Location: /MainInfo.php');
	exit;
	break;
}