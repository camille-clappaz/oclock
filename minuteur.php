<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="minuteur.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header></header>
    <div class="sablier"></div>
</html><p>Temps restant : <span id="countdown"></span></p>
<label for="hours">Heures :</label>
<input type="number" id="hours" min="0" max="24" value="0">
<label for="minutes">Minutes :</label>
<input type="number" id="minutes" min="0" max="59" value="0">
<label for="seconds">Secondes :</label>
<input type="number" id="seconds" min="0" max="59" value="0"><br>
<button id="toggleButton" >Démarrer</button>

<?php 
    require("footer.php")
?>
</body>


<script src="minuteur.js"></script>