"use strict";
function listNumber(number) {
  switch (number) {
    case 5:
      document.cookie = "List=5";
      break;
    case 4:
      document.cookie = "List=4";
      break;
    case 3:
      document.cookie = "List=3";
      break;
    case 2:
      document.cookie = "List=2";
      break;
    case 1:
      document.cookie = "List=1";
      break;
    case 0:
      document.cookie = "List=0";
      break;
  }
  window.location.href = "AccountListEdit.php";
}
