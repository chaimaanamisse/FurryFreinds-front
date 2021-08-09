<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryFreinds</title>

          <!-- style -->
    <link rel="stylesheet" href="css/home.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>

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
            <li class="logo"><a href="#"><i class="fa fa-paw logo-style" aria-hidden="true" ></i>
				<span class="furryfreinds">FurryFreinds</span></a></li>
            <li class="item u"><a href="#">Accueil</a></li>
            <li class="item u"><a href="annonces.html">Publier une annonce</a></li>
            <li class="item u"><a href="#">Contact</a></li>
            </li>
            <li class="item button"><a href="login.html">Connexion</a></li>
            <li class="item button secondary"><a href="register.html">inscription</a></li>
            <li class="toggle"><span class="bars"></span></li>
            
        </ul>
    </nav>

    <!-- hero -->

    <div id="home" class="hero">
        <div class="home-left">
            <h1>Bienvenue sur FurryFreinds</h1>
            <p>Vous Souhaitez Adopter Un Animal <br> Domestique?</p>
            <p>Ce site est là pour vous y aider !</p>
            
            <div class="btn-hero">
                <a href="#" class="btn-home b1">Adopter</a>
                <a href="annonces.html" class="btn-home b2">Donner</a>

            </div>

            <div class="scroll-downs">
                <div class="mousey">
                  <div class="scroller"></div>
                </div>
              </div>
           
        </div>
        <div class="home-right">
            
        </div>

        
        
    </div>

   



    <!-- section cats -->

<section class="cats">

        <h1>  Chats en attente d'adoption </h1>
        <h2>  Trouvez votre animal maintenant sur FurryFreinds </h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="cats-slider" class="owl-carousel">
                    <!-- 1 -->
                    <?php  for($i=0; $i<10; $i++):?>
                    <div class="news-grid">
                        <div class="news-grid-image"><img src="images/cat1.jpg" alt="">
                            <!-- <div class="news-grid-box">
                                <h1>19</h1>
                                <p>Sep</p>
                            </div> -->
                        </div>
                        <div class="news-grid-txt">
                            <span>Dylan</span>
                            <!-- <h2>Heading Will Be Here</h2> -->
                            <div class="div-prop">
                            <ul class="prop-info">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i> Chaimaa</li>
                            </ul>
                        </div>
                            <ul class="pet-info">
                                <li><i class="fa fa-birthday-cake" aria-hidden="true"></i> Age :</li>
                                <li><i class="fa fa-paw" aria-hidden="true"></i> Race:</li>
                                <li><i class="fa fa-venus-mars" aria-hidden="true"></i> Genre:</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Ville:</li>
                            </ul>
                            <!-- <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p> -->
                            <div class="btn-card"> <a href="#">adopter</a> </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                        
                                      
                        </div>
                </div>
        </div>
    </div>

</section>

 <section class="dogs">

    

        <h1>  Chiens en attente d'adoption </h1>
        <h2>  Trouvez votre animal maintenant sur FurryFreinds </h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="dogs-slider" class="owl-carousel">
                <?php  for($i=0; $i<10; $i++):?>
                    <div class="news-grid">
                        <div class="news-grid-image"><img src="images/cat1.jpg" alt="">
                            <!-- <div class="news-grid-box">
                                <h1>19</h1>
                                <p>Sep</p>
                            </div> -->
                        </div>
                        <div class="news-grid-txt">
                            <span>Dylan</span>
                            <!-- <h2>Heading Will Be Here</h2> -->
                            <div class="div-prop">
                            <ul class="prop-info">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i> Chaimaa</li>
                            </ul>
                        </div>
                            <ul class="pet-info">
                                <li><i class="fa fa-birthday-cake" aria-hidden="true"></i> Age:</li>
                                <li><i class="fa fa-paw" aria-hidden="true"></i> Race:</li>
                                <li><i class="fa fa-venus-mars" aria-hidden="true"></i> Genre:</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> ville:</li>

                                <!-- <li><i class="fa fa-user" aria-hidden="true"></i> </li> -->
                            </ul>
                            <!-- <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p> -->
                            <div class="btn-card"> <a href="#">adopter</a> </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
        </div>
    </div>

</section>

<!-- <section class="HowToUse">

    <h1>  Comment ça marche sur FurryFreinds  </h1>
    <h2>  Trouvez votre animal maintenant sur FurryFreinds </h2>


    <div class="road">





    </div>



</section> -->




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


 

                                           
<script src="js/caroussel.js"></script>



    
    
</body>
</html>