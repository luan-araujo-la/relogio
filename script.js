

const horas = document.getElementById('hr');
const minutos = document.getElementById('min');
const segundos = document.getElementById('seg');
const apikey = "873951fc558f3ffed2f12868e52adbb5";

const cidadeElement = document.querySelector(".cidade");
const tempElement = document.querySelector(".temp");
const climaElement = document.querySelector(".descClima");
const imgClimaElement = document.querySelector(".imgClima");
const chuvaElement = document.querySelector(".chuva");
const ventoElement = document.querySelector(".vento");

// funções





window.onload = function localiza() {
    if("geolocation" in navigator) navigator.geolocation.getCurrentPosition(setPosition, showError);
    else alert('o seu navegador não suporta a geolocalização');

    function setPosition(position) {
        let lati = position.coords.latitude;
        let long = position.coords.longitude;
        localResult(lati, long);
    }
    function showError(erro){
        alert(`erro: ${error.message}`);
    }
}

function localResult(lat, lon){
    fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=metric&appid=${apikey}&lang=pt_br`)
    .then(response => {
        if (!response.ok) {
            throw new Error(`http error: status ${response.status}`)
        }
        return response.json();
    })
    .catch(error => {
        alert(error.message);
    })
    .then(response => {
        displayResults(response);
    });
}

function displayResults(weather) {

    cidadeElement.textContent = `${weather.name}, ${weather.sys.country}`;

    let temperature = `${(parseInt(weather.main.temp))}`
    tempElement.textContent = temperature + "°C";

    climaElement.textContent = weather.weather[0].description;
    imgClimaElement.setAttribute("src", `https://openweathermap.org/img/wn/${weather.weather[0].icon}.png`)

    chuvaElement.textContent = `${weather.main.humidity}%`;

    ventoElement.textContent = `${weather.wind.speed} Km/H`;

}

const relogio = setInterval(function time() {
    let data = new Date();
    let hr = data.getHours();
    let min = data.getMinutes();
    let seg = data.getSeconds();

    if (hr < 10) hr = '0' + hr;
    if (min < 10) min = '0' + min;
    if (seg < 10) seg = '0' + seg;

    horas.textContent = hr;
    minutos.textContent = min;
    segundos.textContent = seg;
});


