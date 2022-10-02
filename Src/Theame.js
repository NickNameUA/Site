"use strict";

function change(color) {
  let colorSet = document.getElementById("colorImg");
  let scrlBtnImg = document.getElementById("scrlBtnImg");
  let account = document.getElementById("accountImg");
  let style = document.documentElement.style;
  try {
    switch (color) {
      case "Light":
        style.setProperty("--main-bg-color", "rgb(51, 51, 51)");
        style.setProperty("--main-color", "rgb(200, 200, 200");
        style.setProperty("--second-bg-color", "rgb(20, 20, 20)");
        style.setProperty("--background-photo", "url(/Img/backgroundDark.jpg)");
        style.setProperty("--text-color", "rgb(51, 51, 51)");
        style.setProperty("--text-color-inverse", "rgb(51, 51, 51)");
        style.setProperty("--text-color-hover", "rgb(130, 130, 130");
        colorSet.src = "/Img/Button/Light/ChangeLight.png";
        scrlBtnImg.src = "/Img/Button/Light/BtnScrlTopLight.png";
        account.src = "/Img/Button/Light/AccountImgLight.png";
        break;
      case "Dark":
        style.setProperty("--main-bg-color", "rgb(255, 255, 255)");
        style.setProperty("--main-color", "rgb(255, 255, 0");
        style.setProperty("--second-bg-color", "rgb(51, 51, 51)");
        style.setProperty(
          "--background-photo",
          "url(/Img/backgroundLight.jpg)"
        );
        style.setProperty("--text-color", "rgb(51, 51, 51,)");
        style.setProperty("--text-color-inverse", "rgb(255, 255, 255)");
        style.setProperty("--text-color-hover", "rgb(200, 200, 0");
        colorSet.src = "/Img/Button/Dark/ChangeDark.png";
        scrlBtnImg.src = "/Img/Button/Dark/BtnScrlTopDark.png";
        account.src = "/Img/Button/Dark/AccountImgDark.png";
        break;
    }
  } catch (error) {}
}

// Change color set settings

function getCookie(name) {
  let matches = document.cookie.match(
    new RegExp(
      "(?:^|; )" +
        name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
        "=([^;]*)"
    )
  );
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

//Get info of theame now

function changeColorSet() {
  switch (getCookie("Theame")) {
    case "Light":
      document.cookie = "Theame=Dark";
      change("Dark");
      break;
    case "Dark":
      document.cookie = "Theame=Light";
      change("Light");
      break;
    default:
      document.cookie = "Theame=Light";
      change("Light");
  }
}

// Change color set

function check() {
  switch (getCookie("Theame")) {
    case "Light":
      change("Light");
      break;
    case "Dark":
      change("Dark");
      break;
  }
}

// Check color set and use him when page loaded
