"use strict";

const height = window.screen.height;

function bScrollTop() {
  document.documentElement.scrollTop = 0;
}
window.addEventListener("scroll", function () {
  let scrollPos = window.scrollY;
  let height1 = height * 1.5;
  const id1 = document.getElementById("scrlBtnTop").style;
  if (scrollPos > height1) {
    id1.visibility = "visible";
  } else {
    id1.visibility = "hidden";
  }
});
