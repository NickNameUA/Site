"use strict";

/* When the user click on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(a) {
  document.getElementById(a).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it

window.onclick = function (element) {
  if (!element.target.matches(".dropbtn")) {
    const element = document.getElementById("myDropdown");
    const element1 = document.getElementById("myDropdown1");
    const element2 = document.getElementById("myDropdown2");
    if (element.classList.contains("show")) {
      element.classList.remove("show");
      element.classList.remove("dropbtn");
    }
    if (element1.classList.contains("show")) {
      element1.classList.remove("show");
      element1.classList.remove("dropbtn");
    }
    if (element2.classList.contains("show")) {
      element2.classList.remove("show");
      element2.classList.remove("dropbtn");
    }
  }
};
function bScrollTop() {
  document.documentElement.scrollTop = 0;
}

window.addEventListener("scroll", function () {
  let scrollPos = window.scrollY;
  if (scrollPos > 1500) {
    document.querySelector(".scrollingButtonTop").classList.add("visibleBut");
  } else {
    document
      .querySelector(".scrollingButtonTop")
      .classList.remove("visibleBut");
  }
});
