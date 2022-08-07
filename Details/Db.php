<?php

$dbhost = "localhost";
$dbname = "login";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
