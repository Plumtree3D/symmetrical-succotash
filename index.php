<?php 
$title = "Céleste's Portfolio";
require 'head.php';
?>

<!-- Curiosity killed the cat...  -->


<body id="body">
    <img id=cable class="browserElements" src="images/cable.svg" alt="">
    <header id="header"> 
<?php include 'switches.html' ?>
        <div id="greetWindow">
            <span class="pixel en"> Hello and welcome to... </span>
            <span class="pixel fr"> Bonjour et bienvenue! </span>
            <div id="innerGreetWindow">
                <!-- en version -->
                <h3 class="sticker" data-text="Céleste's">
                    <span class="purpleSpan"> Céleste's </span> </h3>
                <h1 class="sticker" data-text="Portfolio">
                    <span class="stickerSpan">Portfolio</span>
                </h1>
                <br>
                <span class="en"> (I'm a web developper btw) </span>
                <span class="fr"> (Je suis dev web du coup) </span>
                <a href="#scroll01" class="buttonLink"> OK </a>
            </div>
        </div>

    </header>
    <hr>

    <div class="section">
        <div class="sectionTitle" id="scroll01">
            <h2 class="sticker" data-text="About me">
                <span class="stickerSpan">About me</span>
            </h2>
        </div>

        <div class="row">
            <div id="inset_border">
                <div class="inset">
                    <span class="pixel en"> > Happy to see you see me ! <br> > </span>
                    <span class="pixel fr"> > Ça fait plaisir de vous voir ici! </span>
                </div>
            </div>
            <img id="polaroid" src="images/avatar.png" srcset="images/avatar.png 388w, images/avatar_min.png 184w" sizes="(max-width: 388px) 469px, (max-width: 184px) 254px"  alt="Little drawing of my face (colors may vary depending on your monitor and my mood">
        </div>
        <div class="column">
            <p class="mainText en">
                Hi, my name is Céleste, I am a french, twenty-something years old student attending the Access Code
                School course in Lons-le-Saunier (France), I am learning back and front end web development for desktop
                and mobile devices.
            </p>
            <p class="mainText fr">
                Salut ! Moi c'est Céleste, j'apprends le développement web et web mobile à l'Access Code School de
                Lons-Le-Saunier.
            </p>
            <p class="mainText en">
                Independant and extremely driven, I am always eager to push the boundaries of my knowledge and I reach my goals more often than not. On the other hand I also know how to take and follow criticism with good
                faith and an open mind.
            </p>
            <p class="mainText fr">
                Autonome et flexible, j'arrive souvent à mes fins avec juste assez de temps et de détermination, mais je
                sais aussi accepter l'échec et la critique en bonne foi sans jamais abandonner.
            </p>
        </div>
        <div>
            <div class="projectsWindow">
                <img class="windowClose" src="images/window-close.svg" alt="">
                <div class="innerWindow">
                    <p class="en"> I've had the occasion to work on several web development projects, giving me the
                        opportunity to blablah </p>
                    <p class="fr"> Durant ma formation, j'ai eu l'occasion de travailler sur de nombreux projets et
                        d'acquérir blablabla </p>
                    <a href="#scroll02" class="pixel buttonLink en"> OK, SHOW ME THE STUFF! </a>
                    <a href="#scroll02" class="pixel buttonLink fr"> OK MAIS MONTRE ! </a>
                </div>
            </div>
            <p class="mainText jack en">
                I like art! <br> Especially music, I have been playing drums and bass guitar for quite a few years now
                and I also enjoy sewing as well as 3D art and animation.
            </p>
            <p class="mainText jack fr">
                Je m'interesse à plein de choses ! <br> Surtout la musique, je joue de la basse et de la batterie depuis
                maintenant quelques années mais j'aime également coudre et je fais de la modélisation 3D.
            </p>
            <a href="#" target="blank"><img id="pick" src="images/pick.svg" alt="élément décoratif"></a>
        </div>

    </div>
<div class="portfolioSection" id="scroll02">
<a href="projects.php" class="book">
    <div class="back">
        
    </div>
    <div class="page6"> <p> Click here to see my various <br> development works and projects ! </p>
    </div>
    <div class="page5"> </div>
    <div class="page4"> </div>
    <div class="page3"> </div>
    <div class="page2"> </div>
    <div class="page1"> </div>
    <div class="front"><div class="reliure">
    <h2 class="portfolioTitle" data-text="My projects">
        <span class="stickerSpan">My projects</span></h2>
    </div>
    </div>
</a>
</div>

<?php include 'footer.php' ?>

    <script src="script.js"> </script>


</body>


</html>