<?php session_start();
$_SESSION['StatusCreate'] = NULL;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Список Аккаунтів</title>
    <link rel="stylesheet" href="Styles/Pages/AccountList.css" />
    <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
    include "Details/get_list.php";
    ?>
   
    <script src="Src/NavBar.js"></script>
    <script src="Src/Scroll.js"></script>
    <script src="Src/Theame.js"></script>
    <script src="Src/ListEdit.js"></script>
  </head>
  <body onload="check()">
    <div id="pagebody">
      <div id="main">
				<tr>
          <h1>Адміністратори</h1>
          <form action='Details/AccountListDo.php' method='post'>
          <input class='ListBtn' type='submit' name='Do' value='Створити'>
          <input class='id' name='status' type='text' size='0' maxlength='2' value='5'>
          </form>
          <div class='Info'>
            <?php foreach($Admins as $key){
              ?><form action='Details/AccountListDo.php' method='post'><?php
              echo"<input class='ListInp' type='submit' name='Do' value='Зберегти'>";
              echo"<input class='ListInp' type='submit' name='Do' value='Видалити'>";
              echo"<input class='id' name='id' type='text' size='0' maxlength='10000' value='$key[4]'>"; 
              echo"<input class='ListInp' name='firstName' type='text' size='10' maxlength='20' value='$key[0]'>";
              echo"<input class='ListInp' name='lastName' type='text' size='10' maxlength='20' value='$key[1]'>";
              echo"<input class='ListInp' name='email' type='text' size='10' maxlength='319' value='$key[2]'>";
              echo"<input class='ListInp' name='phone' type='text' size='10' maxlength='20' value='$key[3]'></br>";
              ?></form>
            <?php };?>
          </div>
					<h1>Деректори</h1>
          <form action='Details/AccountListDo.php' method='post'>
          <input class='ListBtn' type='submit' name='Do' value='Створити'>
          <input class='id' name='status' type='text' size='0' maxlength='2' value='4'>
          </form>
          <div class='Info'>
            <?php foreach($Directors as $key){
              ?><form action='Details/AccountListDo.php' method='post'><?php
              echo"<input class='ListInp' type='submit' name='Do' value='Зберегти'>";
              echo"<input class='ListInp' type='submit' name='Do' value='Видалити'>";
              echo"<input class='id' name='id' type='text' size='0' maxlength='10000' value='$key[4]'>"; 
              echo"<input class='ListInp' name='firstName' type='text' size='10' maxlength='20' value='$key[0]'>";
              echo"<input class='ListInp' name='lastName' type='text' size='10' maxlength='20' value='$key[1]'>";
              echo"<input class='ListInp' name='email' type='text' size='10' maxlength='319' value='$key[2]'>";
              echo"<input class='ListInp' name='phone' type='text' size='10' maxlength='20' value='$key[3]'></br>";
              ?></form>
            <?php };?>
          </div>
					<h1>Вчителі</h1>
          <form action='Details/AccountListDo.php' method='post'>
          <input class='ListBtn' type='submit' name='Do' value='Створити'>
          <input class='id' name='status' type='text' size='0' maxlength='2' value='3'>
          </form>
          <div class='Info'>
            <?php foreach($Teachers as $key){
              ?><form action='Details/AccountListDo.php' method='post'><?php
              echo"<input class='ListInp' type='submit' name='Do' value='Зберегти'>";
              echo"<input class='ListInp' type='submit' name='Do' value='Видалити'>";
              echo"<input class='id' name='id' type='text' size='0' maxlength='10000' value='$key[4]'>"; 
              echo"<input class='ListInp' name='firstName' type='text' size='10' maxlength='20' value='$key[0]'>";
              echo"<input class='ListInp' name='lastName' type='text' size='10' maxlength='20' value='$key[1]'>";
              echo"<input class='ListInp' name='email' type='text' size='10' maxlength='319' value='$key[2]'>";
              echo"<input class='ListInp' name='phone' type='text' size='10' maxlength='20' value='$key[3]'></br>";
              ?></form>
            <?php };?>
          </div>
          <h1>Батьки</h1>
          <form action='Details/AccountListDo.php' method='post'>
          <input class='ListBtn' type='submit' name='Do' value='Створити'>
          <input class='id' name='status' type='text' size='0' maxlength='2' value='2'>
          </form>
          <div class='Info'>
            <?php foreach($Perents as $key){
              ?><form action='Details/AccountListDo.php' method='post'><?php
              echo"<input class='ListInp' type='submit' name='Do' value='Зберегти'>";
              echo"<input class='ListInp' type='submit' name='Do' value='Видалити'>";
              echo"<input class='id' name='id' type='text' size='0' maxlength='10000' value='$key[4]'>"; 
              echo"<input class='ListInp' name='firstName' type='text' size='10' maxlength='20' value='$key[0]'>";
              echo"<input class='ListInp' name='lastName' type='text' size='10' maxlength='20' value='$key[1]'>";
              echo"<input class='ListInp' name='email' type='text' size='10' maxlength='319' value='$key[2]'>";
              echo"<input class='ListInp' name='phone' type='text' size='10' maxlength='20' value='$key[3]'></br>";
              ?></form>
            <?php };?>
          </div>
          <h1>Учні</h1>
          <form action='Details/AccountListDo.php' method='post'>
          <input class='ListBtn' type='submit' name='Do' value='Створити'>
          <input class='id' name='status' type='text' size='0' maxlength='2' value='1'>
          </form>
          <div class='Info'>
            <?php foreach($Students as $key){
              ?><form action='Details/AccountListDo.php' method='post'><?php
              echo"<input class='ListInp' type='submit' name='Do' value='Зберегти'>";
              echo"<input class='ListInp' type='submit' name='Do' value='Видалити'>";
              echo"<input class='id' name='id' type='text' size='0' maxlength='10000' value='$key[4]'>"; 
              echo"<input class='ListInp' name='firstName' type='text' size='10' maxlength='20' value='$key[0]'>";
              echo"<input class='ListInp' name='lastName' type='text' size='10' maxlength='20' value='$key[1]'>";
              echo"<input class='ListInp' name='email' type='text' size='10' maxlength='319' value='$key[2]'>";
              echo"<input class='ListInp' name='phone' type='text' size='10' maxlength='20' value='$key[3]'></br>";
              ?></form>
            <?php };?>
          </div>
          <h1>Без категорій</h1>
          <form action='Details/AccountListDo.php' method='post'>
          <input class='ListBtn' type='submit' name='Do' value='Створити'>
          <input class='id' name='status' type='text' size='0' maxlength='2' value='0'>
          </form>
          <div class='Info'>
            <?php foreach($Unclassed as $key){
              ?><form action='Details/AccountListDo.php' method='post'><?php
              echo"<input class='ListInp' type='submit' name='Do' value='Зберегти'>";
              echo"<input class='ListInp' type='submit' name='Do' value='Видалити'>";
              echo"<input class='id' name='id' type='text' size='0' maxlength='10000' value='$key[4]'>"; 
              echo"<input class='ListInp' name='firstName' type='text' size='10' maxlength='20' value='$key[0]'>";
              echo"<input class='ListInp' name='lastName' type='text' size='10' maxlength='20' value='$key[1]'>";
              echo"<input class='ListInp' name='email' type='text' size='10' maxlength='319' value='$key[2]'>";
              echo"<input class='ListInp' name='phone' type='text' size='10' maxlength='20' value='$key[3]'></br>";
              ?></form>
            <?php };?>
          </div>
      	</tr>
        <!--Get list-->
        <div class="btnSwpP">
          <button class="swapBtn" id="btnSwpPM" onclick="Swap(-1)">
            Попередня сторінка
          </button>
          <button class="swapBtn" id="btnSwpPP" onclick="Swap(1)">
            Наступна сторінка
          </button>
        </div>
        <button id="scrlBtnTop" onclick="bScrollTop()">
          <img
            id="scrlBtnImg"
            src="Img/Button/Dark/BtnScrlTopDark.png"
            width="60px"
            height="60px"
            alt="Scroll Top"
          />
        </button>
      </div>
    </div>
    <?php include "Details/Footer.php";?>
  </body>
</html>