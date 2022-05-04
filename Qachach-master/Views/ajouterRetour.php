<?php
    include_once '../Model/retour.php';
    include_once '../Controller/retourC.php';

    $error = "";

    // create adherent
    $retour = null;
    // create an instance of the controller
    $retourC = new retourC();
 
    if (
        isset($_POST["idretour"]) &&
		isset($_POST["ref_commande"]) &&
        isset($_POST["description"]) 

         ) {
        
        if (
            !empty($_POST["idretour"]) && 
			!empty($_POST["ref_commande"])&&
            !empty($_POST["description"])
            
        ) {
            $retour = new retour(
                $_POST['idretour'], 
				$_POST['ref_commande'],
                $_POST['description']
               
            );
            $retourC->ajouterretour($retour);
             header('Location:afficherretour.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherretour.php">Retour à la liste des retours</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_retour">id_retour:
                        </label>
                    </td>
                    <td><input type="text" name="idretour" id="idretour" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="ref_commande">ref_commande:
                        </label>
                    </td>
                    <td><input type="text" name="ref_commande" id="ref_commande" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td>
                        <input type="textarea" name="description" id="description">
                    </td>
                        </tr>     
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>