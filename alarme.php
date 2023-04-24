<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alarme.css">
    <link rel="stylesheet" href="style.css">
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
    <?php 
    require("footer.php")
?>
</body>

</html>

<script src="alarme.js"></script>