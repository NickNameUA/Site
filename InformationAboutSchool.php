<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles/Pages/InformationAbooutSchool.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <title>Інформація про школу</title>
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
    <div id="mainAlternative">
        <h2>Чернівецький Ліцей №21</h2>
        <p>58025 м. Чернівці вул. І. Карбулицького,4</p>
        <p class='information'>
        Директор школи: Димашок Андрій Дмитрович</br>
        роб. тел. 560-703;</br>
        Заступник з НВР: Супрович Дарія Степанівна</br>
        роб. тел. 560-468;</br>
        Заступник з ВР: Архипова Ольга Василівна</br>
        роб. тел. 560-468;</br>
        Завгосп школи: Галан Юрій Іванович</br>
        роб. тел. 560-703;
        </p>
        <p>
        E-mail: <a href='mailto:cvznz-39@meta.ua'>cvznz-39@meta.ua</a></br>
        До школи можна доїхати на таких автобусних маршрутах: №15, №16, №37, №120 </br>
        до зупинки Ліцей №21
        </p>
    </div>
  </div>
</body>
<?php include "Details/Footer.php";?>
</html>