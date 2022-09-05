<?php 
session_start();
if (!$_SESSION["Error"] == NULL){
echo '
  <div id="error">
    <p>
    '.$_SESSION["Error"].'
    </p>
  </div>
';
}
$_SESSION['Error'] = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Профіль</title>
  <link rel="stylesheet" href="Styles/Pages/Profile.css" />
  <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
    include "Details/get_info.php";
  ?>
   
  <script src="Src/NavBar.js"></script>
  <script src="Src/Scroll.js"></script>
  <script src="Src/Theame.js"></script>
</head>
<body  onload="check()">
<div id="LogIn">
<?php 
  if($a[0][5] == 1){
    switch($a[0][4]){
      case 0:
        echo "<p id='Admin'>Ви адміністратор</p>";
      break;
      case 1: 
        echo "<p id='Admin'>Ви директор</p>";
      break;
      case 2: 
      echo "<p id='Admin'>Ви вчитель</p>";
      break;
      case 3: 
      echo "<p id='Admin'>Ви учень</p>";
      break;
      case 4: 
      echo "<p id='Admin'>Ви батько</p>";
      break;
    }
  }else{
    switch($a[0][4]){
      case 0:
        echo "<p id='Admin'>Ви адміністраторша</p>";
      break;
      case 1: 
        echo "<p id='Admin'>Ви директриса</p>";
      break;
      case 2: 
        echo "<p id='Admin'>Ви вчителька</p>";
      break;
      case 3: 
        echo "<p id='Admin'>Ви учениця</p>";
      break;
      case 4: 
        echo "<p id='Admin'>Ви мати</p>";
      break;
    }
  };?>
  <form action="\Details\profil_edit.php" method="post">
  <div class="names">
    <p>Ваше ім'я</p>
    <input class="Contain" name="firstName" type="text" size="10" maxlength="20" value = "<?php echo($a[0][0]);?>">
  </div><div class="names">
    <p>Ваше фамілія</p>
    <input class="Contain" name="lastName" type="text" size="10" maxlength="20" value = "<?php echo($a[0][1]);?>">
  </div><div class="names">
    <p>Ваш Email</p>
    <input name="email" type="text" size="20" maxlength="319" value = "<?php echo($a[0][2]);?>">
  </div><div class="names">
    <p>Ваш Номер Телефону</p>
    <input name="phone" type="text" size="20" maxlength="10" value = "<?php echo($a[0][3]);?>">
  </div></br><div class="names">
    <input class="button" type="submit" name="login" value="Зберегти зміни">
    <input class="button" type="submit" name="login" value="Видалити профіль">
    <input class="button" type="submit" name="login" value="Вийти з профіля">
  </div>
</form>  
  </div>
    <?php include "Details/Footer.php";?>
</body>
</html>