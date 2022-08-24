<?php 
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Профіль</title>
  <link rel="stylesheet" href="Styles/Profile.css" />
  <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
    include "Details/get_info.php"
  ?>
   
  <script src="Src/NavBar.js"></script>
  <script src="Src/Scroll.js"></script>
</head>
<body  onload="check()">
<div id="LogIn">
    <div><p><?php
    print_r($a)
    ?></p></div>
    </div>
    <?php include "Details/Footer.php";?>
</body>
</html>