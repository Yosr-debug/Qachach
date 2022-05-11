<?php
    include_once '../model/user.php';
    include_once '../controller/userC.php';

    $error = "";

    // create adherent
    $client = null;

    // create an instance of the controller
    $clientC = new ClientC();
    if (
        	
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["adresse_mail"]) && 
        isset($_POST["cin"]) && 
        isset($_POST["num_tel"])&&
        isset($_POST["password"])
    ) {
        if (
             
            !empty($_POST["nom"]) && 
			!empty($_POST['prenom']) &&
            !empty($_POST["adresse_mail"]) && 
			!empty($_POST["cin"]) && 
            !empty($_POST["num_tel"]) && 
            !empty($_POST["password"])
        ) {
            $client = new Client(
                $_POST['id'],
                $_POST['nom'],
				$_POST['prenom'],
                $_POST['adresse_mail'], 
				$_POST['cin'],
                $_POST['num_tel'],
                $_POST['password']
            );
            $clientC->ajouteruser($client);
            header('Location:index.html');
        }
        else
            $error = "Missing information";
    }
echo("welcome");
    
?>
