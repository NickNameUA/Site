<?php
$but = $_POST['login'];
if ($but == "Увійти") {
    header('Location: /LogIn.php');
    exit;
}else{
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$pass = $_POST['password'];
$email = $_POST['email'];
}