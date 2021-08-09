<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryFreinds</title>
       
           <!-- style -->
    <link rel="stylesheet" href="css/default.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

     
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    
           </style>
           <script>
            $(function() {
                $(".toggle").on("click", function() {
                    if ($(".item").hasClass("active")) {
                        $(".item").removeClass("active");
                    } else {
                        $(".item").addClass("active");
                    }
                });
            });
            </script>
</head>
<body>


    <!-- hedear -->
    <nav>
      <ul class="menu">
          <li class="logo"><a href="index.html"><i class="fa fa-paw logo-style" aria-hidden="true" ></i>
      <span class="furryfreinds">FurryFreinds</span></a></li>
          <li class="item u"><a href="index.html">Accueil</a></li>
          <li class="item u"><a href="annonces.html">Publier une annonce</a></li>
          <li class="item u"><a href="#">Contact</a></li>
          </li>
          <li class="item button"><a href="#">Connexion</a></li>
          <li class="item button secondary"><a href="#">inscription</a></li>
          <li class="toggle"><span class="bars"></span></li>
      </ul>
  </nav>


<!-- form -->
<div class="main_container">
    <div class="member-contact-container">
        <div class="member-contact-left">
          <h2 class="h2">Créer un compte</h2>
          <div class="links">
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
           
          </div>
        </div>
        <h5 class="h"> or use your email account </h5>
       
          
          <form class="member-contact-form">
            <div class="multiple-row">
                <input type="text" placeholder="Nom Complet" class="form-in"> 
                <input type="text" placeholder="Numéro de téléphone" class="form-in">
                <input type="email" placeholder="Email" class="form-in"> 
                <input type="password" placeholder="Password" class="form-in">
            </div>
            <button class="buttonMem">S'inscrire</button>
                      
          </form>

          <div class="signup">
            <p class="signup-p"> Vous avez un compte? <a href="">Se connecter</a> </p>
          </div>
        </div>
      </div>
     </div>
     <!-- fin form -->

     
     


     <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                    <i class="fa fa-paw logo-style" aria-hidden="true" ></i>
				                <span class="furryfreinds">FurryFreinds</span>  
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                        <div class="hr"></div>
                        <h6>Contactez nous pour toute information.</h6>
                        <h6>+212 0612345678<span>|</span>furryfreinds@gmail.com</h6>
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-youtube"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-snapchat"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <p>Copyright &copy; 2021.All Rights Reserved.</p>
    </footer>
</body>
<script src="js/imagePreview.js"></script>
</html>