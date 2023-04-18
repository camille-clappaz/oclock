
<?php 

require("bdd.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="alarme">
        <form action="">
        <input type="datetime-local" name="alarme" id="alarme">
        <button id="enregistrer" type="submit" name="enregistrer">Enregistrer</button>
        </form>
    </div>
</body>
<script>
    let enregistrer= document.getElementById("enregistrer");
    if (enregistrer) {
        enregistrer.addEventListener("click", (e) => {
        list.innerHTML = "";
        if (e.target.value != '') {
            fetch('alarme.php').then((res) => {
                return res.json()
            }).then((data) => {
                data.forEach(element => {
                    let p = document.createElement('p');
                    p.innerHTML =  element.alarme ;
                    list.append(p);
                });
            }).catch((err) => {
                console.log(err);
            })

        }
    })

}
    document.addEventListener("keyup", () => {
        let now = new Date();
        let date = document.getElementById("alarme");
        if (date.value != "") {
            sessionStorage.setItem("alarme", new Date(date.value));
            let data = sessionStorage.getItem('alarme');
            console.log(data);
        }
    })
</script>
<?php

if(isset($_GET['enregistrer'])){
    // var_dump("woooo");
    $alarme = $_GET['alarme'];
    $requete = $bdd->prepare('INSERT INTO `alarmes`(`alarme`) VALUES (?)');
    $requete->execute([$alarme]);

}
if(isset($_GET['enregistrer'])){
    $req2 =  $bdd->prepare('SELECT alarme FROM alarmes' );
    $req2->execute();
    $req2 = $req2->fetchAll(PDO::FETCH_ASSOC);
    var_dump($req2);

}

?>
</html>