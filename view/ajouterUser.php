<?php
    include_once '../model/user.php';
    include_once '../controller/userC.php';

    $error = "";

    
    $client = null;

    
    $clientC = new ClientC();
    $name_error = '';
	

    if (
       	
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["adresse_mail"]) && 
        isset($_POST["cin"]) && 
        isset($_POST["num_tel"])&&
        isset($_POST["password"])
    ) {
        if (
            
           !empty($_POST["nom"]) && preg_match("/^[a-zA-Z-' ]*$/",$_POST["nom"])&&
            
               
            
			!empty($_POST['prenom']) && preg_match("/^[a-zA-Z-' ]*$/",$_POST["nom"])&&
            !empty($_POST["adresse_mail"]) && filter_var($_POST["adresse_mail"], FILTER_VALIDATE_EMAIL)&&
			!empty($_POST["cin"]) && strlen($_POST["cin"]) == 8 &&
            !empty($_POST["num_tel"]) && 
            !empty($_POST["password"])
        ) {
            $client = new Client(
                
                $_POST['nom'],
				$_POST['prenom'],
                $_POST['adresse_mail'], 
				$_POST['cin'],
                $_POST['num_tel'],
                $_POST['password']
            );
            $clientC->ajouteruser($client);
            header('Location:afficherUser.php');
        }
        else
            $error = "Missing information";
            $name_error = 'Name is Required';
    }

    
?>
<html lang="en">
<head>
    


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer votre compte</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="index.js"></script>
    
</head>
<body>
    <div class="container">
        <form id="form" action="" method="POST">
            <h1>Ajouter comptes</h1><br>
            

            <div class="x">
                <label for="nom">Nom</label>
                <input id="nom" name="nom" type="text">
                <span id="name_error" class="text-danger"></span>
                <div class="error"></div>
            </div>
            <br>
             <div class="x">
                <label for="prenom">Prenom</label>
                <input id="prenom"name="prenom" type="text">
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="adresse_mail">Email</label>
                <input id="adresse_mail" name="adresse_mail" type="text">
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="password">password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
                <script>
                    function myFunction() {
                      var x = document.getElementById("password");
                      if (x.type === "password") {
                        x.type = "text";
                      } else {
                        x.type = "password";
                      }
                    }
                    </script>
            </div>
           
            <input type="checkbox" onclick="myFunction()">Show password
            
            
               <br><br> 
            
            
            <div class="x">
                <label for="num_tel">Numero de telephone</label>
                <input id="num_tel"name="num_tel" type="tex">
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="cin">CIN</label>
                <input id="cin"name="cin" type="text">
                <div class="error"></div>
            </div>
            <br>
           
            <button type="submit">Sign Up</button>
			
        </form>
    </div>
                </body>
                </html>









