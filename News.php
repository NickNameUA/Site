<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Liceum 21</title>
    <link rel="stylesheet" href="Styles/News.css" />
    <?php 
    include "Details/Links.php";
    include "Details/NavBar.php";
    ?>

    <script src="Src/NavBar.js"></script>
    <script src="Src/Scroll.js"></script>
  </head>
  <body>
    <div class="pagebody">
    <div id="main">
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
          src="Img/Button/BtnScrTop.png"
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
