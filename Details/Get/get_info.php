<?php 
include "Db.php";
$ssesion_name = $_SESSION['Login'];
$a = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Phone`, `Status`, `Male` FROM `logdata` WHERE `Email` LIKE '$ssesion_name'");
$a = mysqli_fetch_all($a);
?>