let stars = document.getElementsByClassName("stars");

function nightmode() {
    let nightmodeCheckBox = document.getElementById("nightmode")
    if (nightmodeCheckBox.checked == true) {
        nightStyle()
    } else {
        lightStyle()
    }
}

function language() {
    let langCheckBox = document.getElementById("language")
    let en = document.getElementsByClassName("en");
    let fr = document.getElementsByClassName("fr");
    if (langCheckBox.checked == true) {
        Array.from(en).forEach(element => element.style.display = "none");
        Array.from(fr).forEach(element => element.style.display = "inline-block");
    } else {
        Array.from(en).forEach(element => element.style.display = "inline-block");
        Array.from(fr).forEach(element => element.style.display = "none");
    }
}

function nightStyle() {
    if (window.matchMedia("(min-width: 1023px)").matches) {
        starryNight()
        document.getElementById("body").style.cssText = "background-color: #9871EA; color: white;";
        document.getElementById("header").style.cssText = "background-image: linear-gradient(0deg, rgba(152,113,234,1) 0%, rgba(0,0,0,0) 100%), url(images/nightsky2.jpg); background-size: cover; background-attachment: scroll, fixed;"
        document.getElementById("greetWindow").style.cssText = "background-color: #9871EA; border: solid 2px white";
        document.getElementById("innerGreetWindow").style.cssText = "border-top: solid 2px white";
    } else {
        document.getElementById("body").style.cssText = "background-color: #9871EA; color: white;";
    }
}

function lightStyle() {
    removeStars()
    document.getElementById("body").style.cssText = "background-color: #FEFFBC; color: black;";
    document.getElementById("header").style.cssText = "background: linear-gradient(0deg, rgba(254,255,188,1) 0%, rgba(255,255,255,1) 100%);";
    document.getElementById("greetWindow").style.cssText = "background-color: #FEFFBC; border: solid 2px black";
    document.getElementById("innerGreetWindow").style.cssText = "border-top: solid 2px black";
    if (window.matchMedia("(min-width: 1023px)").matches) {
            
    } else {
        document.getElementById("body").style.cssText = "background-color: #FEFFBC; color: black;";
    }
}

function starryNight() {

    let gascouagne = Math.ceil(Math.random()*15 + 8)

    for(let i = 0; i < gascouagne; i++) {
        let positionY = Math.floor(Math.random()*100);
        let positionX = Math.floor(Math.random()*95);
        let size = Math.ceil(Math.random()*15 + 10);
        let rotation = Math.floor(Math.random()*72);
        let star = document.createElement("div");
        star.className = "stars";
        star.id = "schtarf"+i.toString();
        star.setAttribute("style","left: "+positionX+"vw; top: "+positionY+"vh; width: "+size+"px; height: "+size+"px; transform:rotate("+rotation+"deg);");
        document.getElementById("header").appendChild(star);
        }
}



function removeStars() {
    console.log(stars)
    while(stars.length > 0){
        stars[0].parentNode.removeChild(stars[0]);
    }
}
