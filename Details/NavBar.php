<?php include "get_info.php";?>
<div class="navbar">
  <a id="index" href="Index.php">Головна</a>
  <a id="news" href="News.php">Новини</a>
  <div class="dropdown" id="menuBtn">
    <button
      class="dropbtn"
      onclick="myFunction(3)">
      <img
        alt="Menu"
        src="/Img/Button/BtnMenu.png"
        width="47"
        height="47"
        />
        <i class="fa fa-caret-down viseOff"></i>
    </button>
    <div class="dropdown-content" id="3">
      <button class="ColorSet" id="colorSetBut" onclick="changeColorSet()">
        <img
        id="colorSet"
        src="/Img/Button/Dark/ChangeDark.png"
        height="47"
        width="47"
        alt="Profile"/>
      </button>
      <a href="#for_students">Для учнів</a>
      <a href="#for_students">Для учнів</a>
      <a href="#for_students">Для учнів</a>
      <a href="#for_students">Для учнів</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction(2)">
      Про школу
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content" id="2">
        <a href="#for_students">Для учнів</a>
        <a href="#for_parents">Для батьків</a>
        <a href="#for_teachers">Для вчителів</a>
        <a href="#main_info">Основна інформація</a>
       <a href="#more_info">Додаткові відомості</a>
      </div>
  </div>
  <?php switch ($a[0][4]){
    case 5:
      echo '
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction(4)">
          Для адмінів
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="4">
        <a href="AccountList.php">Cписок аккаунтів</a>
        </div>
      </div>';
    break;
    case 4:
      echo '
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction(4)">
          Для директорів
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="4">
        <a href="AccountList.php">список аккаунтів</a>
        </div>
      </div>';
    break;
    case 3:
      echo '
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction(4)">
          Для вчителів
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="4">
          <a href="AccountList.php">список аккаунтів</a>
        </div>
      </div>';
    break;
  }?>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction(1)">
      Контактні дані
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="1">
      <h3>Контакти</h3>
      <h4>Номер телефону</h4>
      <p>(0372)560-703</p>
      <p>(0372)560-468</p>
      <h3>Соц мережі</h3>
      <a href="https://www.facebook.com/cvlyceum21" target="_blank"
        >Facebook</a
      >
      <a
      href="https://www.youtube.com/channel/UCaY5H1l8aNDVKfW9oJ4sGoQ"
      target="_blank"
      >Youtube</a
      >
      <h4>Електронна пошта</h4>
      <a href="mailto:cvlyceum21@gmial.com">cvlyceum21@gmial.com</a>
    </div>
  </div>

  <button class="ColorSet" id="colorSetBut" onclick="changeColorSet()">
    <img
    id="colorImg"
    src="/Img/Button/Dark/ChangeDark.png"
    height="47"
    width="47"
    alt="Profile"/>
  </button>
  <a id="account" href="<?php if ($_SESSION['Login'] == NULL){echo('LogIn.php');}else{echo('Profile.php');}?>">
    <img
    id="accountImg"
    src="/Img/Button/Dark/AccountImgDark.png"
    height="47"
    width="47"
    alt="Profile"
    />
  </a>
</div>
<?php?>