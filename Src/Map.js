"use strict";

function swapFlag(flag) {
  switch (flag) {
    case "liceum":
      flag =
        "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4592.862774517651!2d25.943674026458744!3d48.33901302971785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473407b14b41b3b3%3A0xc2375a3891d0b7ff!2z0KfQtdGA0L3RltCy0LXRhtGM0LrQuNC5INC70ZbRhtC10Lkg4oSWMjE!5e1!3m2!1suk!2sua!4v1666178310030!5m2!1suk!2sua";

      break;
    case "busStation":
      flag =
        "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4592.862774517651!2d25.943674026458744!3d48.33901302971785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473407f076405f6b%3A0x26ccbae6a3d108f!2z0L3QsCDQstC40LzQvtCz0YM!5e1!3m2!1suk!2sua!4v1666183077009!5m2!1suk!2sua";
      break;
    case "exitForPD":
      flag =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1148.219451702319!2d25.943321558130826!3d48.33884617773963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd56aff22cbe02e2!2zNDjCsDIwJzE5LjgiTiAyNcKwNTYnMzkuOSJF!5e1!3m2!1suk!2sua!4v1666183599047!5m2!1suk!2sua";
      break;
  }
  document.getElementById("iframeMap").src = flag;
}

function changeLink(link) {
  return (location.href = link);
}
