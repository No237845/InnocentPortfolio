<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Portfolio Inno</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="{{ asset('acceuil/img/icon.png') }}" sizes="48x48">
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: black; /* Fond noir par défaut */
            transition: background-color 1s;
            width: 100%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        /* Ajoutez ce CSS */




        /**Loader */
        .loading-container{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
        }
        #loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid gray;
  border-radius: 50%;
  border-top: 16px solid greenyellow;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
#myDiv {
  display: none;

}
        /**Partie competence */
        .competences_part{
            padding-top: 70px;
        }
        .competences{
            display: flex;
            justify-content: space-between;
            
            width: 80%;
            margin-left: 10%;
        }

        .competences1,.competences2
        {
            
                width:400px;
                height: 400px;
                background-color: white;
                border: 1px solid #e8e8e8;
                border-radius: 6px;
                padding: 1.8rem;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                box-shadow: 2px 2px 1px 3px gray
                
           
        }
        .competences1::before,.competences2::before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
        }

        .competences1:hover,.competences2:hover{
            transform: translateY(-2px);
            box-shadow: 14px 4px 1px 7px gray;
            border-color: #bdc3c7;
        }

        .competences p{
            color: #2c3e50;
            font-size: 1.4rem;
            font-weight: 600;
            text-align: center;
            margin: 0 0 1.5rem 0;
            line-height: 1.4;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        .competences ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .competences li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.8rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #555;
        }

        ion-icon {
            color: greenyellow;
            font-size: 1.5rem;
        }
/**Carroussel distinction */
                    .slideshow-container {
                        
                        max-width: 700px;
                        position: relative;
                        margin: auto;
                    }

                    /* Hide the images by default */
                    .mySlides {
                    display: none;
                    }

                    /* Next & previous buttons */
                    .prev, .next {
                    cursor: pointer;
                    position: absolute;
                    top: 50%;
                    width: auto;
                    margin-top: -22px;
                    padding: 16px;
                    color: white;
                    font-weight: bold;
                    font-size: 18px;
                    transition: 0.6s ease;
                    border-radius: 0 3px 3px 0;
                    user-select: none;
                    }

                    /* Position the "next button" to the right */
                    .next {
                    right: 0;
                    border-radius: 3px 0 0 3px;
                    }

                    /* On hover, add a black background color with a little bit see-through */
                    .prev:hover, .next:hover {
                    background-color: rgba(0,0,0,0.8);
                    }

                    /* Caption text */
                    .text {
                    color: greenyellow;
                    font-size: 15px;
                    padding: 8px 12px;
                    position: absolute;
                    bottom: 8px;
                    width: 100%;
                    text-align: center;
                    }

                    /* Number text (1/3 etc) */
                    .numbertext {
                    color: greenyellow;
                    font-size: 12px;
                    padding: 8px 12px;
                    position: absolute;
                    top: 0;
                    }

                    /* The dots/bullets/indicators */
                    .dot {
                    cursor: pointer;
                    height: 15px;
                    width: 15px;
                    margin: 0 2px;
                    background-color: #bbb;
                    border-radius: 50%;
                    display: inline-block;
                    transition: background-color 0.6s ease;
                    }

                    .active, .dot:hover {
                    background-color: #717171;
                    }

                    /* Fading animation */
                    .fade {
                    animation-name: fade;
                    animation-duration: 1.5s;
                    }

                    @keyframes fade {
                    from {opacity: .4}
                    to {opacity: 1}
                    }

        /**Partie personnaliter */
        .personaliter{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .personaliter_description{
            display: flex;
            margin-top: 0px;
            margin-left: 30px;
            margin-right: 50px;
            flex-direction: column;
            gap: 30px;
        }
       .img{
        width: 500px;
        height: 520px;
       }
        
        .navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
            width: 100%;
            background-color: #2d2d2d;
            padding: 0 20px;
        }
        
        .navigation1 {
            color: white;
            font-size: large;
        }
        
        .navigation2 ul {
            display: flex;
            gap: 20px;
        }
        
        .navigation2 li {
            list-style-type: none;
        }
        
        .navigation2 a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .navigation2 a:hover {
            color: #ccc;
        }
        /**Contact
         */
        .contact{
            margin-top: 60px;
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }
        /**Accomplissement */
        .accomplissement_web{
            margin-top: 60px;
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
        }

        .accomplissement_analyse{
            margin-top: 60px;
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
        }
        /**experience en entreprise */
        .experience_orange{
            margin-top: 60px;
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
        }

        .experience_foulisa{
            margin-top: 60px;
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
        }
        /* Menu hamburger pour mobile */
        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
        }
        
        .menu-toggle span {
            display: block;
            height: 3px;
            width: 100%;
            background-color: white;
            border-radius: 3px;
        }

        .body{
            height: 4000px;
            background-color: #000000;
        }
        button:hover{
            background-color: greenyellow !important;
            transform: translateY(-5px) !important;
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
        }
        /* Ajoutez ces règles à votre section media queries existante ou créez-en une nouvelle */

@media (max-width: 1024px) {
    .personaliter {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .personaliter_description {
        margin: 30px 20px;
        align-items: center;
    }
    
    .personaliter_description p {
        width: 100% !important;
    }
    
    .img {
        width: 300px !important;
        height: auto !important;
    }
    
    .competences {
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }
    
    .competences1, .competences2 {
        width: 90% !important;
        height: auto !important;
    }
    
    .experience_orange, 
    .experience_foulisa,
    .accomplissement_web,
    .accomplissement_analyse {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .experience_orange p,
    .experience_foulisa p,
    .accomplissement_web p,
    .accomplissement_analyse p {
        width: 100% !important;
    }
    
    .slideshow-container {
        width: 100% !important;
    }
    
    .mySlides img {
        width: 100% !important;
        height: auto !important;
    }
}

@media (max-width: 768px) {
    .personaliter_description h1 {
        font-size: 36px !important;
    }
    
    .personaliter_description h2 {
        font-size: 20px !important;
    }
    
    .contact {
        flex-direction: column;
        gap: 20px;
    }
    
    .contact a {
        margin-bottom: 15px;
    }
    
    .navigation {
        padding: 0 10px;
    }
    
    .navigation1 p {
        font-size: 16px !important;
    }
}

@media (max-width: 480px) {
    .personaliter_description h1 {
        font-size: 28px !important;
    }
    
    .personaliter_description h2 {
        font-size: 16px !important;
    }
    
    .personaliter_description p {
        font-size: 14px;
    }
    
    .competences_part h1,
    .experiences h1,
    .accomplissement h1,
    .accomplissement h3,
    .contact h1 {
        font-size: 24px !important;
    }
    
    button {
        width: 80% !important;
        margin: 0 auto;
    }
}
        /* Responsive styles */
        @media (max-width: 768px) {
            .navigation {
                position: relative;
                padding: 0 15px;
            }
            
            .navigation2 {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: #2d2d2d;
                padding: 20px;
                display: none;
                flex-direction: column;
            }
            
            .navigation2.active {
                display: flex;
            }
            
            .navigation2 ul {
                flex-direction: column;
                gap: 15px;
            }
            
            .menu-toggle {
                display: flex;
            }
        }
        
    </style>
</head>
<body onload="myFunction()">


<div id="loader" ></div>

<div id="myDiv">
<header >
        <nav class="navigation">
            <div class="navigation1"><p style="color: white;font-size:large;">Inno Dev</p></div>
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navigation2" id="nav-links">
                <ul class="lien">
                    <li><a href=""style="color: white;">Acceuil</a></li>
                    <li><a href="#competences"style="color: white;">Competences</a></li>
                    <li><a href="#experiences"style="color: white;">Experiences</a></li>
                    <li><a href=""style="color: white;">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="body">
        <div class="personaliter">
            <img src="{{asset('acceuil/img/profile.jpg')}}" alt="Profile" class="img" id="profile-image"
                data-original="{{asset('acceuil/img/profile.jpg')}}"
                data-hover="{{asset('acceuil/img/profile-hover.jpg')}}">
            <div class="personaliter_description">
                <h1 style="color: white;font-size:50px" >Kabore Innocent <div id="div1" class="fa" style="color: greenyellow;"></div></h1>
                <h2 style="color: greenyellow;"><span id="typewriter"></span></h2>
                <p style="color: white; width: 600px;">
                    Expert Laravel avec 2 ans d'expérience dans le développement d'APIs RESTful 
                    et la création de systèmes de gestion de données. Spécialisé dans :
                    <ul style="color: white; margin-top: 10px;">
                        <li>Développement d'applications web avec Laravel (MVC, Eloquent, Blade)</li>
                        <li>Analyse et traitement de données avec Python/Pandas</li>
                        <li>Création de tableaux de bord interactifs</li>
                        <li>Optimisation des requêtes SQL et modélisation de bases de données</li>
                    </ul>
                </p>
                <button style="width:100px;height:45px;"><b>Savoir plus</b></button>
            </div>
        </div>

        <div class="competences_part" id="competences">
        <h1 style="color: white; text-align: center; margin: 30px 0;" data-aos="zoom-in">Mes compétences</h1>
            <div  class="competences">
            <div class="competences1" data-aos="fade-up-right" data-aos-delay="100">
                    <p style="color: black;" >Développement Web/Mobile</p>
                    <ul>
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>Laravel {PHP}
                        </li>
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>Fluter {Dart}
                        </li>
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>Architecture MVC
                        </li>
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>MSQ/SQLITE/POSTGRES
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>ANGULAR

                        </li>
                        <button style="width:180px;height:45px;"><b>Voir mes Certification</b></button>
                    </ul>
                </div>

                <div class="competences2" data-aos="fade-up-left" data-aos-delay="300">
                    <p style="color: black;" >Analyse de données</p>
                    <ul>
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>Feuilles de calculs{Excell|Sheet}
                        </li>

                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>Visualisation avec Tableau
                        </li>
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>Analyse avec R
                        </li>
                        <li style="color: black;"><span><ion-icon name="checkmark-done-circle-outline"></ion-icon></span>Analyse avec Python
                        </li>
                        <button style="width:180px;height:45px;"><b>Voir mes Certification</b></button>
                    </ul>
                </div>
            </div>

        </div>

        <div class="experiences" id="experiences">
            <h1 style="color: white; text-align: center; margin-top: 100px;" data-aos="zoom-in">Mes experiences en entreprise</h1>
            <div class="experience_orange" data-aos="flip-up">
                <img src="{{asset('acceuil/img/orange.jpeg')}}" alt="" width="300px">
                <p style="color: white; width:550px"><span><b>Developer web mobile pour le projet solarhat</b></span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi incidunt, laboriosam et 
                    quas eveniet numquam magni debitis asperiores, necessitatibus corrupti 
                    fuga cum ex illo enim aliquam doloremque recusandae cupiditate deleniti!</p>
            </div>
            <div class="experience_foulisa" data-aos="flip-up">
            <img src="{{asset('acceuil/img/FOULISA.png')}}" alt="" width="300px">
                <p style="color: white; width:550px"><span><b>Developer web mobile pour le projet solarhat</b></span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi incidunt, laboriosam et 
                    quas eveniet numquam magni debitis asperiores, necessitatibus corrupti 
                    fuga cum ex illo enim aliquam doloremque recusandae cupiditate deleniti!</p>
            </div>
        </div>


        <div class="accomplissement">
            <h1 style="color: white; text-align: center; margin-top: 100px;" data-aos="zoom-in">Mes projets accomplient</h1>
            <h3 style="color: white; text-align: center; margin-top: 100px;">Developpement Web</h3>
            <div class="accomplissement_web" data-aos="flip-up">
                <p style="color: white; width:500px"><span><b>FasoLafi</b></span><br>FasoLafi est une applicationsweb mobile
            concu afin de ressoudre le soucis de tracabiliter des antecedant medicaux de patient du a la perte au changement constant de carnet de sante qui
                 ne favorise pas leur prise en  charge effective en cas de maladie <a href="" style="color: greenyellow;"><b>Git</b></a></p>
                 <img src="{{asset('acceuil/img/LogoFasoLafi.jpg')}}" alt="" width="90px">
            </div>
            <div class="accomplissement_web" data-aos="flip-up">
                <p style="color: white; width:500px"><span><b>DigitalProtect</b></span><br>DigitalProtect est une application web mis en place pour contribuer a la mission de 
                la cil dans le sens de la protection des donnee et plus sensibiliser les utilisation sur les 
                bonnes pratiques en matiere de protection de donnee <a href="" style="color: greenyellow;"><b>Git</b></a></p>
                 <img src="{{asset('acceuil/img/DigitalProtect.svg')}}" alt="" width="90px">
            </div>

            <div class="accomplissement_web" data-aos="flip-up">
                <p style="color: white; width:500px"><span><b>Water Mining</b></span><br>Water Mining est une application web qui va permettre a une entreprise agissant
                dans le domaine des eau et des mines et d interagir avec des 
                personne desireux se former et bien plus <a href="https://waterandminingengineering.com/" style="color: greenyellow;"><b>Lien</b></a></p>
                 <img src="{{asset('acceuil/img/water.jpg')}}" alt="" width="90px">
            </div>

            <h3 style="color: white; text-align: center; margin-top: 100px;">Analyse de données</h3>
            <div class="accomplissement_analyse" data-aos="flip-up">
                <p style="color: white; width:500px"><span><b>CO2 EMISSION analyse</b></span><br>Pour la finalisation de ma Certification
                Google Data Analyst j'ai eu a analyser les données de CO2 emis par tous les region du monde et visualiser ceux ci sur
                 <a href="https://public.tableau.com/app/profile/wendgouda.marie.innocent.kabore/viz/TableaudebordemissiondeCO2parregion/DashboardEmissiondeCO2perRegion" style="color: greenyellow;"><b>Tableau</b></a></p>
                 <img src="{{asset('acceuil/img/analyse.jpeg')}}" alt="" width="90px">
            </div>
        </div>

        <div data-aos="zoom-in">
            <h1 style="color: white; text-align: center; margin-top: 100px; margin-bottom:50px">Distinctions</h1>
            <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="{{asset('acceuil/img/c2c.jpg')}}" style="width:700px;height:500px">
            <div class="text"><b>3 EME PRIX COME TO CODE 2025</b></div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="{{asset('acceuil/img/osc.jpeg')}}" style="width:700px;height:500px">
            <div class="text"><b>3 EME PRIX OSC 2024</b></div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="{{asset('acceuil/img/SDN.jpeg')}}" style="width:700px;height:500px">
            <div class="text"><b>2 EME PRIX SEMAINE DU NUMERIQUE</b></div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div>
            <h1 style="color: white; text-align: center; margin-top: 100px; margin-bottom:50px">Pas de stress contacter Moi</h1>
            <div class="contact" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
                <a href=""><ion-icon name="mail-unread-outline" style="font-size: 80px;"></ion-icon></a>
                <a href=""><ion-icon name="logo-whatsapp" style="font-size: 80px;"></ion-icon></a>
                <a href=""><ion-icon name="logo-linkedin" style="font-size: 80px;"></ion-icon></a>
            </div>
        </div>

        
        
    </div>
</div>



    
    <script>
        // Script pour le menu mobile
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.getElementById('nav-links');
        
        mobileMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    </script>
    <script>
    const profileImage = document.getElementById('profile-image');
    
    profileImage.addEventListener('mouseenter', function() {
        this.src = this.dataset.hover;
    });
    
    profileImage.addEventListener('mouseleave', function() {
        this.src = this.dataset.original;
    });
</script>

<script>
    const text = "Developper Web/Mobile | Data Analyst Junior";
    const typewriter = document.getElementById("typewriter");
    let i = 0;
    let isDeleting = false;
    let colorToggle = false;

    function type() {
      if (isDeleting) {
        typewriter.textContent = text.substring(0, i--);
      } else {
        typewriter.textContent = text.substring(0, i++);
      }

      if (!isDeleting && i === text.length + 1) {
        // Pause à la fin de l'écriture
        setTimeout(() => isDeleting = true, 1000);
      } else if (isDeleting && i < 0) {
        // Changer de couleur et recommencer
        isDeleting = false;
        i = 0;
        colorToggle = !colorToggle;
        typewriter.className = colorToggle ? "green" : "orange";
      }

      setTimeout(type, isDeleting ? 50 : 100);
    }

    type();
  </script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
                       let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
    </script>
    <script>
        function hand() {
        var a;
        a = document.getElementById("div1");
        a.innerHTML = "&#xf25a;";
        setTimeout(function () {
            a.innerHTML = "&#xf256;";
            }, 500);
        setTimeout(function () {
            a.innerHTML = "&#xf259;";
            }, 1000);
        setTimeout(function () {
            a.innerHTML = "&#xf256;";
            }, 1500);
        }
        hand();
        setInterval(hand, 2000);
</script>
        <script>
        var myVar;

        function myFunction() {
        myVar = setTimeout(showPage, 2000);
        }

        function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        }
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  // Initialisation après le chargement complet
  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
    
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      mirror: false,
      offset: 120,
      delay: 100
    });
  }
</script>
</body>
</html>