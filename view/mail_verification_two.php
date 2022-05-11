<?php
session_start();
?>
<?php
require_once '../controller/userC.php';
require_once '../config.php';
include_once '../model/user.php';

// session_start();
$utilisateuur = new ClientC;
$code_verification = $_SESSION['code_verification'];
// $utilisateur_verif = $_SESSION['utilisateur_verif'];
$nom_verif=$_SESSION['nomv'] ;
$prenom_verif=$_SESSION['prenomv'];
$email_verif=$_SESSION['email2'];
// password_hash($_POST['pwd'],PASSWORD_DEFAULT)
$pwd_verif=$_SESSION['passwordv'];
$num_tel_verif=$_SESSION['num_telv'];
$cin_verif=$_SESSION['cinv'];
if (isset($_POST['code_verif'])) {
    if (!empty($_POST['code_verif'])) {

        if ($code_verification == $_POST['code_verif']) {
?>
            <script>
                alert("YOU HAVE ENTERED THE CORRECT CODE");
            </script>
<?php $utilisateur=new Client(
    $nom_verif,
    $prenom_verif,
    $email_verif,
    $cin_verif,
    $num_tel_verif,
    $pwd_verif

);
$utilisateuur->ajouteruser($utilisateur);
//$_SESSION['auth'] = true;
            //if($_SESSION['auth'])
            
            
            ?>
           <!-- <script>
                alert("YOU HAVE ENTERED THE CORRECT CODE");
            </script> -->

<?php
header('Location:index.php');

?>

<script>
                alert("sdsdsqdsqdq");
            </script>
            <?php
        }
         else
            {
                ?><script>alert("WRONG CODE TRY AGAIN");</script>
                <?php
            }
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="mail_verification_two.php" method="POST" autocomplete="no">
                    <!--<h2 class="text-center">Forgot Password</h2>-->
                    <p class="text-center">A code has been sent to your email </p>
                    <p class="text-center">Please Enter verification code</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="code_verif" placeholder="Enter code here" required>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>