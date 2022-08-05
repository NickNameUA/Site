"use strict";

const width = window.screen.width;

function bScrollTop() {
  document.documentElement.scrollTop = 0;
}
window.addEventListener("scroll", function () {
  let scrollPos = window.scrollY;
  let width1 = width * 1.5;
  const id1 = document.getElementById("scrlBtnTop").style;
  if (scrollPos > width1) {
    id1.visibility = "visible";
  } else {
    id1.visibility = "hidden";
  }
});
