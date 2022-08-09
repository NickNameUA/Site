<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вхід</title>

  <link rel="stylesheet" href="Styles/Profile.css" />
  <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
  ?>
   
  <script src="Src/NavBar.js"></script>
  <script src="Src/Scroll.js"></script>
</head>
  <body onload="check()">
    <div id="LogIn">
      <form action="save_user.php" method="post">
          <p>
            <label>Ваш Email:<br></label>
            <input name="Email" type="text" size="20" maxlength="25">
          <p>
            <label>Пароль:<br></label>
            <input name="Password" type="password" size="20" maxlength="20">
          <p>
            <div class="names">
              <input class="button" type="submit" name="submit" value="Увійти">
              <a class="button" href="LogUp.php">Зареєструватися</a>
            </div>
          </form>
    </div>
    <?php include "Details/Footer.php";?>
  </body>
</html>