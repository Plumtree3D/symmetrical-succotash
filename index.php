<!DOCTYPE html>

<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to my portfolio! I'm a student front and back end developer from France. ">
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
                <input aria-label="Dark/ light mode" type="checkbox" id="nightmode" onclick="nightmode()">
                <span class="slider night"></span>
            </label>

            <label class="switch">
                <input aria-label="Switch to french/ English" type="checkbox" id="language" onclick="language()">
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

    <hr>
    
        <div class="sectionTitle">
            <h2 class="sticker" id="scroll02" data-text="My projects">
                <span class="stickerSpan">My projects</span></h2>
        </div>


    <div class="sectionPortfolioWip">
        
        <div class="stickyShadow">
            <!--EN//////////////-->
                <div class="stickyNote en">
                <span> I'm so sorry !  </span>
                
                <p>
                    This section is not available for mobile devices. <br> 
                    (It's a work in progress!) <br>
                    Please try again from a desktop.
                </p>

            </div>

            <!--FR/////////////-->

            <div class="stickyNote fr">
                <span> Oh oh !  </span>
                
                <p>
                    Cette section n'est pas encore accessible depuis les appareils mobiles, mais ça va vient! <br>
                    Merci de réessayer avec un ordinateur. 
                </p>

            </div>
        </div>
    </div>

    <div class="sectionPortfolio browserElements">

        <div class="comment">
            <span class="en"> Click to access the website </span>
            <span class="fr"> Clic ici pour voir le site </span>
            <img src="images/arrow.svg" alt="">
        </div>

        <div class="projectDisplay">
            <div class="stickyShadow">
                <div id="sn1" class="stickyNote">
                    <div> <span class="mainText en"> A mock up for a restaurant's website, made with Figma </span></div>
                    <p class="mainText en"> This was my first experience with Figma and basically with design. I consider Figma pretty intuitive and it was a fun project to make! </p>
                    <div> <span class="mainText fr"> La maquette d'une site de restaurant, avec Figma </span></div>
                    <p class="mainText fr"> Ça a été ma toute première expérience avec Figma et le design en général. J'ai trouvé Figma assez intuitif et le projet était très amusant et agréable. </p>
                </div>
            </div>
                <div class="phone">
                    <div class="phonespk"></div>
                    <a href="https://www.figma.com/file/8tMqU1Y9gHsklxphdfMnUA/Maquette?node-id=17%3A3" target="blank" aria-label= "Link to the website"><img src="images/pize.jpg" alt=""> </a>
                    <div class="phonebtn"></div>
                </div>
        </div>

        <div class="fullWidth">
                <span class="mainText en"> A restaurant website </span>
                <p class="mainText en"> The design was made by a classmate and we were a group of three working on the integration. It was the very first time I tried using JavaScript on a project and I'd say it turned out pretty well. I mostly worked on the header and footer as well as the responsiveness.   </p>
                <span class="mainText fr"> Le site web d'un fast food </span>
                <p class="mainText fr"> Le design du site a été fourni par un camarade, nous étions trois à travailler sur cette intégration. C'est la toute première fois que j'ai essayé d'utiliser du JavaScript dans un projet. J'ai principalement intégré le header et le footer et étais responsable de l'adaptatif.  </p>
                <div class="windowed">
                <span class="pixel"> &nbsp; La tour de Pize | Restauration rapide </span>
                    <a href="https://ilanr.promo-93.codeur.online/latourdepize/" target="blank" aria-label= "Link to the website"><img src="images/tourdepize.jpg" alt="" width="1200" > </a>
                </div>
        </div>

        <div class="reverse">
            <div class="stickyShadow">
                <div id="sn2" class="stickyNote">
                    <div> <span class="mainText en"> A personal loan bank website  </span> </div>
                    <p class="mainText en"> We were given the mock up and had to make turn it into a working website. We were working by groups of three too. For this project I did the CSS Styling, some JavaScript as well as the tiny bits of PHP. </p>
                    <div> <span class="mainText fr"> Un site de crédits en ligne  </span> </div>
                    <p class="mainText fr"> La maquette a été fournie par notre formateur, une fois encore nous étions un groupe de trois à l'intégrer. Pour ce projet j'ai travaillé entre autres sur les styles et les animations CSS, un peu de JavaScript ainsi que le peu de PHP qui était nécessaire.  </p>
                </div>
            </div>  
            <div class="phone">
                <div class="phonespk"></div>
                <a href="https://ilanr.promo-93.codeur.online/credit-ledonien/" target="blank" aria-label= "Link to the website"><img src="images/credit-ledonien.jpg" alt=""></a>
            </div>
        </div>

        <div class="projectDisplay">
            <div class="stickyShadow">
                <div id="sn3" class="stickyNote">
                    <div> <span class="mainText en"> A javascript game! </span></div>
                    <p class="mainText en"> This is a little game made with vanilla JavaScript, even though it's pretty simple I learnt a lot! Especially to tidy up and optimise my code. It was a solo project, I also made the graphics. </p>
                    <div> <span class="mainText fr"> Un pôtit jeu en JavaScript.  </span></div>
                    <p class="mainText fr"> C'est un petit jeu fait codé en JavaScript vanilla, bien qu'il soit plutôt simple j'ai appris beaucoup! En particulier à organiser et à optimiser mon code. C'était un projet solo, j'ai également travaillé sur les graphismes. </p>
                </div>
            </div>

            <div class="windowed"> 
                <span class="pixel"> &nbsp; Rock, Paper, Scissors, Lizard, Spock ! </span>        
                <a href="https://ilanr.promo-93.codeur.online/rpsls/" target="blank" aria-label= "Link to the website" ><img src="images/rpsls.jpg" alt=""></a>
            </div>
        </div>
    
    </div>



    <hr>

    <div class="sectionTitle">
        <h2 class="sticker" id="scroll03" data-text="Get in touch">
            <span class="stickerSpan">Get in touch</span></h2>
    </div>

    <footer>
        <div class="contactForm">
            <form method="GET" action="#">
                <p> Send a message, <br> I'll come back to you shortly </p>
                <input type="text" name="nom" required id="name" placeholder="Your name..." value="<?php if(isset($_GET['nom'])) { echo $_GET['nom']; } ?>">
                <input type="email" name="mail" id="email" placeholder="Email adress here..." value="<?php if(isset($_GET['mail'])) { echo $_GET['mail']; } ?>" />
                <textarea id="subject" name="message" placeholder="Write something nice..."><?php if(isset($_GET['message'])) { echo $_GET['message']; }?></textarea>
                <input type="submit" name="mailform" value="Send ?">
                <?php echo $msg=""; ?>


                <?php
            if(isset($_GET['mailform'])) {
            if(!empty($_GET['nom']) && !empty($_GET['mail']) && !empty($_GET['message'])) {
                $header="MIME-Version: 1.0\r\n";
                $header.='From:'.$_GET['nom']."\n";
                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                $header.='Content-Transfer-Encoding: 8bit';
                $message='
                <html>
                    <body>
                        <div align="center">
                    
                        <u>Nom de l\'expéditeur :</u>'.$_GET['nom'].'<br />
                        <u>Mail de l\'expéditeur :</u>'.$_GET['mail'].'<br />
                        <br />
                        '.nl2br($_GET['message']).'
                    
                        </div>
                    </body>
                </html>
                ';
                mail("ham.in.kneesocks@gmail.com", "Sujet du message", $message, $header);
                echo "<div class='pixel'> Roger roger, I got you 5/5 ! </div>";
               // header("Refresh: 5; https://ilanr.promo-93.codeur.online/portfolio/");
            } else {
                echo " <div class='pixel'> Something went wrong! Please try again. </div> ";
            }
            }
    ?>

            </form>


        </div>

        <img src="images/enveloppelower.svg" alt="" id="calque" class="enveloppe browserElements">
        <img src="images/enveloppeupper.svg" alt="" class="enveloppe browserElements">

        <div class="mediaButtons">
            <span class="githubTxt en"> Check me out on github !</span>
            <span class="githubTxt fr"> Jette un oeil à mon github !</span>
            <a id="github" href="https://github.com/Plumtree3D" target="blank"><img src="images/github.svg"
                    alt="Link to my GitHub"></a>
            <span class="linkedinTxt en"> Or fetch me on linkedIn ?</span>
            <span class="linkedinTxt fr"> Ou retrouve-moi sur LinkedIn...</span>
            <a id="linkedin" href="https://www.linkedin.com/in/c%C3%A9leste-robert-casals/" target="blank"><img
                    src="images/linkedin.svg" alt="Link to my LinkedIn"></a>
            <img id="imgButton" src="images/button.svg" alt="éléments décoratifs" width="300">

        </div>
<a class="fr privacy" href="privacy.php"> Mentions légales </a>
<a class="en privacy" href="privacy.php"> Terms & Privacy </a>

    </footer>

    <script src="script.js"> </script>


</body>


</html>