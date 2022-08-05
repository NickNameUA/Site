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
    <link rel="stylesheet" href="Styles/News.css" />
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
    <?php include "NavBar.php"; ?>
    <script src="Src/NavBar.js" scr="Src/Scroll.js">
      window.addEventListener("load", active("news"))
    </script>
  </head>
  <body onload="active('news')">
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
  </body>
</html>
