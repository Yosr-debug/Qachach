<?php
    include_once '../Model/livraison.php';
    include_once '../Controller/livraisonC.php';

    $error = "";

    // create adherent
    $livraison = null;
    // create an instance of the controller
    $livraisonC = new livraisonC();
 
    if (
        isset($_POST["id_livraison"]) &&
		isset($_POST["nbproduit" ] ) &&		
        isset($_POST["prixtotal"]) &&
		isset($_POST["ref_commande"]) &&
        isset($_POST["datecommande"]) 

         ) {
        
        if (
            !empty($_POST["id_livraison"]) && 
			!empty($_POST["nbproduit"]) &&
            !empty($_POST["prixtotal"]) && 
			!empty($_POST["ref_commande"])&&
           !empty($_POST["datecommande"])
            
        ) {
            $livraison = new livraison(
                $_POST['id_livraison'],
				$_POST['nbproduit'],
                $_POST['prixtotal'], 
				$_POST['datecommande'],
                $_POST['ref_commande']
               
            );
            $livraisonC->ajouterlivraison($livraison);
            // header('Location:afficherLivraison.php');
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
        <button><a href="afficherlivraison.php">Retour à la liste des livraisons</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_livraison">id_livraison:
                        </label>
                    </td>
                    <td><input type="text" name="id_livraison" id="id_livraison" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nbproduit">nbproduit:
                        </label>
                    </td>
                    <td><input type="text" name="nbproduit" id="nbproduit" maxlength="20"></td>
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
                        <label for="datecommande">datecommande:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="datecommande" id="datecommande">
                    </td>
                </tr>
                <tr>
                <td>
                    <label for="prixtotal">prixtotal:
                    </label>
                </td>
                <td><input type="text" name="prixtotal" id="prixtotal" ></td>
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