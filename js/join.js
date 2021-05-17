const userid = document.querySelector(".join-form__userid");
const password = document.querySelector(".join-form__pass");
const password2 = document.querySelector(".join-form__pass2");
const nickname = document.querySelector(".join-form__name");
const email = document.querySelector(".join-form__email");
const input = document.querySelectorAll(".join-input");

function isEmail(email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "join-form__control success";
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  small.innerText = message;
  formControl.className = "join-form__control error";
}

function checkUserId() {
  const useridValue = userid.value.trim();
  if (useridValue === "") {
    setErrorFor(userid, "아이디를 입력해주세요.");
  } else if (useridValue.length < 6) {
    setErrorFor(userid, "최소 6자이상 입력해주세요.");
  } else {
    setSuccessFor(userid);
  }
}

function checkPassword() {
  const passwordValue = password.value.trim();
  if (passwordValue === "") {
    setErrorFor(password, "비밀번호를 입력해주세요.");
  } else if (passwordValue.length < 8) {
    setErrorFor(password, "최소 8자이상 입력해주세요.");
  } else {
    setSuccessFor(password);
  }
}

function checkPasswordConfirm() {
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();
  if (password2Value === "") {
    setErrorFor(password2, "비밀번호를 입력해주세요.");
  } else if (password2Value !== passwordValue) {
    setErrorFor(password2, "비밀번호가 일치하지 않습니다.");
  } else {
    setSuccessFor(password2);
  }
}

function checkNickname() {
  const nicknameValue = nickname.value.trim();
  if (nicknameValue === "") {
    setErrorFor(nickname, "닉네임을 입력해주세요.");
  } else if (nicknameValue.length < 4) {
    setErrorFor(nickname, "최소 4자이상 입력해주세요.");
  } else {
    setSuccessFor(nickname);
  }
}

function checkEmail() {
  const emailValue = email.value.trim();
  if (emailValue === "") {
    setErrorFor(email, "이메일을 입력해주세요.");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "이메일 형식이 아닙니다.");
  } else {
    setSuccessFor(email);
  }
}

function handdleSubmit() {
  const submitBtn = document.querySelector(".join-btn");
  const control = document.querySelectorAll(".join-form__control");
  if (
    control[0].classList.contains("success") &&
    control[1].classList.contains("success") &&
    control[2].classList.contains("success") &&
    control[3].classList.contains("success") &&
    control[4].classList.contains("success")
  ) {
    submitBtn.disabled = false;
    submitBtn.style.backgroundColor = "#3498dbe3";
    submitBtn.style.border = "2px solid #3498db";
  } else {
    submitBtn.disabled = true;
    submitBtn.style.backgroundColor = "#8b9196e3";
    submitBtn.style.border = "2px solid #8b9196";
  }
}

function handdleUserId() {
  checkUserId();
  handdleSubmit();
}

function handdlPassword() {
  checkPassword();
  handdleSubmit();
}

function handdlePasswordConfirm() {
  checkPasswordConfirm();
  handdleSubmit();
}

function handdleNickname() {
  checkNickname();
  handdleSubmit();
}

function handdleEmail() {
  checkEmail();
  handdleSubmit();
}

function init() {
  input[0].addEventListener("keyup", handdleUserId);
  input[1].addEventListener("keyup", handdlPassword);
  input[2].addEventListener("keyup", handdlePasswordConfirm);
  input[3].addEventListener("keyup", handdleNickname);
  input[4].addEventListener("keyup", handdleEmail);
}

init();
