<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="minuteur">
<form action="">
    <input id="heure" type="text">
    <label for="heure">heure</label>
    <input id="minute" type="text">
    <label for="minute">minute</label>
    <input id="seconde" type="text">
    <label for="seconde">seconde</label><br>
    <button id="go" type="submit" name="go">Go</button>
</form>
</div>

<body>
    <script>
      
     
     let go=document.getElementById("go");
    //  let min=document.getElementById("minute");
    //  console.log(go);
    const departMinutes = 1 ;
    // let temps = departMinutes * 60;
    
    const departHeures = 1;
// let temps2 = departHeures * 60 ;

const departSec = 1;
// let temps3 = departSec;

let time = departHeures*3600 + departMinutes * 60 + departSec ;
console.log(time)

        
       

        let minuteur=document.querySelector(".minuteur");
        let timerElement = document.createElement("p");
        minuteur.prepend(timerElement);

        setInterval(() => {
            //
            let heures = parseInt(time / 3600, 10)
            console.log(time)
        
            let minutes = parseInt(time % 3600 / 60, 10)
            let secondes = parseInt(time % 60, 10)
            console.log(heures,minutes,secondes)
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
            // temps = temps <= 0 ? 0 : temps - 1
            
            // temps2 = temps2 <= 0 ? 0 : temps2 - 1
            // temps3 = temps3 <= 0 ? 0 : temps3 - 1
        }, 1000)



    
    </script>

</body>

</html>