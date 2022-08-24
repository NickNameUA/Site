<?php
session_start();
$but = $_POST['login'];
if ($but == "Увійти") {
    header('Location: /LogIn.php');
    exit;
    //If press button LogIn swap to LogIn page
}else{
    $firstname = $_POST['firstName'];
		$_SESSION['firstname'] = $firstname;
    $lastname = $_POST['lastName'];
    $_SESSION['lastname'] = $lastname;
    $email = $_POST['email'];
		$_SESSION['email'] = $email;
    $pass = $_POST['password'];
		$_SESSION['password'] = $password;
    if (trim($firstname, " ") == ''){
        $_SESSION['Error'] = 'Ви не ввели імені';
        header('Location: /LogUp.php');
        exit;
    };
    if (trim($lastname, " ") == ''){
        $_SESSION['Error'] = 'Ви не ввели фамілію';
        header('Location: /LogUp.php');
        exit;
    };
    if (trim($email, " ") == ''){
        $_SESSION['Error'] = 'Ви не ввели емейл';
        header('Location: /LogUp.php');
        exit;
    };
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$_SESSION['Error'] = "Емайл адрес вказаний невірно";
			header('Location: /LogUp.php');
      exit;
		} 
    if (trim($pass, " ") == ''){
      $_SESSION['Error'] = 'Ви не ввели пароль';
      header('Location: /LogUp.php');
      exit;
    };
		if (strlen($pass) < 8){
      $_SESSION['Error'] = 'Ви ввели надто короткий пароль';
      header('Location: /LogUp.php');
      exit;
    };
    //Delete spases and check if write data
    include "Db.php";
    $a = mysqli_query($connect, "SELECT `Email` FROM `logdata` WHERE `Email` LIKE '$email'");
    $a = mysqli_fetch_all($a);
    if (!$a[0] == NULL){   
      header('Location: /LogUp.php');
      $_SESSION['Error'] = 'Цей емейл вже використовується';
			exit;	
    };
    //double email check
    $pass = password_hash($pass, PASSWORD_BCRYPT);
    //hash password 
		mysqli_query($connect, "INSERT INTO `logdata` (`FirstName`, `LastName`, `Email`, `Password`) VALUES ('$firstname', '$lastname', '$email', '$pass')");
    header('Location: /Index.php');
		exit;	
}