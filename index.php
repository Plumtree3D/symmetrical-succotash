<!DOCTYPE html>

<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Céleste's portfolio </title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" media="screen and (max-width: 1023px)" href="styles/mobilestyling.css">
    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="styles/browserstyling.css">


</head>


<!-- Curiosity killed the cat...  -->


<body id="body">
    <img id=cable class="browserElements" src="images/cable.svg" alt="">
    <header id="header">
        <div class="switches">
            <label class="switch">
                <input type="checkbox" id="nightmode" onclick="nightmode()">
                <span class="slider night"></span>
            </label>

            <label class="switch">
                <input type="checkbox" id="language" onclick="language()">
                <span class="slider lang"></span>
            </label>
        </div>
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
            <img id="polaroid" src="images/polaroid_frame.png" alt="">
        </div>
        <div class="column">
            <p class="mainText en">
                Hi, my name is Céleste, I am a french, twenty-something years old student attending the Access Code
                School course in Lons-le-Saunier (France), I am learning back and front end web development for desktop
                and mobile devices.
            </p>
            <p class="mainText fr">
                Salut! Moi c'est Céleste, j'apprends le developement web et web mobile à l'Acces Code School de
                Lons-Le-Saunier.
            </p>
            <p class="mainText en">
                Independant and extremely driven, I am always eager to push the boundaries of my knowledge and I come to
                my ends more often than not. On the other hand I also know how to take and follow criticism with good
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
                Je m'interesse à plein de choses! <br> Surtout la musique, je joue de la basse et de la batterie depuis
                maintenant quelques années mais j'aime également coudre et je fais de la modélisation 3D.
            </p>
            <img id="pick" src="images/pick.svg" alt="élément décoratif">
        </div>

    </div>

    <hr>

    <div class="sectionTitle">
        <h2 class="sticker" id="scroll02" data-text="My projects">
            <span class="stickerSpan">My projects</span></h2>
    </div>

    <p>
        This is a project we were given
    </p>



    <div class="window"> 
        <img class="windowClose" src="images/window-close.svg" alt="">
        </div>
    </div>



    <hr>

    <div class="sectionTitle">
        <h2 class="sticker" id="scroll03" data-text="Get in touch">
            <span class="stickerSpan">Get in touch</span></h2>
    </div>

    <footer>
        <div class="contactForm en">
            <form action="contact.php">
                <p> Send a message, <br> I'll come back to you shortly </p>
                <input type="text" name="name" id="name" placeholder="Your name...">
                <input type="email" name="mail" id="email" placeholder="Email adress here...">
                <textarea id="subject" name="message" placeholder="Write something nice..."> </textarea>
                <input type="submit" name="mailform" value="Send ?">
            </form>
            <?php if(isset($msg)) {
            echo $msg;
         }
         ?>
        </div>

        <img src="images/enveloppelower.svg" alt="" id="calque" class="enveloppe browserElements">
        <img src="images/enveloppeupper.svg" alt="" class="enveloppe browserElements">







        <div class="mediaButtons">
            <span class="githubTxt en"> Check me out on github !</span>
            <span class="githubTxt fr"> Jette un oeil à mon github !</span>
            <a id="github" href="https://github.com/Plumtree3D" target="blank"><img src="images/github.svg"
                    alt="Link to my GitHub"></a>
            <span class="linkedinTxt en"> Or fetch me on linkedIn ?</span>
            <span class="linkedinTxt fr"> Ou retrouve moi sur LinkedIn...</span>
            <a id="linkedin" href="https://www.linkedin.com/in/c%C3%A9leste-robert-casals/" target="blank"><img
                    src="images/linkedin.svg" alt="Link to my LinkedIn"></a>
            <img id="imgButton" src="images/button.svg" alt="éléments décoratifs" width="300">
        </div>

    </footer>

    <script type="text/javascript" src="script.js"> </script>


</body>


</html>