"use strict";

function myFunction(a) {
  document.getElementById(a).classList.toggle("show");
}

/* When the user click on the button, 
toggle between hiding and showing the dropdown content */

window.onclick = function (element) {
  if (!element.target.matches(".dropbtn")) {
    const element = document.getElementById("myDropdown");
    const element1 = document.getElementById("myDropdown1");
    const element2 = document.getElementById("myDropdown2");
    if (element.classList.contains("show")) {
      removedrop(element);
    }
    if (element1.classList.contains("show")) {
      removedrop(element1);
    }
    if (element2.classList.contains("show")) {
      removedrop(element2);
    }
  }
};

//Close the dropdown if the user clicks on button again of it

function removedrop(elementd) {
  elementd.classList.remove("show");
  elementd.classList.remove("dropbtn");
}

// Close the dropdown if the user clicks outside of it

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

function changeColorSet() {
  switch (document.cookie) {
    case "Theame=Light":
      document.cookie = "Theame=Dark";
      change("Dark");
      break;
    case "Theame=Dark":
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
  switch (document.cookie) {
    case "Theame=Light":
      change("Light");
      break;
    case "Theame=Dark":
      change("Dark");
      break;
  }
}

// Check color set and use him when page loaded
