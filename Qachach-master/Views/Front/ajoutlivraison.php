<?php
include_once '../../Model/livraison.php';
include_once '../../Controller/livraisonC.php';

$error = "";

// create adherent
$livraison = null;
// create an instance of the controller
$livraisonC = new livraisonC();

if (
    isset($_POST["id_livraison"]) &&
    isset($_POST["nbproduit"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["ref_commande"]) &&
    isset($_POST["datelivraison"])

) {

    if (
        !empty($_POST["id_livraison"]) &&
        !empty($_POST["nbproduit"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["ref_commande"]) &&
        !empty($_POST["datelivraison"])

    ) {
        $livraison = new livraison(
            $_POST['id_livraison'],
            $_POST['nbproduit'],
            $_POST['adresse'],
            $_POST['datelivraison'],
            $_POST['ref_commande']

        );
        $livraisonC->ajouterlivraison($livraison);
         //header('Location:listeLivraisons.php');
         echo "<script>alert(\"Votre livraison est ajoutée avec succés\")</script>";
         header('./ajoutlivraison.php');
    } else
        $error = "Missing information";
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

    <title>Livraison</title>


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
                            <li class="submenu">
                                <a href="./ajoutlivraison.php">Livraison</a>
                                <ul>
                                    <li><a href="./ajoutlivraison.php">Ajouter livraison </a></li>
                                    <li><a href="./ajoutretour.php">Servie Aprés Vente</a></li> 
                                </ul>
                            </li>
                            
                            <li class="submenu">
                                <a href="javascript:;">Reclamation</a>
                                <ul>
                                    <li><a href="./login/index.html">Envoyer Reclamation</a></li>
                                    <li><a href="./login/index.html">Consulter Reclamation</a></li>
                                    
                                    
                                </ul>
                            </li>
                            
                            <li style="background-color: white; color: black; position: relative; right: 2px;"><a href="./login/index.html">se connecter</a></li>
                        
                            <li class="scroll-to-section">
                            <a href="./login/index.html">
                            <img src="assets/images/ajouter-un-panier.png" alt=""  height ="30" width="30">
                            </a>
                            </li>

                        </ul>         
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
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Livraison</h2>
                        <span>Ajouter votre livraison</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Ajouter livraison</h2>
                        <span>Compléter les details de votre livraison</span>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row" >
                          <div class="col-lg-6">
                            <fieldset>
                              <input  type="text" name="id_livraison" id="id_livraison" maxlength="20" placeholder="ID livraison">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input type="text" name="nbproduit" id="nbproduit" maxlength="20" placeholder="Nombre de produits">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input type="text"  name="ref_commande" id="ref_commande" maxlength="20" placeholder="Réference Commande">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input type="date" name="datelivraison" id="datelivraison" placeholder="Date livraison">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input type="text" name="adresse" id="adresse" placeholder="Adresse Livraison">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                      </form>
                </div>
            </div> <div id="error">
                        <?php echo $error; ?>
                    </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->

   
    <!-- ***** Subscribe Area Ends ***** -->

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
