<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="horloge.css">
	<link rel="stylesheet" href="style.css">
    <title>oclock</title>
</head>
<header></header>
<body onload=showDate();>
<!-- <div class="sablier"></div> -->
<div class="clock">
	<div class="hour"></div>
	<div class="min"></div>
	<div class="sec"></div>
</div>
<div class="switch-cont">
	<button class="switch-btn"> Light </button>
</div>
  
    <div class="horloge">

    </div>
   <script src="horloge.js"></script>
	
    <?php 
    require("footer.php")
?>
    
</body>

</html>