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
if (!$_SESSION["StatusCreate"] == NULL){
  echo '
    <div id="error">
      <p>
      '.$_SESSION["StatusCreate"].'
      </p>
    </div>
  ';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Реєстрація</title>

  <link rel="stylesheet" href="Styles/Pages/Log.css" />
  <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
  ?>
  <script src="Src/NavBar.js"></script>
  <script src="Src/Scroll.js"></script>
  <script src="Src/Theame.js"></script>
</head>
  <body onload="check()">
    <div id="LogIn">
      <form action="\Details\check_reg.php" method="post">
        <div class="names">
          <p>
            <label>Ваше ім'я:<br></label>
            <input name="firstName" type="text" size="10" maxlength="20" value = "<?php echo($_SESSION['firstname']);?>">  
          </p>
          <p>
            <label>Ваша фамілія:<br></label>
            <input name="lastName" type="text" size="10" maxlength="20" value="<?php echo($_SESSION['lastname']);?>">
          </p>
        </div>
        <div class="email"> 
          <p>
            <label>Вкажіть вашу стать:<br></label>
          </p>
          <p>
            <input type="radio" name="male" id="radio1" <?php if(($_SESSION['male']) == 1){echo('checked');};?> value="1"><label>Чоловік</label>
            <input type="radio" name="male" id="radio2" <?php if(($_SESSION['male']) == 0){echo('checked');};?> value="0"><label>Жінка</label>
          </p> 
        </div>  
        <div class="email">
          <p>
            <label>Пароль:<br></label>
            <input name="password" type="password" size="20" maxlength="20">
          </p>        
        </div>
        <div class="email">  
          <p>
            <label>Ваш Email:<br></label>
            <input name="email" type="text" size="20" maxlength="319" value="<?php echo($_SESSION['email']);?>">
          </p>
          <p>
            <label>Ваш номер телефону<br></label>
            <input name="phone" type="number" value="<?php echo($_SESSION['phone']);?>">
          </p>  
            <div class="names">
                <input class="button" type="submit" name="login" value="Зареєструватися">
                <input class="button" type="submit" name="login" value="Увійти">
            </div>
        </div>      
      </form>
    </div>
    <?php include "Details/Footer.php";?>
  </body>
</html>