<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oclock</title>
</head>

<body onload=showDate();>
  
    <div class="horloge">

    </div>
    <script>
        function showDate(){
        let horloge = document.querySelector(".horloge");
        let now = new Date();
        let heure = ('0' + now.getHours()).slice(-2);
        let minute = ('0' + now.getMinutes()).slice(-2);
        let seconde = ('0' + now.getSeconds()).slice(-2);
        let p = document.createElement("p");
        let time=heure+':'+minute+':'+seconde;
        horloge.innerHTML=time;
        setTimeout('showDate()',1000);
    }
    </script>
</body>

</html>