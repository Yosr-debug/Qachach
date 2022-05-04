<?php
	include '../../Controller/livraisonC.php';
	$livraisonC=new livraisonC();
	$livraisonC->supprimerlivraison($_GET["idlivraison"]);
	header('Location:listeLivraisons.php');
?>
