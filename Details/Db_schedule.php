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

function getDayAdmin($day1, $day2, $day3, $day4, $day5, $lesson){
    echo"
    <td><input class='input' name='monday$lesson' type='text' size='10' maxlenght='25' value='$day1[$lesson]'></td>
    <td><input class='input' name='tuesday$lesson' type='text' size='10' maxlenght='25' value='$day2[$lesson]'></td>
    <td><input class='input' name='wednesday$lesson' type='text' size='10' maxlenght='25' value='$day3[$lesson]'></td>
    <td><input class='input' name='thursday$lesson' type='text' size='10' maxlenght='25' value='$day4[$lesson]'></td>
    <td><input class='input' name='friday$lesson' type='text' size='10' maxlenght='25' value='$day5[$lesson]'></td>";
}

function getDay($day1, $day2, $day3, $day4, $day5, $lesson){
    echo"
    <td>$day1[$lesson]</td>
    <td>$day2[$lesson]</td>
    <td>$day3[$lesson]</td>
    <td>$day4[$lesson]</td>
    <td>$day5[$lesson]</td>";
}

function getTimeAdmin($timeStart, $timeFinish, $time){
	echo"<td><input class='input' name='Start$time' type='text' size='5' maxlenght='5' value='$timeStart'></td>";
	echo"<td><input class='input' name='Finish$time' type='text' size='5' maxlenght='5' value='$timeFinish'></td>";
}

function getTime($timeStart, $timeFinish){
	echo"<td>$timeStart</td>";
	echo"<td>$timeFinish</td>";
}
?>