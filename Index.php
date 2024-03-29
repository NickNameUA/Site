<?php session_start()?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Ліцей №21</title>
    <link rel="stylesheet" href="Styles/Pages/Home.css" />
    <?php
    include "Details/Links.php";
    include "Details/NavBar.php";
    ?>
   
    <script src="Src/NavBar.js"></script>
    <script src="Src/Scroll.js"></script>
    <script src="Src/Theame.js"></script>
  </head>
  <body onload="check()">
    <div>
      <!--Photo-->
      <img
        id="MainPhoto"
        src="Img/school-1.png"
        alt="Фото Ліцея"
        width="100%"
      />
    </div>
    <div class="pagebodyMain">
      <div id="main">
        <div class="post">
          <hr />
          <div class="eTitle">День захисту дітей</div>
          <div>
            <img src="Img/photo.jpg" alt="Фото" class="eImg" />
          </div>
        </div>
        <div class="post">
          <hr />
          <div class="eTitle">Останній дзвоник 2022</div>
          <iframe
            src="https://www.youtube.com/embed/HKAoMkKJqlA"
            title="Ліцей 21 Вітання зі святом Останнього дзвоника 2022"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <div class="btnSwpP">
          <button class="swapBtn" id="btnSwpPM" onclick="Swap(-1)">
            Попередня сторінка
          </button>
          <button class="swapBtn" id="btnSwpPP" onclick="Swap(1)">
            Наступна сторінка
          </button>
        </div>
      </div>
      <!--Main block-->
      <div>
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
    <!--Button scroll top-->
    <?php include "Details/Footer.php";?>
  </body>
</html>
