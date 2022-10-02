<?php
session_start();
$but = $_POST['login'];
if ($but == "Зареєструватися") {
    header('Location: /LogUp.php');
    exit;
}else{
  $email = $_POST['email'];
  $_SESSION['email'] = $email;
  $pass = $_POST['password'];
  $_SESSION['password'] = $password;
  if (trim($email, " ") == ''){
    $_SESSION['Error'] = 'Ви не ввели емейл';
    header('Location: /LogIn.php');
    exit;
  };
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['Error'] = "Емайл адрес вказаний невірно";
		header('Location: /LogIn.php');
    exit;
	} 
  if (trim($pass, " ") == ''){
    $_SESSION['Error'] = 'Ви не ввели пароль';
    header('Location: /LogIn.php');
    exit;
  };
	if (strlen($pass) < 8){
    $_SESSION['Error'] = 'Емейл або пароль введені не правильно';
    header('Location: /LogIn.php');
    exit;
  };
  //Delete spases and check if write data
  include "Db.php";
  $passCheck = mysqli_query($connect, "SELECT `Password` FROM `logdata` WHERE `Email` LIKE '$email'");
  $passCheck = mysqli_fetch_all($passCheck);
  $passCheck = $passCheck[0][0];
  if (!password_verify($pass, $passCheck)) {
    $_SESSION['Error'] = 'Емейл або пароль введені не правильно';
    header('Location: /LogIn.php');
    exit;
  } else {
    $statusCheck = mysqli_query($connect, "SELECT `Status` FROM `logdata` WHERE `Email` LIKE '$email'");
    $statusCheck = mysqli_fetch_all($statusCheck);
    $statusCheck = $statusCheck[0][0];
		$_SESSION['Login'] = $email;
    header('Location: /Index.php');
    exit;
  }
}