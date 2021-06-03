// OpenWeatherMap
const weather = document.querySelector(".js-weather");
const API_KEY = "4dcfbe651b0688b0598d9674e61972ca";
const COORDS = "coords";

async function getWeather(lat, lng) {
  const postResponse = await fetch(
    `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lng}&appid=${API_KEY}&units=metric`
  );
  const post = await postResponse.json();
  const temperature = post.main.temp;
  const place = post.name;
  weather.innerText = `${place} 📍 ${temperature} ℃`;
}
// 로컬 스토리지 저장
function saveCoords(coordsObj) {
  localStorage.setItem(COORDS, JSON.stringify(coordsObj));
}
// 위도, 경도 저장
function handleGeoSuccess(position) {
  const latitude = position.coords.latitude;
  const longitude = position.coords.longitude;
  const coordsObj = {
    latitude,
    longitude,
  };
  saveCoords(coordsObj);
  getWeather(latitude, longitude);
}

function handleGeoError() {
  console.log("Cant access geo location");
}
// 위치 정보 불러오기
function askForCoords() {
  navigator.geolocation.getCurrentPosition(handleGeoSuccess, handleGeoError);
}
// 로컬 스토리지 위치 정보 불러오기
function loadCoords() {
  const loededCoords = localStorage.getItem(COORDS);
  if (loededCoords === null) {
    // 저장 정보 없을 때
    askForCoords();
  } else {
    // 저장 정보 있을 때
    const parseCoords = JSON.parse(loededCoords);
    // console.log(parseCoords);
    getWeather(parseCoords.latitude, parseCoords.longitude);
  }
}

function init() {
  loadCoords();
}

init();
