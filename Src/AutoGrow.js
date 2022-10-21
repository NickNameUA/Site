function auto_grow(element) {
  element = document.getElementById(element);
  element.style.height = "5px";
  element.style.height = element.scrollHeight + "px";
}

//Auto change height textarea

document.addEventListener("DOMContentLoaded", () => {
  auto_grow("SchoolRules");
  auto_grow("HistoryOfSchool");
});

//Auto change height textarea when page is loaded
