<?php
include 'Db.php';
$lessonStart = mysqli_query($connectSchedule, "SELECT `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `time` WHERE `Time` LIKE 'Start'");
$lessonStart = mysqli_fetch_all($lessonStart);
$lessonStart = $lessonStart[0];
//Get lesson start time
$lessonFinish = mysqli_query($connectSchedule, "SELECT `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `time` WHERE `Time` LIKE 'Finish'");
$lessonFinish = mysqli_fetch_all($lessonFinish);
$lessonFinish = $lessonFinish[0];
//Get lesson finish time
$monday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '1'");
$monday = mysqli_fetch_all($monday);
$monday = $monday[0];
//Get monday list
$altMonday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '2'");
$altMonday = mysqli_fetch_all($altMonday);
$altMonday = $altMonday[0];
//Get alternative monday list
$tuesday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '3'");
$tuesday = mysqli_fetch_all($tuesday);
$tuesday = $tuesday[0];
//Get tuesday list
$wednesday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '4'");
$wednesday = mysqli_fetch_all($wednesday);
$wednesday = $wednesday[0];
//Get wednesday list
$altWednesday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '5'");
$altWednesday = mysqli_fetch_all($altWednesday);
$altWednesday = $altWednesday[0];
//Get alternative wednesday list
$thursday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '6'");
$thursday = mysqli_fetch_all($thursday);
$thursday = $thursday[0];
//Get thursday list
$friday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '7'");
$friday = mysqli_fetch_all($friday);
$friday = $friday[0];
//Get friday list
$altFriday = mysqli_query($connectSchedule, "SELECT `Day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `class10b` WHERE `id` LIKE '8'");
$altFriday = mysqli_fetch_all($altFriday);
$altFriday = $altFriday[0];
//Get friday list
?>