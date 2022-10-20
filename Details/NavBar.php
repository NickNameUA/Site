<?php include "get_info.php";?>
<div class="navbar" style="background-image: url(Img\Button\BtnMenu.png);">
  <a id="index" href="Index.php">Головна</a>
  <a id="news" href="News.php">Новини</a>
  <!--Main button-->
    <select id="menuBtn" name="Menu" onchange="window.location.href = this.options[this.selectedIndex].value">
      <option class="viseOff" value=""></option>
      <?php if($a[0][4] > 0){echo '
        <option value="ForStudents.php">Для учнів</option>
      ';}?>
      <?php if($a[0][4] > 1){echo '
        <option value="#for_parents">Для батьків</option>
      ';}?>
      <?php if($a[0][4] > 2){echo '
        <option value="#for_teachers">Для вчителів</option>
      ';}?>
        <option value="More_information.php">Більше інформації</option>
        <option value="#main_info">Основна інформація</option>
    </select>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction(2)">
      Про школу
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content" id="2">
        <?php if($a[0][4] > 0){echo '<a href="ForStudents.php">Для учнів</a>';}?>
        <?php if($a[0][4] > 1){echo '<a href="#for_parents">Для батьків</a>';}?>
        <?php if($a[0][4] > 2){echo '<a href="#for_teachers">Для вчителів</a>';}?>
        <a href="#main_info">Основна інформація</a>
        <a href="More_information.php">Додаткові відомості</a>
        <a href="Map.php">Карта</a>
      </div>
  </div>
  <?php if($a[0][4] == 5){
      echo '
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction(4)">
          Для адмінів
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="4">
          <a href="AccountList.php">Cписок аккаунтів</a>
        </div>
      </div>';}?>
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
      <a href="mailto:cvlyceum21@gmail.com">cvlyceum21@gmail.com</a>
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
  <!--ColorSet button-->
</div>
<?php?>