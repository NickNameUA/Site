"use strict";

const height = window.screen.height;
const width = window.screen.width;

function bScrollTop() {
  document.documentElement.scrollTop = 0;
}

//Scroll top

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

//Visibility and hidden scroll button
const $linkFullWidth = $("div.image--link");

if ($(window).width() < 768) {
  // Delete the element $linkFullWidth
}
