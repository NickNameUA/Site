<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles/Pages/MainInfo.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <title>Основна інформація</title>
  <?php
  include "Details/Links.php";
  include "Details/NavBar.php";
  ?>
  <script src="Src/NavBar.js"></script>
  <script src="Src/Scroll.js"></script>
  <script src="Src/Theame.js"></script>
</head>
<body onload="check()">
  <div id="pagebody">
    <div id="mainAlternativeThird" class="main">
        <aside class="sidebar">
          <a href="SchoolRuls.php">Правела поведінки в школі</a></br>
          <a href="HistoryOfSchool">Історія Ліцея</a>
        </aside>
        <div class="MainInfo">
          Hallo
        </div>
    </div>
  </div>
</body>
<?php include "Details/Footer.php";?>
</html>