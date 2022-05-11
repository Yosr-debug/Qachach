<?php
/*include '../config.php';
if(isset($_POST['adresse_email']))
{
    ini_set('SMTP','smtp.topnet.tn');
    $token = uniqid();
    $url = "http://localhost/fronte/view/token?token=$token";
    $message = "Voici votre lien pour la réinitialisation du mot de passe : $url";
   	$headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$headers = 'Content-Type: text/plain; charset="utf-8"'." ";
    if(mail($_POST['adresse_email'], 'Mot de passe oublie', $message, $headers))
    {
        $db=config::getConnexion();
        $sql = "UPDATE user SET token = ? where adresse_mail = ?";
        $stmt =$db->prepare($sql);
        $stmt->execute([$token, $_POST['adresse_email']]);
        echo 'MAIL ENVOYE !';

    }
    else
    {
        echo "error";
    }
}
*/
?>
<?php session_start(); ?>
<?php require_once '../controller/userC.php';
require_once '../config.php';
include_once '../model/user.php';
// session_start();
$utilisateur = null;
$utilisateurc = new ClientC();
$listeutilisateurs = $utilisateurc->recupererutilisateur();
if(isset($_POST['adresse_email']))
{
    if(!empty($_POST['adresse_email']))
    {
        foreach ($listeutilisateurs as $utilisateur) {
			if ($utilisateur['adresse_mail'] == $_POST['adresse_email']) 
            {
				echo'gjkdfjgkfd';
                $_SESSION['token']=$utilisateur['token'];
                $_SESSION['email']=$utilisateur['adresse_mail'];
                // $_SESSION['code']=$code;
                 header('Location:sendmail.php');
            }
			
    }
}}
?>
















<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w " action="motdepasseoublie.php" method="post">
					<span class="login100-form-title p-b-32">
						Mot De Passe Oublié
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "email is required">
						<input class="input100" type="text" name="adresse_email" >
						<span class="focus-input100"></span>
					</div>
					
					
					
					

						
				

					<div class="container-login100-form-btn">
						<button  type="submit" class="login100-form-btn" name="submit">
							Envoyer
						</button>
						
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>