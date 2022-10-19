<?php 
session_start();
if (!$_SESSION["Error"] == NULL){
echo '
  <div id="error">
   </p>  
  <>
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
  <title>Вхід</title>
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
      <form action="\Details\check_log.php" method="post">
        <p>    
          <label>Ваш Email:<br></label>
          <input name="email" type="text" size="20" maxlength="319" value="<?php echo($_SESSION['email']);?>">
        </p> 
        <p>
          <label>Пароль:<br></label>
          <input name="password" type="password" size="20" maxlength="20">
        </p> 
        <p>
          <div class="names">
            <input class="button" type="submit" name="login" value="Увійти">
            <input class="button" type="submit" name="login" value="Зареєструватися">
          </div>
        </p> 
      </form>
    </div>
    <?php include "Details/Footer.php";?>
  </body>
</html>