<?php
include 'Db.php';
$SchoolRules = mysqli_query($connectText, "SELECT `textName`, `Text` FROM `maininfo` WHERE `textName` LIKE 'SchoolRules'");
$SchoolRules = mysqli_fetch_all($SchoolRules);
$SchoolRules = $SchoolRules[0];

//get school rules text

$HistoryOfSchool = mysqli_query($connectText, "SELECT `textName`, `Text` FROM `maininfo` WHERE `textName` LIKE 'HistoryOfSchool'");
$HistoryOfSchool = mysqli_fetch_all($HistoryOfSchool);
$HistoryOfSchool = $HistoryOfSchool[0];

//get school history of school