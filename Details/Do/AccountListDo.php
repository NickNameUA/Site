<?php
session_start();
include "..\Get\Db.php";
$id = $_POST['id'];
$but = $_POST['Do'];
switch($but) {
	case 'Видалити':
		mysqli_query($connect, "DELETE FROM `logdata` WHERE `logdata`.`id` = '$id';");
		header('Location: \AccountList.php');
		exit;
	break;
	case 'Створити':
		$_SESSION['StatusCreate'] = $_POST['status'];
		header('Location: \LogUp.php');
		exit;
	break;
	case 'Зберегти':
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		if (trim($firstname, " ") == ''){
			$_SESSION['Error'] = 'Ви не ввели імені';
			header('Location: \AccountList.php');
			exit;
		};
		if (trim($lastname, " ") == ''){
				$_SESSION['Error'] = 'Ви не ввели фамілію';
				header('Location: \AccountList.php');
				exit;
		};
		if (trim($email, " ") == ''){
				$_SESSION['Error'] = 'Ви не ввели емейл';
				header('Location: \AccountList.php');
				exit;
		};
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$_SESSION['Error'] = "Емайл адрес вказаний невірно";
			header('Location: \AccountList.php');
			exit;
		} 
		if (trim($phone, " ") == ''){
			$_SESSION['Error'] = 'Ви не ввели номер телефону';
			header('Location: \AccountList.php');
			exit;
		};
		if (strlen($phone) < 10){
			$_SESSION['Error'] = 'Ви ввели не правильний номер телефону';
			header('Location: \AccountList.php');
			exit;
		};
		mysqli_query($connect, "UPDATE `logdata` SET `FirstName` = '$firstname', `LastName` = '$lastname', `Email` = '$email', `Phone` = '$phone' WHERE `logdata`.`id` = '$id';");
		header('Location: \AccountList.php');
		exit;
	break;
};