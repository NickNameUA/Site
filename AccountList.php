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
    <title>Account List</title>
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
          <?php getBut(5)?>
          <div class='Info'>
            <?php foreach($Admins as $key){getList($key);}?>
          </div>
					<h1>Деректори</h1>
          <?php getBut(4)?>
          <div class='Info'>
            <?php foreach($Directors as $key){getList($key);}?>
          </div>
					<h1>Вчителі</h1>
          <?php getBut(3)?>
          <div class='Info'>
            <?php foreach($Teachers as $key){getList($key);}?>
          </div>
          <h1>Батьки</h1>
          <?php getBut(2)?>
          <div class='Info'>
            <?php foreach($Perents as $key){getList($key);}?>
          </div>
          <h1>Учні</h1>
          <?php getBut(1)?>
          <div class='Info'>
            <?php foreach($Students as $key){getList($key);}?>
          </div>
          <h1>Без категорій</h1>
          <?php getBut(0)?>
          <div class='Info'>
            <?php foreach($Unclassed as $key){getList($key);}?>
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
      </div>
    </div>
    <?php include "Details/Footer.php"; ?>
  </body>
</html>