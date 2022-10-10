<?php
include "Db.php";
$Admins = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Phone`, `id` FROM `logdata` WHERE `Status` LIKE '5'");
$Admins = mysqli_fetch_all($Admins);
//Get Admins list
$Directors = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Phone`, `id` FROM `logdata` WHERE `Status` LIKE '4'");
$Directors = mysqli_fetch_all($Directors);
//Get Director list
$Teachers = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Phone`, `id` FROM `logdata` WHERE `Status` LIKE '3'");
$Teachers = mysqli_fetch_all($Teachers);
//Get Teachers list
$Perents = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Phone`, `id` FROM `logdata` WHERE `Status` LIKE '2'");
$Perents = mysqli_fetch_all($Perents);
//Get Perents list
$Students = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Phone`, `id` FROM `logdata` WHERE `Status` LIKE '1'");
$Students = mysqli_fetch_all($Students);
//Get Students list
$Unclassed = mysqli_query($connect, "SELECT `FirstName`, `LastName`, `Email`, `Phone`, `id` FROM `logdata` WHERE `Status` LIKE '0'");
$Unclassed = mysqli_fetch_all($Unclassed);
//Get Unclassed list
?>