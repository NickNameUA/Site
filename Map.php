<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles\Pages\Map.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <title>Карта</title>
  <?php
  include "Details\Prototype\Links.php";
  include "Details\Prototype\NavBar.php";
  ?>
  <script src="Src\NavBar.js"></script>
  <script src="Src\Scroll.js"></script>
  <script src="Src\Theame.js"></script>
  <script src="Src\Map.js"></script>
</head>
<body onload="check()">
  <div id="pagebody">
    <div id="mainAlternative">
      <iframe id="iframeMap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4592.862774517651!2d25.943674026458744!3d48.33901302971785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473407b14b41b3b3%3A0xc2375a3891d0b7ff!2z0KfQtdGA0L3RltCy0LXRhtGM0LrQuNC5INC70ZbRhtC10Lkg4oSWMjE!5e1!3m2!1suk!2sua!4v1666178310030!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div>
        <button class="flagMapBtn" onclick="swapFlag('liceum')">Ліцей</button>
        <button class="flagMapBtn" onclick="swapFlag('busStation')">Автобусна зупинка поряд із ліцеєм</button>
        <button class="flagMapBtn" onclick="swapFlag('exitForPD')">Вхід для людей з обмеженими можливостями</button>
        <button class="flagMapBtn" onclick='changeLink("https://goo.gl/maps/WeCR96ryBw6jGDde6?hl=ua")'>Прокласти маршрут</button>
      </div>
    </div>
  </div>
  <div>
</body>
<?php include "Details\Prototype\Footer.php";?>
</html>