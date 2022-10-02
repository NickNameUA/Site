<?php session_start()?>
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
          <button class="ListBtn" onclick="listNumber(5)">Редагувати</button>
          <div class='Info'>
            <?php foreach($Admins as $key){
              echo($key[0]); echo(' ');
              echo($key[1]); echo(' ');
              echo($key[2]); echo(' ');
              echo($key[3]); echo(' ');?></br>
            <?php };?>
          </div>
					<h1>Деректори</h1>
          <button class="ListBtn" onclick="listNumber(4)">Редагувати</button>
          <div class='Info'>
            <?php foreach($Directors as $key){
              echo($key[0]); echo(' ');
              echo($key[1]); echo(' ');
              echo($key[2]); echo(' ');
              echo($key[3]); echo(' ');?></br>
            <?php };?>
          </div>
					<h1>Вчителі</h1>
          <button class="ListBtn" onclick="listNumber(3)">Редагувати</button>
          <div class='Info'>
            <?php foreach($Teachers as $key){
              echo($key[0]); echo(' ');
              echo($key[1]); echo(' ');
              echo($key[2]); echo(' ');
              echo($key[3]); echo(' ');?></br>
            <?php };?>
          </div>
          <h1>Батьки</h1>
          <button class="ListBtn" onclick="listNumber(2)">Редагувати</button>
          <div class='Info'>
            <?php foreach($Perents as $key){
              echo($key[0]); echo(' ');
              echo($key[1]); echo(' ');
              echo($key[2]); echo(' ');
              echo($key[3]); echo(' ');?></br>
            <?php };?>
          </div>
          <h1>Учні</h1>
          <button class="ListBtn" onclick="listNumber(1)">Редагувати</button>
          <div class='Info'>
            <?php foreach($Students as $key){
              echo($key[0]); echo(' ');
              echo($key[1]); echo(' ');
              echo($key[2]); echo(' ');
              echo($key[3]); echo(' ');?></br>
            <?php };?>
          </div>
          <h1>Без категорій</h1>
          <button class="ListBtn" onclick="listNumber(0)">Редагувати</button>
          <div class='Info'>
            <?php foreach($Unclassed as $key){
              echo($key[0]); echo(' ');
              echo($key[1]); echo(' ');
              echo($key[2]); echo(' ');
              echo($key[3]); echo(' ');?></br>
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