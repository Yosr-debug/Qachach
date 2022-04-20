<?php
	include '../controller/userC.php';
	$clientC=new ClientC();
	$clientC->supprimerclient($_GET["id"]);
	header('Location:afficherUser.php');
?>