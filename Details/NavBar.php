<div class="navbar">
      <a id="index" href="Index.php">Головна</a>
      <a id="news" href="News.php">Новини</a>
      <div class="dropdown" id="menuBtn">
        <button
          class="dropbtn"
          onclick="myFunction('myDropdown2')">
          <img
            alt="Menu"
            src="/Img/Button/BtnMenu.png"
            width="47"
            height="47"
          />
          <i class="fa fa-caret-down viseOff"></i>
        </button>
        <div class="dropdown-content" id="myDropdown2">
          <a href="#for_students">Для учнів</a>
          <a href="#for_students">Для учнів</a>
          <a href="#for_students">Для учнів</a>
          <a href="#for_students">Для учнів</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction('myDropdown1')">
          Про школу
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown1">
          <a href="#for_students">Для учнів</a>
          <a href="#for_parents">Для батьків</a>
          <a href="#for_teachers">Для вчителів</a>
          <a href="#main_info">Основна інформація</a>
          <a href="#more_info">Додаткові відомості</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction('myDropdown')">
          Контактні дані
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <h3>Соц мережі</h3>
          <a href="https://www.facebook.com/cvlyceum21" target="_blank"
            >Facebook</a
          >
          <a
            href="https://www.youtube.com/channel/UCaY5H1l8aNDVKfW9oJ4sGoQ"
            target="_blank"
            >Youtube</a
          >
          <h3>Контакти</h3>
          <h4>Номер телефону</h4>
          <p>(0372)560-703</p>
          <p>(0372)560-468</p>
          <h4>Електронна пошта</h4>
          <p>cvlyceum21@gmial.com</p>
        </div>
      </div>
        <a id="account" href="Profile.php">
          <img
            src="/Img/Button/AccountImg.png"
            height="47"
            width="47"
            alt="Profile"
          />
        </a>
    </div>
<?php?>