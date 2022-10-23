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

function getList($key){
		echo"
			<form action='Details/AccountListDo.php' method='post'>
			<input class='ListInp' type='submit' name='Do' value='Зберегти'>
			<input class='ListInp' type='submit' name='Do' value='Видалити'>
			<input class='id' name='id' type='text' size='0' value='$key[4]'> 
			<input class='ListInp' name='firstName' type='text' size='10' maxlength='20' value='$key[0]'>
			<input class='ListInp' name='lastName' type='text' size='10' maxlength='20' value='$key[1]'>
			<input class='ListInp' name='email' type='text' size='10' maxlength='319' value='$key[2]'>
			<input class='ListInp' name='phone' type='text' size='10' maxlength='20' value='$key[3]'></br>
			</form>
		";
};
// function for get list

function getBut($status){
	echo"
		<form action='Details/AccountListDo.php' method='post'>
			<input class='ListBtn' type='submit' name='Do' value='Створити'>
			<input class='id' name='status' type='text' size='0' maxlength='2' value='$status'>
		</form>
	";
}
?>