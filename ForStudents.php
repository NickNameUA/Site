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
  <div id="pagebody">
    <div id="mainAlternative">
      <div>
        <h2 class="title">Розклад уроків</h2>
        <h3>Розклад уроків 10-Б клас</h3>
        <!-- Table -->
        <?php include "Details/Db_schedule.php";?>
        <div>
          <table class="lassons">
            <form action='Details\Change_schedule.php' method='post'>
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
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday1' type='text' size='10' maxlenght='25' value='$monday[1]'></td>
                      <td><input class='input' name='tuesday1' type='text' size='10' maxlenght='25' value='$tuesday[1]'></td>
                      <td><input class='input' name='wednesday1' type='text' size='10' maxlenght='25' value='$wednesday[1]'></td>
                      <td><input class='input' name='thursday1' type='text' size='10' maxlenght='25' value='$thursday[1]'></td>
                      <td><input class='input' name='friday1' type='text' size='10' maxlenght='25' value='$friday[1]'></td>";
                    }else{echo"
                      <td>$monday[1]</td>
                      <td>$tuesday[1]</td>
                      <td>$wednesday[1]</td>
                      <td>$thursday[1]</td>
                      <td>$friday[1]</td>
                    ";};
                  ?>
                </tr>
                <tr>
                  <td class="bold">2</td>
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday2' type='text' size='10' maxlenght='25' value='$monday[2]'></td>
                      <td><input class='input' name='tuesday2' type='text' size='10' maxlenght='25' value='$tuesday[2]'></td>
                      <td><input class='input' name='wednesday2' type='text' size='10' maxlenght='25' value='$wednesday[2]'></td>
                      <td><input class='input' name='thursday2' type='text' size='10' maxlenght='25' value='$thursday[2]'></td>
                      <td><input class='input' name='friday2' type='text' size='10' maxlenght='25' value='$friday[2]'></td>";
                    }else{echo"
                      <td>$monday[2]</td>
                      <td>$tuesday[2]</td>
                      <td>$wednesday[2]</td>
                      <td>$thursday[2]</td>
                      <td>$friday[2]</td>
                    ";};
                  ?>
                </tr>
                <tr>
                  <td class="bold">3</td>
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday3' type='text' size='10' maxlenght='25' value='$monday[3]'></td>
                      <td><input class='input' name='tuesday3' type='text' size='10' maxlenght='25' value='$tuesday[3]'></td>
                      <td><input class='input' name='wednesday3' type='text' size='10' maxlenght='25' value='$wednesday[3]'></td>
                      <td><input class='input' name='thursday3' type='text' size='10' maxlenght='25' value='$thursday[3]'></td>
                      <td><input class='input' name='friday3' type='text' size='10' maxlenght='25' value='$friday[3]'></td>";
                    }else{echo"
                      <td>$monday[3]</td>
                      <td>$tuesday[3]</td>
                      <td>$wednesday[3]</td>
                      <td>$thursday[3]</td>
                      <td>$friday[3]</td>
                    ";};
                  ?>
                </tr>
                <tr>
                  <td class="bold">4</td>
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday4' type='text' size='10' maxlenght='25' value='$monday[4]'></td>
                      <td><input class='input' name='tuesday4' type='text' size='10' maxlenght='25' value='$tuesday[4]'></td>
                      <td><input class='input' name='wednesday4' type='text' size='10' maxlenght='25' value='$wednesday[4]'></td>
                      <td><input class='input' name='thursday4' type='text' size='10' maxlenght='25' value='$thursday[4]'></td>
                      <td><input class='input' name='friday4' type='text' size='10' maxlenght='25' value='$friday[4]'></td>";
                    }else{echo"
                      <td>$monday[4]</td>
                      <td>$tuesday[4]</td>
                      <td>$wednesday[4]</td>
                      <td>$thursday[4]</td>
                      <td>$friday[4]</td>
                    ";};
                  ?>
                </tr>
                <tr>
                  <td class="bold">5</td>
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday5' type='text' size='10' maxlenght='25' value='$monday[5]'></td>
                      <td><input class='input' name='tuesday5' type='text' size='10' maxlenght='25' value='$tuesday[5]'></td>
                      <td><input class='input' name='wednesday5' type='text' size='10' maxlenght='25' value='$wednesday[5]'></td>
                      <td><input class='input' name='thursday5' type='text' size='10' maxlenght='25' value='$thursday[5]'></td>
                      <td><input class='input' name='friday5' type='text' size='10' maxlenght='25' value='$friday[5]'></td>";
                    }else{echo"
                      <td>$monday[5]</td>
                      <td>$tuesday[5]</td>
                      <td>$wednesday[5]</td>
                      <td>$thursday[5]</td>
                      <td>$friday[5]</td>
                    ";};
                  ?>
                </tr>
                <tr>
                  <td class="bold">6</td>
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday6' type='text' size='10' maxlenght='25' value='$monday[6]'></td>
                      <td><input class='input' name='tuesday6' type='text' size='10' maxlenght='25' value='$tuesday[6]'></td>
                      <td><input class='input' name='wednesday6' type='text' size='10' maxlenght='25' value='$wednesday[6]'></td>
                      <td><input class='input' name='thursday6' type='text' size='10' maxlenght='25' value='$thursday[6]'></td>
                      <td><input class='input' name='friday6' type='text' size='10' maxlenght='25' value='$friday[6]'></td>";
                    }else{echo"
                      <td>$monday[6]</td>
                      <td>$tuesday[6]</td>
                      <td>$wednesday[6]</td>
                      <td>$thursday[6]</td>
                      <td>$friday[6]</td>
                    ";};
                  ?>
                </tr>
                <tr>
                  <td class="bold">7</td>
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday7' type='text' size='10' maxlenght='25' value='$monday[7]'></td>
                      <td><input class='input' name='tuesday7' type='text' size='10' maxlenght='25' value='$tuesday[7]'></td>
                      <td><input class='input' name='wednesday7' type='text' size='10' maxlenght='25' value='$wednesday[7]'></td>
                      <td><input class='input' name='thursday7' type='text' size='10' maxlenght='25' value='$thursday[7]'></td>
                      <td><input class='input' name='friday7' type='text' size='10' maxlenght='25' value='$friday[7]'></td>";
                    }else{echo"
                      <td>$monday[7]</td>
                      <td>$tuesday[7]</td>
                      <td>$wednesday[7]</td>
                      <td>$thursday[7]</td>
                      <td>$friday[7]</td>
                    ";};
                  ?>
                </tr>
                <tr>
                  <td class="bold">8</td>
                  <?php
                    if($a[0][4] > 3){echo"
                      <td><input class='input' name='monday8' type='text' size='10' maxlenght='25' value='$monday[8]'></td>
                      <td><input class='input' name='tuesday8' type='text' size='10' maxlenght='25' value='$tuesday[8]'></td>
                      <td><input class='input' name='wednesday8' type='text' size='10' maxlenght='25' value='$wednesday[8]'></td>
                      <td><input class='input' name='thursday8' type='text' size='10' maxlenght='25' value='$thursday[8]'></td>
                      <td><input class='input' name='friday8' type='text' size='10' maxlenght='25' value='$friday[8]'></td>";
                    }else{echo"
                      <td>$monday[8]</td>
                      <td>$tuesday[8]</td>
                      <td>$wednesday[8]</td>
                      <td>$thursday[8]</td>
                      <td>$friday[8]</td>
                    ";};
                  ?>
                </tr>
              </tbody>
            </table>
            <input class='submit' name='save' type='submit' value='Зберегти розклад'>
          </form>
        </div>
        <div>
          <h2 class="title">Розклад дзвінків</h2>
          <form action='Details\Change_schedule.php' method='post'>
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
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start1' type='text' size='5' maxlenght='5' value='$lessonStart[0]'></td>";
                    echo"<td><input class='input' name='Finish1' type='text' size='5' maxlenght='5' value='$lessonFinish[0]'></td>";
                  }else{
                  echo"<td>$lessonStart[0]</td>";
                  echo"<td>$lessonFinish[0]</td>";};?>
                </tr>
                <tr>
                  <td class="bold">2</td>
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start2' type='text' size='5' maxlenght='5' value='$lessonStart[1]'></td>";
                    echo"<td><input class='input' name='Finish2' type='text' size='5' maxlenght='5' value='$lessonFinish[1]'></td>";
                  }else{
                  echo"<td>$lessonStart[1]</td>";
                  echo"<td>$lessonFinish[1]</td>";};?>
                </tr>
                <tr>
                  <td class="bold">3</td>
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start3' type='text' size='5' maxlenght='5' value='$lessonStart[2]'></td>";
                    echo"<td><input class='input' name='Finish3' type='text' size='5' maxlenght='5' value='$lessonFinish[2]'></td>";
                  }else{
                  echo"<td>$lessonStart[2]</td>";
                  echo"<td>$lessonFinish[2]</td>";};?>
                </tr>
                <tr>
                  <td class="bold">4</td>
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start4' type='text' size='5' maxlenght='5' value='$lessonStart[3]'></td>";
                    echo"<td><input class='input' name='Finish4' type='text' size='5' maxlenght='5' value='$lessonFinish[3]'></td>";
                  }else{
                  echo"<td>$lessonStart[3]</td>";
                  echo"<td>$lessonFinish[3]</td>";};?>
                </tr>
                <tr>
                  <td class="bold">5</td>
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start5' type='text' size='5' maxlenght='5' value='$lessonStart[4]'></td>";
                    echo"<td><input class='input' name='Finish5' type='text' size='5' maxlenght='5' value='$lessonFinish[4]'></td>";
                  }else{
                  echo"<td>$lessonStart[4]</td>";
                  echo"<td>$lessonFinish[4]</td>";};?>
                </tr>
                <tr>
                  <td class="bold">6</td>
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start6' type='text' size='5' maxlenght='5' value='$lessonStart[5]'></td>";
                    echo"<td><input class='input' name='Finish6' type='text' size='5' maxlenght='5' value='$lessonFinish[5]'></td>";
                  }else{
                  echo"<td>$lessonStart[5]</td>";
                  echo"<td>$lessonFinish[5]</td>";};?>
                </tr>
                <tr>
                  <td class="bold">7</td>
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start7' type='text' size='5' maxlenght='5' value='$lessonStart[6]'></td>";
                    echo"<td><input class='input' name='Finish7' type='text' size='5' maxlenght='5' value='$lessonFinish[6]'></td>";
                  }else{
                  echo"<td>$lessonStart[6]</td>";
                  echo"<td>$lessonFinish[6]</td>";};?>
                </tr>
                <tr>
                  <td class="bold">8</td>
                  <?php if($a[0][4] > 3){
                    echo"<td><input class='input' name='Start8' type='text' size='5' maxlenght='5' value='$lessonStart[7]'></td>";
                    echo"<td><input class='input' name='Finish8' type='text' size='5' maxlenght='5' value='$lessonFinish[7]'></td>";
                  }else{
                  echo"<td>$lessonStart[7]</td>";
                  echo"<td>$lessonFinish[7]</td>";};?>
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
<?php include "Details/Footer.php";?>
</html>