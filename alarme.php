<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alarme.css">
    <title>Document</title>
</head>
<header></header>
<body>
    <label>Entrez une heure: </label>
    <input type="time" id="time">

    <label>Entrez un message: </label>
    <input type="text" id="message">
    <button id="alarm">Ajouter une alarme</button>

    <ul id="alarms"></ul>
</body>

</html>
<script>
    function setAlarm() {
        const timeInput = document.getElementById("time");
        const messageInput = document.getElementById("message");
        const timeValue = timeInput.value;
        const messageValue = messageInput.value;

        // Créer une date avec l'heure sélectionnée
        const alarmDate = new Date();
        const [hours, minutes] = timeValue.split(":");
        alarmDate.setHours(hours, minutes, 0, 0);

        // Vérifier si l'heure de l'alarme est passée
        if (alarmDate < Date.now()) {
            alert("L'heure que vous avez entrée est déjà passée.");
            return;
        }

        // Ajouter l'alarme à la liste
        const alarmsList = document.getElementById("alarms");
        const newAlarm = document.createElement("li");
        newAlarm.innerHTML = `${messageValue} - <span id="${alarmDate}"></span>`;
        alarmsList.appendChild(newAlarm);

        // Mettre à jour le temps restant avant l'alarme toutes les secondes
        let audio = new Audio("cocorico.mp3");
        const interval = setInterval(() => { // attribuer une variable à l'interval permet de le clear après 
            const now = Date.now();
            const timeLeft = alarmDate - now;

            // Afficher "passée" si l'heure de l'alarme est passée
            if (timeLeft <= 0) {
                alert(messageValue);

                audio.play();
                clearInterval(interval);
                newAlarm.innerHTML = `${messageValue} - passée`;
                return;
            }

            // Afficher le temps restant avant l'alarme
            const secondsLeft = Math.floor(timeLeft / 1000) % 60;
            const minutesLeft = Math.floor(timeLeft / 1000 / 60) % 60;
            const hoursLeft = Math.floor(timeLeft / 1000 / 60 / 60);
            newAlarm.innerHTML = ` Dans ${hoursLeft}h ${minutesLeft}m ${secondsLeft}s: ${messageValue} `;
        }, 1000);
       
        // Réinitialiser les champs de saisie
        timeInput.value = "";
        messageInput.value = "";
    }
    let btn= document.getElementById("alarm");
    btn.addEventListener("click", setAlarm);
</script>