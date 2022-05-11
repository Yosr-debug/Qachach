<?php session_start(); ?>
<?php
    include_once '../model/user.php';
    include_once '../controller/userC.php';
    $k=0;

    $error = "";

    
    $client = null;
    $utilisateur = null;
    $utilisateurc = new ClientC;
    $listeutilisateurs = $utilisateurc->recupererutilisateur();

    
   // $clientC = new ClientC();
    $nom_error = '';
    $prenom_error = '';
    $mail_error = '';
    $cin_error = '';
    $num_tel_error = '';
    $password_error = '';

	

    if (
       	
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["adresse_mail"]) && 
        isset($_POST["cin"]) && 
        isset($_POST["num_tel"])&&
        isset($_POST["password"])
    ) 
    
    
    {
        
        
        if ( empty($_POST["nom"]) || !preg_match("/^[a-zA-Z-' ]*$/",$_POST["nom"]))
        
        { $nom_error = 'Non valide nom';                      } 
        if (empty($_POST['prenom']) || !preg_match("/^[a-zA-Z-' ]*$/",$_POST["prenom"]))
        {$prenom_error = 'P non valide hehi';}
        if (empty($_POST["adresse_mail"]) || !filter_var($_POST["adresse_mail"], FILTER_VALIDATE_EMAIL))
        {$mail_error = 'lmail mouchou shih yehdik'; }
        if (empty($_POST["password"]))
        {$password_error = 'lezmk mot de passe ya metkhalef';}
        if(empty($_POST["num_tel"]))
        {$num_tel_error = 'telifounek ghalet mala hala fik';}
        if(empty($_POST["cin"]) || (strlen($_POST["cin"]) != 8))
        {$cin_error = 'CIN invalideeee';}
       
         

        
        
        
        
            
        
        else {
            foreach ($listeutilisateurs as $utilisateur) {
                if ($utilisateur['adresse_mail'] == $_POST['adresse_mail']) {
                    ?>
                    <script>
                        alert("taken");
                       
                        </script>
                        <?php
                    $k = 1;
                }
            }
            if ($k == 0) {
           $_SESSION['email2']=$_POST["adresse_mail"];
            //$client = new Client(
                
            $_SESSION['nomv']=$_POST["nom"];
            $_SESSION['prenomv']=$_POST["prenom"];
            $_SESSION['cinv']=$_POST["cin"];
            $_SESSION['num_telv']=$_POST["num_tel"];
            $_SESSION['passwordv']=$_POST["password"];
       // );
        //$clientC->ajouteruser($client); 
        header('Location:mail_verification.php');
            }
    } }
            
    

    
?>
<html lang="en">
<head>
    <style>
        .error {color: #FF0000;}

    </style>


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
                <?php 
                if(isset($_POST["nom"]))
                {echo'<input id="nom" name="nom" type="text" value="'.$_POST["nom"].'">';}
                else {
                echo'<input id="nom" name="nom" type="text">';
                }



                ?>
                

                <span  class="error"><?php echo $nom_error;?> </span>
                
            </div>
            <br>
             <div class="x">
                <label for="prenom">Prenom</label>
                <input id="prenom"name="prenom" type="text">
                <span  class="error"><?php echo $prenom_error;?> </span>
                
            </div>
            <br>
            <div class="x">
                <label for="adresse_mail">Email</label>
                <input id="adresse_mail" name="adresse_mail" type="text">
                <span  class="error"><?php echo $mail_error;?> </span>
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="password">password</label>
                <input id="password"name="password" type="password">
                <span  class="error">*<?php echo $password_error;?> </span>
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
                <input id="num_tel"name="num_tel" type="text">
                <span  class="error"><?php echo $num_tel_error;?> </span>
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="cin">CIN</label>
                <input id="cin"name="cin" type="text">
                <span  class="error"><?php echo $cin_error;?> </span>
                <div class="error"></div>
            </div>
            <br>
           
            <button type="submit">Sign Up</button>
            
			
        </form>
    </div>
</body>
</html>

                