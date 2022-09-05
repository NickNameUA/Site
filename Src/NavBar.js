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
