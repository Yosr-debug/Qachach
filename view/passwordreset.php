<?php

/*include_once '../config.php';
if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($db, ($_POST['adresse_email']));
    $token = md5(rand());
    $check_email = "SELECT adresse_mail FROM user WHERE asresse_mail='$email' LIMIT 1 ";
    
}*/
?>


<?php
session_start();
?>
<?php
require_once '../controller/userC.php';
require_once '../config.php';
include_once '../model/user.php';
$token=$_SESSION['token'];
// session_start();
$utilisateur = null;
$utilisateurc = new ClientC;
$listeutilisateurs = $utilisateurc->recupererutilisateur();
if(isset($_POST['codee']))
{
    if(!empty($_POST['codee']))
    {
        //foreach ($listeutilisateurs as $utilisateur) {
			if ($token == $_POST['codee']) 
            {
                ?>
                <script>alert("YOU HAVE ENTERED THE CORRECT CODE");
            </script>
                <?php header('Location:update.php');
            }
            else
            {
                ?><script>alert("WRONG CODE TRY AGAIN");</script>
                <?php
            }
        //}
    }
}
?>
<!--<!DOCTYPE html>
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
                <form action="passwordreset.php" method="POST" autocomplete="no">
                    <h2 class="text-center">Forgot Password</h2>//
                    <p class="text-center">Enter Recovery code</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="codee" placeholder="Enter code here" required >
                    </div>
                    <button type="submit" >Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet" href="profileuser.css">
</head>
<style>
    .form-gap {
    padding-top: 70px;
}
</style>

<!------ Include the above in your HEAD tag ---------->
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="codee" placeholder="Enter Recovery code" class="form-control"  type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <!--<input type="hidden" class="hide" name="token" id="token" value=""> -->
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
</body>