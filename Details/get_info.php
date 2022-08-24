<?php 
include "Db.php";
$a = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Status` FROM `logdata` WHERE `Email` LIKE $_SESSION['Login']");
$a = mysqli_fetch_all($a);
$passCheck = mysqli_query($connect, "SELECT `Email`, `Password` FROM `logdata` WHERE `Email` LIKE '$email'");
$passCheck = mysqli_fetch_all($passCheck);

?>