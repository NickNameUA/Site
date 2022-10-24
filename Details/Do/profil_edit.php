<?php
session_start();
$but = $_POST['login'];
include "..\Get\Db.php";
switch($but){
  case 'Видалити профіль':
    unset ($_SESSION['StatusCreate']);
		$ssesion_name = $_SESSION['Login'];
    mysqli_query($connect, "DELETE FROM `logdata` WHERE `logdata`.`Email` = '$ssesion_name';");
		header('Location: \LogIn.php');
    exit;
    break;
  case 'Вийти з профіля':
    unset ($_SESSION['StatusCreate']);
		unset ($_SESSION['Login']);
		header('Location: \LogIn.php');
    exit;
    break;
  case 'Зберегти зміни':
		$ssesion_name = $_SESSION['Login'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if (trim($firstname, " ") == ''){
      $_SESSION['Error'] = 'Ви не ввели імені';
      header('Location: \Profile.php');
      exit;
  };
  if (trim($lastname, " ") == ''){
      $_SESSION['Error'] = 'Ви не ввели фамілію';
      header('Location: \Profile.php');
      exit;
  };
  if (trim($email, " ") == ''){
      $_SESSION['Error'] = 'Ви не ввели емейл';
      header('Location: \Profile.php');
      exit;
  };
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['Error'] = "Емайл адрес вказаний невірно";
    header('Location: \Profile.php');
    exit;
  } 
  if (trim($phone, " ") == ''){
    $_SESSION['Error'] = 'Ви не ввели номер телефону';
    header('Location: \Profile.php');
    exit;
  };
  if (strlen($phone) < 10){
    $_SESSION['Error'] = 'Ви ввели не правильний номер телефону';
    header('Location: \Profile.php');
    exit;
  };
    $_SESSION['Login'] = $email;
    mysqli_query($connect, "UPDATE `logdata` SET `FirstName` = '$firstname', `LastName` = '$lastname', `Email` = '$email', `Phone` = '$phone' WHERE `logdata`.`Email` = '$ssesion_name';");
    header('Location: \Profile.php');
		exit;	
    break;
}