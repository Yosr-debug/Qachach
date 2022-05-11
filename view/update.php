<?php 
    session_start();?>
  <?php
//   include_once 'mail_send.php';
 
 include_once  '../controller/userC.php';
 require_once '../config.php';
 include_once '../model/user.php';
//require '../config.php';
$utilisateur = null;
$utilisateurc = new ClientC();
$listeutilisateurs = $utilisateurc->recupererutilisateur();
// create an instance of the controller
/*$utilisateurC = new utilisateurc();
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['pwd'])&& isset($_POST['rpwd'])) {
	
	$utilisateur = new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pwd'],$_POST['rpwd']);
	$utilisateurC->ajouterutilisateur($utilisateur);}
	//header('Location:index.php');*/
    if(isset($_SESSION['email']))
    {
        $email=$_SESSION['email'];
    }
    $utilisateurC = new ClientC();
    if(isset($_POST['npd'])) 
    {  
        foreach($listeutilisateurs as $utilisateur)
        {
            if($utilisateur['adresse_mail']==$email)
            {
                $lastname=$utilisateur['nom'];
                $name=$utilisateur['prenom'];
                $cin=$utilisateur['cin'];
                $num_tel=$utilisateur['num_tel'];
                $id=$utilisateur['id'];
                
                
            }
        }
	
        $utilisateur1 = new Client($lastname,$name,$email,$cin,$num_tel,$_POST['npd']);   
        $utilisateurC->modifierclient($utilisateur1,$id);
		header('Location:index.php');
    }
    
?>
<!--<!DOCTYPE html>
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w "  method="post">
					<span class="login100-form-title p-b-32">
						Mot De Passe Oublié
					</span>

					<span class="txt1 p-b-11">
						New password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "email is required">
						<input class="input100" type="text" name="npd" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button  type="submit" class="login100-form-btn" name="submit">
							Ok
						</button>
						
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div> -->
	<!--===============================================================================================-->
	<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/animsition/js/animsition.min.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/bootstrap/js/popper.js"></script>-->
	<!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/select2/select2.min.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/daterangepicker/moment.min.js"></script>-->
	<!--<script src="vendor/daterangepicker/daterangepicker.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/countdowntime/countdowntime.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="js/main.js"></script> 

</body>
</html>


-----------------------------------------------------
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
                          <input  name="npd" placeholder="Enter your new passworddd" class="form-control"  type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        
						<button  type="submit" class="login100-form-btn" name="submit" class="btn btn-lg btn-primary btn-block">
							Ok
						</button>
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


