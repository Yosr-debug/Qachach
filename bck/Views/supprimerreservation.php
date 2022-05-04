<?php
	include '../Controller/reservationC.php';
	$reservationC=new reservationC();
	$reservationC->supprimerreservation($_GET["id_reservation"]);
	header('Location:afficherreservation.php');
?>