<?php
	include '../Controller/evenementC.php';
	$evenementC=new evenementC();
	$evenementC->supprimerevenement($_GET["id_evenement"]);
	header('Location:afficherevenements.php');
?>