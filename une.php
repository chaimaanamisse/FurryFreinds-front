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

            var elements = $(".modal-overlay, .modal");

$(".adoptBtn").click(function () {
elements.addClass("active");
});

$(".close-modal").click(function () {
elements.removeClass("active");
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


<!-- single -->

<div class="test"> 
    <div class="single-main">

      <!-- <div class="single-container a-container"> -->
       
        <img src="images/dog7.jpg" alt=""  class="single-container a-container">

      <!-- </div> -->

     

      <div class="switch">
        

          <div class="card_liste">
              
            <div class="mind"><li class="card_item" >Nom </li><span>:</span></div>
            <div class="mind"><li class="card_item" >Espèce </li><span>:</span></div>
            <div class="mind"><li class="card_item" >Genre </li><span>:</span></div>
            <div class="mind"><li class="card_item" >Race</li><span>:</span></div>
            <div class="mind"><li class="card_item" >Ville </li><span>:</span></div>
            <div class="mind"><li class="card_item" >Description </li><span>:</span><p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p></div>
            
         </div>
          <button class="adoptBtn">Adopter</button>

      </div>

    </div>
</div> 


<!-- modal -->

<div class="modal-overlay">
  <div class="modal">
    
    <a class="close-modal">
      <svg viewBox="0 0 20 20">
        <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
      </svg>
    </a><!-- close modal -->

    <div class="modal-content">
      <h3>Some content here</h3>
    </div><!-- content -->
    
  </div><!-- modal -->
</div><!-- overlay -->

<!-- fin single -->


     
     


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
<script src="js/modal.js"></script>
<script src="js/imagePreview.js"></script>

</html>