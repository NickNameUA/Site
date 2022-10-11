<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
    ?>
   
    <script src="Src/NavBar.js"></script>
    <script src="Src/Scroll.js"></script>
    <script src="Src/Theame.js"></script>
</head>
<body onload="check()">
  <div class="pagebodyMain">
    <div id="main">
      <div>
        <h2 class="title">Розклад уроків</h2>
        <h3>Розклад уроків 10-Б клас</h3>
        <table>
          <tr>
            <td>№</td>
            <td>Понеділок</td>
            <td>Вівторок</td>
            <td>Середа</td>
            <td>Четвер</td>
            <td>П'ятниця</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Українська література</td>
            <td>Біологія</td>
            <td>Українська література</td>
            <td>Географія</td>
            <td>Історія України</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Фізика</td>
            <td>Геометрія</td>
            <td>Фізкультура</td>
            <td>Біологія</td>
            <td>Геометрія</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Алгебра</td>
            <td>Українська мова</td>
            <td>Фізика</td>
            <td>Фізика</td>
            <td>Українська мова</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Українська мова</td>
            <td>Історія України/Географія</td>
            <td>Алгебра</td>
            <td>Технолонії</td>
            <td>Хімія</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Фізкультура</td>
            <td>Хімія/Технолонії</td>
            <td>Українська мова</td>
            <td>Англійська мова</td>
            <td>Захист України/Інформатика</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Англійська мова</td>
            <td>Англійська мова</td>
            <td>Всесвітня історія</td>
            <td>Громадянська освіта</td>
            <td>Українська література</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Захист України/Інформатика</td>
            <td>Громадянська освіта</td>
            <td>Математика(Ф)</td>
            <td>Фізкультура</td>
            <td>___________</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Зарубіжна література</td>
            <td>Українська мова(Ф)</td>
            <td>Захист України/Інформатика</td>
            <td>Підприємницво(Ф)</td>
            <td>___________</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>
<?php include "Details/Footer.php";?>
</html>