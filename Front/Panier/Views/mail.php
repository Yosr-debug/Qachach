<?php
session_start();
$email=$_SESSION['mail'];

        ini_set('SMTP','smtp.topnet.tn');
        ini_set('smtp_port',25);
        $dest="yosrabbassi0@gmail.com";
        $corp="Votre commande est en cours de traitement";
        $headers="From: yosr.abbassi@esprit.tn";
        $sujet="Confirmation";
        
  if (mail($dest, $sujet,  $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
//header("Location:afficherPanier.php");


?>
