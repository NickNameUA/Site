<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles\Pages\ForStudents.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <title>Для учнів</title>
  <?php
  include "Details\Prototype\Links.php";
  include "Details\Prototype\NavBar.php";
  ?>
  <script src="Src\NavBar.js"></script>
  <script src="Src\Scroll.js"></script>
  <script src="Src\Theame.js"></script>
</head>
<body onload="check()">
  <div id="pagebody">
    <div id="mainAlternative">
      <div>
        <h2 class="title">Розклад уроків</h2>
        <h3>Розклад уроків 10-Б клас</h3>
        <!-- Table -->
        <?php include "Details\Get\Db_schedule.php";?>
        <div>
          <table class="lassons">
            <form action='Details\Do\Change_schedule.php' method='post'>
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
              <tbody>
                <tr>
                  <td class="bold">1</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 1);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 1);}; ?>
                </tr>
                <tr>
                  <td class="bold">2</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 2);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 2);}; ?>
                </tr>
                <tr>
                  <td class="bold">3</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 3);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 3);}; ?>
                </tr>
                <tr>
                  <td class="bold">4</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 4);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 4);}; ?>
                </tr>
                <tr>
                  <td class="bold">5</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 5);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 5);}; ?>
                </tr>
                <tr>
                  <td class="bold">6</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 6);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 6);}; ?>
                </tr>
                <tr>
                  <td class="bold">7</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 7);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 7);}; ?>
                </tr>
                <tr>
                  <td class="bold">8</td>
                  <?php if($a[0][4] > 3){getDayAdmin($monday, $tuesday, $wednesday, $thursday, $friday, 8);}else{getDay($monday, $tuesday, $wednesday, $thursday, $friday, 8);}; ?>
                </tr>
              </tbody>
            </table>
            <input class='submit' name='save' type='submit' value='Зберегти розклад'>
          </form>
        </div>
        <div>
          <h2 class="title">Розклад дзвінків</h2>
          <form action='Details\Do\Change_schedule.php' method='post'>
            <table class="bells">
              <thead>
                <tr>
                  <td>№</td>
                  <td>Початок</td>
                  <td>Кінець</td>
                </tr>
              </thead>  
              <tbody>
                <tr>
                  <td class="bold">1</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[0], $lessonFinish[0], 1);}else{getTime($lessonStart[0], $lessonFinish[0]);}?>
                </tr>
                <tr>
                  <td class="bold">2</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[1], $lessonFinish[1], 2);}else{getTime($lessonStart[1], $lessonFinish[1]);}?>
                </tr>
                <tr>
                  <td class="bold">3</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[2], $lessonFinish[2], 3);}else{getTime($lessonStart[2], $lessonFinish[2]);}?>
                </tr>
                <tr>
                  <td class="bold">4</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[3], $lessonFinish[3], 4);}else{getTime($lessonStart[3], $lessonFinish[3]);}?>
                </tr>
                <tr>
                  <td class="bold">5</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[4], $lessonFinish[4], 5);}else{getTime($lessonStart[4], $lessonFinish[4]);}?>
                </tr>
                <tr>
                  <td class="bold">6</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[5], $lessonFinish[5], 6);}else{getTime($lessonStart[5], $lessonFinish[5]);}?>
                </tr>
                <tr>
                  <td class="bold">7</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[6], $lessonFinish[6], 7);}else{getTime($lessonStart[6], $lessonFinish[6]);}?>
                </tr>
                <tr>
                  <td class="bold">8</td>
                  <?php if($a[0][4] > 3){getTimeAdmin($lessonStart[7], $lessonFinish[7], 8);}else{getTime($lessonStart[7], $lessonFinish[7]);}?>
                </tr>
              </tbody>
            </table>
            <input class='submit' name='save' type='submit' value='Зберегти час'>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include "Details\Prototype\Footer.php";?>
</html>