<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="chronometre.css">
    <title>Document</title>
</head>

<body>
    <main>
    <div class="chronometre">
        <span id="chrono">00:00:00</span><br>
        <div class="buttons"><button id="marcheArret">Démarrer</button>
        <button id="tour" type="submit" name="tour">Tour</button>
        <button id="reset">Réinitialiser</button></div>
    </div>
    <div id="tours">

    </div>
    </main>
   <script src="chrono.js"></script>
    <?php 
    require("footer.php")
?>
</body>

</html>