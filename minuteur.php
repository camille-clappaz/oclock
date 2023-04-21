<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="sablier"></div>
</html><p>Temps restant : <span id="countdown"></span></p>
<label for="hours">Heures :</label>
<input type="number" id="hours" min="0" max="24" value="0">
<label for="minutes">Minutes :</label>
<input type="number" id="minutes" min="0" max="59" value="0">
<label for="seconds">Secondes :</label>
<input type="number" id="seconds" min="0" max="59" value="0">
<button id="toggleButton" >Démarrer</button>
</body>


<script>
    let timerId;
    let totalTime;
    let secondsLeft;
    let timerRunning = false;

    function countdown() {
        if (secondsLeft === 0) {
            alert("Le minuteur est terminé !");
            clearInterval(timerId);
            document.getElementById("toggleButton").textContent = "Démarrer";
            timerRunning = false;
        } else {
            let hours = Math.floor(secondsLeft / 3600);
            let minutes = Math.floor((secondsLeft - hours * 3600) / 60);
            let seconds = secondsLeft - hours * 3600 - minutes * 60;
            let displayString = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            document.getElementById("countdown").textContent = displayString;
            secondsLeft--;
        }
    }

    function toggleTimer() {
        if (timerRunning) {
            clearInterval(timerId);
            document.getElementById("toggleButton").textContent = "Démarrer";
            timerRunning = false;
        } else {
            let hours = parseInt(document.getElementById("hours").value);
            let minutes = parseInt(document.getElementById("minutes").value);
            let seconds = parseInt(document.getElementById("seconds").value);
            totalTime = hours * 3600 + minutes * 60 + seconds;
            secondsLeft = totalTime;
            timerId = setInterval(countdown, 1000);
            document.getElementById("toggleButton").textContent = "Arrêter";
            timerRunning = true;
        }
    }
    let start=document.getElementById("toggleButton");
    start.addEventListener("click", toggleTimer);
</script>