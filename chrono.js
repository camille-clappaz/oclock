let chrono = null;
let startTime = null;
let pausedTime = null;
let tours = [];

const playPauseBtn = document.getElementById("marcheArret");
const tourBtn = document.getElementById("tour");
const resetBtn = document.getElementById("reset");
const chronoElement = document.getElementById("chrono");
const toursList = document.getElementById("tours");

function updateTimer() {
  const elapsedTime = Date.now() - startTime;
  const hours = Math.floor(elapsedTime / 3600000);
  const minutes = Math.floor((elapsedTime % 3600000) / 60000);
  const seconds = Math.floor((elapsedTime % 60000) / 1000);
  const formattedTime = `${padNumber(hours)}:${padNumber(minutes)}:${padNumber(seconds)}`;
  chronoElement.textContent = formattedTime;
}

function startPauseTimer() {
  if (!startTime) {
    startTime = Date.now();
    playPauseBtn.textContent = "Pause";
    timer = setInterval(updateTimer, 1000);
  } else if (!pausedTime) {
    pausedTime = Date.now();
    playPauseBtn.textContent = "Reprendre";
    clearInterval(timer);
  } else {
    const pauseDuration = Date.now() - pausedTime;
    startTime += pauseDuration;
    pausedTime = null;
    playPauseBtn.textContent = "Pause";
    timer = setInterval(updateTimer, 1000);
  }
}

function tour() {
  const elapsedTime = Date.now() - startTime;
  const lapTime = elapsedTime - (tours.length > 0 ? tours[tours.length - 1] : 0);
  tours.push(elapsedTime);
  const lapNumber = tours.length;
  const formattedTime = `${padNumber(Math.floor(lapTime / 3600000))}:${padNumber(Math.floor((lapTime % 3600000) / 60000))}:${padNumber(Math.floor((lapTime % 60000) / 1000))}`;
  const lapItem = document.createElement("li");
  lapItem.textContent = `Tour ${lapNumber}: ${formattedTime}`;
  toursList.appendChild(lapItem);
}

function resetTimer() {
  clearInterval(timer);
  startTime = null;
  pausedTime = null;
  tours = [];
  chronoElement.textContent = "00:00:00";
  while (toursList.firstChild) {
    toursList.removeChild(toursList.firstChild);
  }
  playPauseBtn.textContent = "Démarrer";
}

function padNumber(number) {
  return number.toString().padStart(2, "0");
}

playPauseBtn.addEventListener("click", startPauseTimer);
tourBtn.addEventListener("click", tour);
resetBtn.addEventListener("click", resetTimer);