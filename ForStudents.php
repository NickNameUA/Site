<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles/Pages/ForStudents.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <title>Для учнів</title>
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
        <!-- Table -->
        <div>
          <table class="lassons">
            <thead>
              <tr>
                <td class="background">№</td>
                <td>Понеділок</td>
                <td>Вівторок</td>
                <td>Середа</td>
                <td>Четвер</td>
                <td>П'ятниця</td>
              </tr>
            </thead>
            <tr>
              <td class="bold">1</td>
              <td>Українська література</td>
              <td>Біологія</td>
              <td>Українська література</td>
              <td>Географія</td>
              <td>Історія України</td>
            </tr>
            <tr>
              <td class="bold">2</td>
              <td>Фізика</td>
              <td>Геометрія</td>
              <td>Фізкультура</td>
              <td>Біологія</td>
              <td>Геометрія</td>
            </tr>
            <tr>
              <td class="bold">3</td>
              <td>Алгебра</td>
              <td>Українська мова</td>
              <td>Фізика</td>
              <td>Фізика</td>
              <td>Українська мова</td>
            </tr>
            <tr>
              <td class="bold">4</td>
              <td>Українська мова</td>
              <td>Історія України/Географія</td>
              <td>Алгебра</td>
              <td>Технолонії</td>
              <td>Хімія</td>
            </tr>
            <tr>
              <td class="bold">5</td>
              <td>Фізкультура</td>
              <td>Хімія/Технолонії</td>
              <td>Українська мова</td>
              <td>Англійська мова</td>
              <td>Захист України/Інформатика</td>
            </tr>
            <tr>
              <td class="bold">6</td>
              <td>Англійська мова</td>
              <td>Англійська мова</td>
              <td>Всесвітня історія</td>
              <td>Громадянська освіта</td>
              <td>Українська література</td>
            </tr>
            <tr>
              <td class="bold">7</td>
              <td>Захист України/Інформатика</td>
              <td>Громадянська освіта</td>
              <td>Математика(Ф)</td>
              <td>Фізкультура</td>
              <td>___________</td>
            </tr>
            <tr>
              <td class="bold">8</td>
              <td>Зарубіжна література</td>
              <td>Українська мова(Ф)</td>
              <td>Захист України/Інформатика</td>
              <td>Підприємницво(Ф)</td>
              <td>___________</td>
            </tr>
          </table>
        </div>
        <div>
          <h2 class="title">Розклад дзвінків</h2>
          <table class="bells">
            <thead>
              <tr>
                <td>№</td>
                <td>Початок</td>
                <td>Кінець</td>
                <td>Перерва</td>
              </tr>
            </thead>  
            <tr>
              <td class="bold">1</td>
              <td>8:30</td>
              <td>9:15</td>
              <td>10</td>
            </tr>
            <tr>
              <td class="bold">2</td>
              <td>9:25</td>
              <td>10:10</td>
              <td>20</td>
            </tr>
            <tr>
              <td class="bold">3</td>
              <td>10:30</td>
              <td>11:15</td>
              <td>15</td>
            </tr>
            <tr>
              <td class="bold">4</td>
              <td>11:30</td>
              <td>12:15</td>
              <td>10</td>
            </tr>
            <tr>
              <td class="bold">5</td>
              <td>12:25</td>
              <td>13:10</td>
              <td>10</td>
            </tr>
            <tr>
              <td class="bold">6</td>
              <td>13:20</td>
              <td>14:05</td>
              <td>5</td>
            </tr>
            <tr>
              <td class="bold">7</td>
              <td>14:10</td>
              <td>14:55</td>
              <td>5</td>
            </tr>
            <tr>
              <td class="bold">8</td>
              <td>15:00</td>
              <td>15:40</td>
              <td>_</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include "Details/Footer.php";?>
</html>