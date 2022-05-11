<?php

    session_start();

    if(!isset($_SESSION['adresse_email']))
    {
        header("location:index.php");
    }
   
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>9achech</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
        
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                            
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html" class="active">Acceuil</a></li>
                            <li class="submenu"
                            ><a href="products.html">Produits</a>
                            <ul>
                                <li><a href="femme.html">Femme</a></li>
                                <li><a href="homme.html">Homme</a></li>
                                <li><a href="enfant.html">Enfant</a></li>
                                <li><a href="bebe.html">Bébé</a></li>
                              
                            </ul>
                        </li>
                            <li class="scroll-to-section"><a href="evenement.html">Evénements</a></li>
                            <li class="scroll-to-section">
                                <a href="livraison.html">Livraison</a>
                            </li>
                            
                            <li class="submenu">
                                <a href="javascript:;">Reclamation</a>
                                <ul>
                                    <li><a href="ajouterreclamation.html">Envoyer Reclamation</a></li>
                                    <li><a href="consulterreclamation.html">Consulter Reclamation</a></li>
                                    
                                    
                                </ul>
                            </li>
                            
                            <li style="background-color: white; color: black; position: relative; right: 2px;"><a href="deconnexion.php">se deconnecter</a></li>
                        
                            <li class="scroll-to-section">
                            <a href="ajouter_dans_panier.html">
                            <img src="assets/images/ajouter-un-panier.png" alt=""  height ="30" width="30">
                            </a>
                            
                            </li>
                            
                            
                             

                        </ul>
                          
                        <div class="user-area dropdown float-right">
                        <a href="profileuser.php" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="assetss (2)/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="profileuser.php"><i class="fa fa- user"></i>Parmetres</a>
                            <a class="nav-link" href="deconnexion.php"><i class="fa fa- user"></i>Deconnecter</a>
                           

                        </div>
                    </div>
 
                      
                      
                      
                        <a class='menu-trigger'>
                            <span>Menu</span>
                            
                        </a>
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
        
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                
                                <h4>Nous sommes 9achach</h4>
                                <span>Plateform n°1 de vente en ligne en Tunisie</span>
                                <div class="main-border-button">
                                    <a href="products.html">Acheter maintenant!</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Femme</h4>
                                            <span>Meilleurs vêtements pour femme</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Femme</h4>
                                                <p></p>
                                                <div class="main-border-button">
                                                    <a href="femme.html">Découvrir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Homme</h4>
                                            <span>Meilleurs vêtements pour homme</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Homme</h4>
                                                <p></p>
                                                <div class="main-border-button">
                                                    <a href="homme.html">Découvrir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Enfants</h4>
                                            <span>Meilleurs vêtements pour enfants</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Enfant</h4>
                                                <p></p>
                                                <div class="main-border-button">
                                                    <a href="enfant.html">Découvrir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Bébé</h4>
                                            <span>Meilleurs vêtements pour bébé</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Bébé</h4>
                                                <p></p>
                                                <div class="main-border-button">
                                                    <a href="bebe.html">Découvrir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ***** Main Banner Area End ***** -->
    
    
        
    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h3 id="aboutUs">A propos de 9achech</h3>
                        <span>9achech est un site e-commerce tunisien qui offre aux utilisateurs la possibilité d'acheter ou mettre en vente
                            leurs vetements. 
                            Ces utilisateurs peuvent créer un compte afin de consulter les différents produits exposés et
                            les promotions, passer des commandes en ajoutant à leurs paniers.</span>
                            <br>
                            <span>9achech offre la possibilite de faire des livraison à domicile et recuperer les colis
                            directement depuis les vendeurs.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>




                    
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="" >
                        </div>
                        <ul>
                            <li><a href="https://goo.gl/maps/QTWZKmixveMGVW4v5">Petite Ariana, Tunisie</a></li>
                            <li><a href="#">9achech@esprit.tn</a></li>
                            <li><a href="#">+216 71 546 008</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                    <li><a href="homme.html">Homme</a></li>
                    <li><a href="femme.html">Femme</a></li>
                    <li><a href="enfant.html">Enfant</a></li>
                    <li><a href="bebe.html">Bébé</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Liens Utiles</h4>
                    <ul>
                        <li><a href="index.html">Acceuil</a></li>
                        <li><a href="#aboutUs">A propos de <i>9achech</i></a></li>
                        <li><a href="#">Aide</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="inscription.html">S'inscrire</a></li>
                        <li><a href="ajouterreclamation.html">Reclamation</a></li>
                        <li><a href="evenement.html">Evénements</a></li>
                        <li><a href="livraison.html">Livraison</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 9achech Co., Ltd. All Rights Reserved. 
                        
                        
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>