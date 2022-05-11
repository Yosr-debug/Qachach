<?php
/*session_start();
include_once '../config.php';
//$message="";

//$userC=new UtilisateurC();

if(isset($_POST["adresse_email"])&& 
   isset($_POST["password"])){
	if(!empty($_POST["adresse_email"])&& 
	   !empty($_POST["password"])) 
	{$db=config::getConnexion();
		$email=$_POST['adresse_email'];
		$password=$_POST['password'];
		$stmt=$db->prepare("SELECT adresse_mail,password  FROM user WHERE adresse_mail=? AND password =?");
		$stmt->execute(array($email,$password));
		$count=$stmt->rowCount();
		
	if($count>0)
	{
		header('Location:index1.php');
		$_SESSION['adresse_email']=$email;
		echo $_SESSION['adresse_email'];
	}
	else
	{
	echo ('email ou le mot de passe est incorrect');
	}
    }
	}
?>
<?php
session_start();
include_once '../config.php';
if(!empty($_POST["adresse_email"])&& 
	   !empty($_POST["password"])) 


if(isset($_POST['submit']))
{
	if(empty($_POST["adresse_email"])&& 
	   empty($_POST["password"])) 
	   {
		header('Location:index.php');
	   }
	   else
	   {
		$db=config::getConnexion();
		$email=$_POST['adresse_email'];
		$password=$_POST['password'];
		$stmt=$db->prepare("SELECT adresse_mail,password  FROM user WHERE adresse_mail=? AND password =?");
		$stmt->execute(array($email,$password));
		$count=$stmt->rowCount();
		
	if($count>0)
	{
		header('Location:index1.php');
		$_SESSION['adresse_email']=$email;
		echo $_SESSION['adresse_email'];
	}
	   }
}
//header("location:index.php"); if empty }
else 
echo ('not working');*/
?> 



<?php 
/*include_once '../config.php';
session_start();
    if(isset($_POST['submit']))
    {
		if(empty($_POST["adresse_email"])&& 
		empty($_POST["password"])) 
		{
		 header('Location:index.php');
		}
		else
		{
		 
		 $db=config::getConnexion();
		 $email=$_POST['adresse_email'];
		 $password=$_POST['password'];
		 $nom=$_POST['nom'];
		 $prenom=$_POST['prenom'];
		 $numero_tel=$_POST['numero_tel'];
		 $stmt=$db->prepare("SELECT adresse_mail,password  FROM user WHERE adresse_mail=? AND password =?");
		 $stmt->execute(array($email,$password));
		 $count=$stmt->rowCount();
		 
	 if($count>0)
	 {
		 header('Location:index1.php');
		 $_SESSION['adresse_email']=$email;
		 $_SESSION['password']=$password;
		 $_SESSION['nom']=$nom;
		 $_SESSION['prenom']=$prenom;
		 $_SESSION['numero_tel']=$numero_tel;


		 echo $_SESSION['adresse_email'];
	 }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
*/
?>

<?php
 
 include_once '../config.php';
 
session_start();
    if(isset($_POST['submit']))
    {
		if(empty($_POST["adresse_email"])&& 
		empty($_POST["password"])) 
		{
		 header('Location:index.php');
		}
		else
		{
		 
		 $db=config::getConnexion();
		 $email=$_POST['adresse_email'];
		 $password=$_POST['password'];
		 //$nom=$_POST['nom'];
		 
	
		 $requette = "SELECT * FROM user WHERE adresse_mail='$email' AND password ='$password'";
		 $resultat = $db->query($requette);
		 $user = $resultat->fetch();
		 //$count=$stmt->rowCount();
		 //var_dump($user);
		 
	if(count($user)>0)
	 {
		 header('Location:index1.php');
		 $_SESSION['adresse_email'] = $user['adresse_mail'];
		 $_SESSION['nom'] = $user['nom'];
		 $_SESSION['num_tel'] = $user['num_tel'];
		 $_SESSION['cin'] = $user['cin'];
		 $_SESSION['password'] = $user['password'];
		 $_SESSION['prenom'] = $user['prenom'];
		 $_SESSION['id'] = $user['id'];
		 


		 /*echo $_SESSION['adresse_email'];
		 echo "<br>";
		 echo $_SESSION['nom'];
		 echo "<br>";
		 echo $_SESSION['num_tel'];
		 echo "<br>";
		 echo $_SESSION['cin']; */
		 
	 }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            } 
       }

    }
    else
    {
        echo 'Not Working Now Guys';
    }
?>



