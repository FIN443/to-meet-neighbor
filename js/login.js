const fields = document.querySelectorAll(".login-form__text-box input");
const btn = document.querySelector(".login-form__btn");
const showPassword = document.querySelector(
  ".login-form__text-box--show-password"
);

function handdleCheck() {
  if (fields[0].value.length >= 4 && fields[1].value.length >= 8) {
    btn.disabled = false;
  } else {
    btn.disabled = true;
  }
}

function handdleShow() {
  if (this.classList[2] == "fa-eye-slash") {
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
    fields[1].type = "text";
  } else {
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
    fields[1].type = "password";
  }
}

function init() {
  fields[0].addEventListener("keyup", handdleCheck);
  fields[1].addEventListener("keyup", handdleCheck);
  showPassword.addEventListener("click", handdleShow);
}

init();
