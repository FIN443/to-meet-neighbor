const filebox = document.querySelectorAll(".write__form--filebox input");
const textbox = document.querySelector(".filebox-text");
const text = document.querySelector(".write__form--filebox span");
const exitBtn = document.querySelector(".write__form--exit");

function haddleFile() {
  const file = filebox[0];
  const fileName = file.value.split("\\");
  text.innerText = fileName[fileName.length - 1];
  text.style.color = "white";
  textbox.style.border = "none";
  textbox.style.backgroundColor = "#3498db";
  textbox.style.boxShadow = "0 0 3px 1px rgba(0, 0, 0, 0.3)";
}

function haddleExit() {
  history.go(-1);
}

function init() {
  file.addEventListener("change", haddleFile);
  exitBtn.addEventListener("click", haddleExit);
}

init();
