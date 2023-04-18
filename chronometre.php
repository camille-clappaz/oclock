<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="chronometre">
        <form action="">
            <button id="marche" type="submit" name="marche">Marche/Arrêt</button>
            <button type="submit" name="tour">Tour</button>
            <button type="reset" name="reset">Reset</button>
        </form>

    </div>
    <div class="tour">

    </div>
    <script>
        let chrono = document.querySelector(".chronometre");
        let p= document.createElement("p");
        chrono.prepend(p);
        
        let heure = 0;
        let mili = 0;
        let sec = 0;
        // affichage du compteur à 0
        p.innerHTML ="0" + heure + ":" + "0" + sec + ":" + "0" + mili;
        let marche= document.getElementById("marche");
        marche.addEventListener("click", ()=>{
          
        })
      
    </script>
    
</body>
</html>