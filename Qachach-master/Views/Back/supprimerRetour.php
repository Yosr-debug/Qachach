<?php
	include '../../Controller/retourC.php';
	$retourC=new retourC();
	$retourC->supprimerretour($_GET["idretour"]);
	header('Location:listeRetour.php');
?>
