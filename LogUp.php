<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Реєстрація</title>

	<link rel="stylesheet" href="Styles/LogIn.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="Styles/Profile.css" />
  <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
  ?>
   
  <script src="Src/NavBar.js"></script>
  <script src="Src/Scroll.js"></script>
</head>
  <body>
    <div id="LogIn">
      <form action="save_user.php" method="post">
        <div class="names">
          <p>
            <label>Ваше ім'я:<br></label>
            <input name="FirstName" type="text" size="10" maxlength="20">  
          <div>
            <p>
            <label>Ваша фамілія:<br></label>
            <input name="LastName" type="text" size="10" maxlength="20">
        
          </div>
        </div>
        <div class="names">
          <p>
            <label>Пароль:<br></label>
            <input name="Password" type="password" size="20" maxlength="20">
          <p>
            <label>Повторіть пароль:<br></label>
            <input name="Password" type="password" size="20" maxlength="20">
        </div>
        <div id="email">
          <p>
            <label>Ваш Email:<br></label>
            <input name="Email" type="text" size="20" maxlength="25">
          <p>
            <div class="names">
                <input class="button" type="submit" name="submit" value="Зареєструватися">
                <a class="button" href="LogIn.php">Увійти</a>
            </div>
        </div>      
      </form>
    </div>
    <?php include "Details/Footer.php";?>
  </body>
</html>