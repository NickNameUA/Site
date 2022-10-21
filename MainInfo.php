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
  include "Details/get_text.php";
  ?>
  <script src="Src/NavBar.js"></script>
  <script src="Src/Scroll.js"></script>
  <script src="Src/Theame.js"></script>
  <script src="Src/AutoGrow.js"></script>
</head>
<body onload="check()">
  <div id="pagebody">
    <div id="mainAlternativeThird" class="main">
        <aside class="sidebar">
          <a href="SchoolRuls.php">Правела поведінки в школі</a></br>
          <a href="HistoryOfSchool">Історія Ліцея</a>
        </aside>
        <div class="MainInfo">
          <?php if($a[0][4] > 0){echo "<form action='Details/Change_text.php' method='post'>";}?>
            <h2>Правела поведінки в школі</h2>
              <textarea id='SchoolRules' <?php if($a[0][4] < 4){echo "disabled";}else{echo "name='SchoolRules'";}?> oninput='auto_grow("SchoolRules")'><?php echo"$SchoolRules[1]"?></textarea>
            <h2>Історія Ліцея</h2>
              <textarea id='HistoryOfSchool' <?php if($a[0][4] < 4){echo "disabled";}else{echo "name='HistoryOfSchool'";}?> oninput='auto_grow("HistoryOfSchool")'><?php echo"$HistoryOfSchool[1]";?></textarea>
          <?php if($a[0][4] > 0){
            echo "<input name='do' type='submit' value='Зберегти'>";
            echo "</form>";
          }?>    
        </div>
    </div>
  </div>
</body>
<?php include "Details/Footer.php";?>
</html>