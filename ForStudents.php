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
        <?php include "Details/Db_schedule.php";?>
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
              <td><?php echo($monday[0])?></td>
              <td><?php echo($tuesday[0])?></td>
              <td><?php echo($wednesday[0])?></td>
              <td><?php echo($thursday[0])?></td>
              <td><?php echo($friday[0])?></td>
            </tr>
            <tr>
              <td class="bold">2</td>
              <td><?php echo($monday[1])?></td>
              <td><?php echo($tuesday[1])?></td>
              <td><?php echo($wednesday[1])?></td>
              <td><?php echo($thursday[1])?></td>
              <td><?php echo($friday[1])?></td>
            </tr>
            <tr>
              <td class="bold">3</td>
              <td><?php echo($monday[2])?></td>
              <td><?php echo($tuesday[2])?></td>
              <td><?php echo($wednesday[2])?></td>
              <td><?php echo($thursday[2])?></td>
              <td><?php echo($friday[2])?></td>
            </tr>
            <tr>
              <td class="bold">4</td>
              <td><?php echo($monday[3])?></td>
              <td><?php echo($tuesday[3])?></td>
              <td><?php echo($wednesday[3])?></td>
              <td><?php echo($thursday[3])?></td>
              <td><?php echo($friday[3])?></td>
            </tr>
            <tr>
              <td class="bold">5</td>
              <td><?php echo($monday[4])?></td>
              <td><?php echo($tuesday[4])?></td>
              <td><?php echo($wednesday[4])?></td>
              <td><?php echo($thursday[4])?></td>
              <td><?php echo($friday[4])?></td>
            </tr>
            <tr>
              <td class="bold">6</td>
              <td><?php echo($monday[5])?></td>
              <td><?php echo($tuesday[5])?></td>
              <td><?php echo($wednesday[5])?></td>
              <td><?php echo($thursday[5])?></td>
              <td><?php echo($friday[5])?></td>
            </tr>
            <tr>
              <td class="bold">7</td>
              <td><?php echo($monday[6])?></td>
              <td><?php echo($tuesday[6])?></td>
              <td><?php echo($wednesday[6])?></td>
              <td><?php echo($thursday[6])?></td>
              <td><?php echo($friday[6])?></td>
            </tr>
            <tr>
              <td class="bold">8</td>
              <td><?php echo($monday[7])?></td>
              <td><?php echo($tuesday[7])?></td>
              <td><?php echo($wednesday[7])?></td>
              <td><?php echo($thursday[7])?></td>
              <td><?php echo($friday[7])?></td>
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
              </tr>
            </thead>  
            <form action='Details\Change_schedule.php' method='post'>
              <tr>
                <td class="bold">1</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start1' type='text' size='5' maxlenght='5' value='$lessonStart[0]'</td>";
                  echo"<td><input class='input' name='Finish1' type='text' size='5' maxlenght='5' value='$lessonFinish[0]'</td>";
                }else{
                echo"<td>$lessonStart[0]</td>";
                echo"<td>$lessonFinish[0]</td>";};?>
              </tr>
              <tr>
                <td class="bold">2</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start2' type='text' size='5' maxlenght='5' value='$lessonStart[1]'</td>";
                  echo"<td><input class='input' name='Finish2' type='text' size='5' maxlenght='5' value='$lessonFinish[1]'</td>";
                }else{
                echo"<td>$lessonStart[1]</td>";
                echo"<td>$lessonFinish[1]</td>";};?>
              </tr>
              <tr>
                <td class="bold">3</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start3' type='text' size='5' maxlenght='5' value='$lessonStart[2]'</td>";
                  echo"<td><input class='input' name='Finish3' type='text' size='5' maxlenght='5' value='$lessonFinish[2]'</td>";
                }else{
                echo"<td>$lessonStart[2]</td>";
                echo"<td>$lessonFinish[2]</td>";};?>
              </tr>
              <tr>
                <td class="bold">4</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start4' type='text' size='5' maxlenght='5' value='$lessonStart[3]'</td>";
                  echo"<td><input class='input' name='Finish4' type='text' size='5' maxlenght='5' value='$lessonFinish[3]'</td>";
                }else{
                echo"<td>$lessonStart[3]</td>";
                echo"<td>$lessonFinish[3]</td>";};?>
              </tr>
              <tr>
                <td class="bold">5</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start5' type='text' size='5' maxlenght='5' value='$lessonStart[4]'</td>";
                  echo"<td><input class='input' name='Finish5' type='text' size='5' maxlenght='5' value='$lessonFinish[4]'</td>";
                }else{
                echo"<td>$lessonStart[4]</td>";
                echo"<td>$lessonFinish[4]</td>";};?>
              </tr>
              <tr>
                <td class="bold">6</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start6' type='text' size='5' maxlenght='5' value='$lessonStart[5]'</td>";
                  echo"<td><input class='input' name='Finish6' type='text' size='5' maxlenght='5' value='$lessonFinish[5]'</td>";
                }else{
                echo"<td>$lessonStart[5]</td>";
                echo"<td>$lessonFinish[5]</td>";};?>
              </tr>
              <tr>
                <td class="bold">7</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start7' type='text' size='5' maxlenght='5' value='$lessonStart[6]'</td>";
                  echo"<td><input class='input' name='Finish7' type='text' size='5' maxlenght='5' value='$lessonFinish[6]'</td>";
                }else{
                echo"<td>$lessonStart[6]</td>";
                echo"<td>$lessonFinish[6]</td>";};?>
              </tr>
              <tr>
                <td class="bold">8</td>
                <?php if($a[0][4] > 3){
                  echo"<td><input class='input' name='Start8' type='text' size='5' maxlenght='5' value='$lessonStart[7]'</td>";
                  echo"<td><input class='input' name='Finish8' type='text' size='5' maxlenght='5' value='$lessonFinish[7]'</td>";
                }else{
                echo"<td>$lessonStart[7]</td>";
                echo"<td>$lessonFinish[7]</td>";};?>
              </tr>
              <input class='submit' name='save' type='submit' value='Зберегти'>
            </form>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include "Details/Footer.php";?>
</html>