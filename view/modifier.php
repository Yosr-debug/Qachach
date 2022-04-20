<?php
    include_once '../model/user.php';
    include_once '../controller/userC.php';

    $error = "";

    // create user
    $client = null;

    // create an instance of the controller
    $clientC = new ClientC();
    if (
        
        isset($_POST["nom"]) &&
		isset($_POST["prenom"]) &&		
        isset($_POST["adresse_mail"]) &&
		isset($_POST["cin"]) && 
        
        isset($_POST["num_tel"]) &&
        isset($_POST["password"])
    ) {
        if (

            !empty($_POST["nom"]) && 
			!empty($_POST["prenom"]) &&
            !empty($_POST["adresse_mail"]) && 
			!empty($_POST["cin"]) && 
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
            $clientC->modifierclient($client, $_POST['id']);
            header('Location:afficherUser.php');
        }
        else
            $error = "Missing information";
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

        
        
        <div id="error">
            <?php echo $error; ?>
        </div>
         <?php
			if (isset($_POST['id'])){
				$client = $clientC->recupererclient($_POST['id']);
            
				
		?>
    <div class="container">
        <form id="form" action="" method="POST">
            <h1>modifier</h1>
            <div class="x">
                <label for="id">id</label>
                <input type="text" name="id" id="nom" value="<?php echo $client['id']; ?>" ></td>
                <span id="name_error" class="text-danger"></span>
                <div class="error"></div>
            </div>

            <div class="x">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="<?php echo $client['nom']; ?>" >
                <span id="name_error" class="text-danger"></span>
                <div class="error"></div>
            </div>
            <br>
             <div class="x">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="nom" value="<?php echo $client['prenom']; ?>" >
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="adresse_mail">Email</label>
                <input type="text" name="adresse_mail" id="adresse_mail" value="<?php echo $client['adresse_mail']; ?>" >
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="password">password</label>
                <input type="password" name="password" id="password" value="<?php echo $client['password']; ?>" >
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
                <input type="text" name="num_tel" id="num_tel" value="<?php echo $client['num_tel']; ?>">
                <div class="error"></div>
            </div>
            <br>
            <div class="x">
                <label for="cin">CIN</label>
                <input type="text" name="cin" id="cin" value="<?php echo $client['cin']; ?>" >
                <div class="error"></div>
            </div>
            <br>
           
            <input type="submit" value="modifier"> 
            <button><a href="afficherUser.php">RETOUR A LA LISTE USERS</a></button>
			
        </form>
        <?php
		}
		?>
    </div>
                </body>
                </html>