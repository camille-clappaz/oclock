<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="minuteur">
        <input id="heure" type="text">
        <label for="heure">heure</label>
        <input id="minute" type="text">
        <label for="minute">minute</label>
        <input id="seconde" type="text">
        <label for="seconde">seconde</label><br>
        <button id="go" type="submit" name="go">Go</button>
</div>

<body>
    <script>
        let btn = document.querySelector("button");
        btn.addEventListener("click", () => {
                const departMinutes = document.getElementById("minute").value;
                const departHeures = document.getElementById("heure").value;
                const departSec = document.getElementById("seconde").value;
                let time = departHeures * 3600 + departMinutes * 60 + departSec;
                // console.log(time)

            if (time === 0) { console.log("woop");
    console.log("Le minuteur est terminé!");}
            else {
                // e.preventDefault();
                let minuteur = document.querySelector(".minuteur");
                let timerElement = document.createElement("p");
                minuteur.prepend(timerElement);

                setInterval(() => {
                    //
                    let heures = parseInt(time / 3600, 10)
                    console.log(time)

                    let minutes = parseInt(time % 3600 / 60, 10)
                    let secondes = parseInt(time % 60, 10)
                    console.log(heures, minutes, secondes)
                    //
                    //
                    heures = heures < 1 ? "0" + heures : heures
                    minutes = minutes < 10 ? "0" + minutes : minutes
                    console.log(minutes)
                    secondes = secondes < 10 ? "0" + secondes : secondes
                    console.log(secondes)
                    // 

                    timerElement.innerText = `${heures}:${minutes}:${secondes}`;
                    time = time <= 0 ? 0 : time - 1;
                    console.log(time);
                }, 1000);
                

            } 
        })
    </script>

</body>

</html>