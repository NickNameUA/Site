<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Liceum 21</title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="Img/Favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="Img/Favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="Img/Favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="Img/Favicons/site.webmanifest" />
    <link rel="stylesheet" href="Styles/Home.css" />
    <link rel="stylesheet" href="Styles/Prototype.css" />
    <link rel="stylesheet" href="Styles/max-width 360px.css" />
    <link rel="stylesheet" href="Styles/max-width 480px.css" />
    <link rel="stylesheet" href="Styles/min-width 1000px.css" />
    <link rel="stylesheet" href="Styles/min-width 1400px.css" />
    <link rel="stylesheet" href="Styles/min-width 200px.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <?php 
    include "Details/NavBar.php";
    ?>
    <script scr="Src/Scroll.js"></script>
    <script src="Src/NavBar.js"></script>
  </head>
  <body>
    <div class="pagebody">
    <div>
      <!--Photo-->
      <img
        id="MainPhoto"
        src="Img/school-1.png"
        alt="Фото Ліцея"
        width="100%"
      />
    </div>
    <div id="main">
      <div class="post">
        <hr />
        <div class="eTitle">День захисту дітей</div>
        <div>
          <img src="img/photo.jpg" alt="Фото" class="eImg" />
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
          src="Img/Button/BtnScrTop.png"
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
