<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="horloge.css">
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


    const deg = 6;
const hour = document.querySelector(".hour");
const min = document.querySelector(".min");
const sec = document.querySelector(".sec");

const setClock = () => {
	let day = new Date();
	let hh = day.getHours() * 30;
	let mm = day.getMinutes() * deg;
	let ss = day.getSeconds() * deg;

	hour.style.transform = `rotateZ(${hh + mm / 12}deg)`;
	min.style.transform = `rotateZ(${mm}deg)`;
	sec.style.transform = `rotateZ(${ss}deg)`;
};

// first time
setClock();
// Update every 1000 ms
setInterval(setClock, 1000);

const switchTheme = (evt) => {
	const switchBtn = evt.target;
	if (switchBtn.textContent.toLowerCase() === "light") {
		switchBtn.textContent = "dark";
		// localStorage.setItem("theme", "dark");
		document.documentElement.setAttribute("data-theme", "dark");
	} else {
		switchBtn.textContent = "light";
		// localStorage.setItem("theme", "light"); //add this
		document.documentElement.setAttribute("data-theme", "light");
	}
};

const switchModeBtn = document.querySelector(".switch-btn");
switchModeBtn.addEventListener("click", switchTheme, false);

let currentTheme = "dark";
// currentTheme = localStorage.getItem("theme")
// 	? localStorage.getItem("theme")
// 	: null;

if (currentTheme) {
	document.documentElement.setAttribute("data-theme", currentTheme);
	switchModeBtn.textContent = currentTheme;
}

    </script>
</body>

</html>