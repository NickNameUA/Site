<?php
$but = $_POST['login'];
if ($but == "Зареєструватися") {
    header('Location: /LogUp.php');
    exit;
}else{
$pass = $_POST['password'];
$email = $_POST['email'];
echo("<h1>Всьо гуд</h1>");
}