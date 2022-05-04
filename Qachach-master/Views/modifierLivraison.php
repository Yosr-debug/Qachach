<?php
include_once '../Model/Livraison.php';
include_once '../Controller/LivraisonC.php';
if (isset($_GET['idlivraison'])){
    $livraison=null;
    $livraisonC=new LivraisonC();
      $liste=$livraisonC->recupererlivraison($_GET['idlivraison']);
    foreach($liste as $livraison){
      $idlivraison=$livraison['idlivraison'];
      $nbproduit=$livraison['nbproduit'];
      $prixtotal=$livraison['prixtotal'];
      $datecommande=$livraison['datecommande'];
      $ref_commande=$livraison['ref_commande'];
  
      ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="afficherLivraison.php">Retour à la liste des livraisons</a></button>
    <hr>
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idlivraison">id livraison:
                        </label>
                    </td>
                    <td><input type="text" name="idlivraison" id="idlivraison" value="<?php echo $livraison['idlivraison']; ?>" maxlength="20" disabled ></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbproduit">nbproduit:
                        </label>
                    </td>
                    <td><input type="text" name="nbproduit" id="nbproduit" value="<?php echo $livraison['nbproduit']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prixtotal">prixtotal:
                        </label>
                    </td>
                    <td><input type="text" name="prixtotal" id="prixtotal" value="<?php echo $livraison['prixtotal']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="ref_commande">ref_commande:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="ref_commande" id="ref_commande" value="<?php echo $livraison['ref_commande']; ?>">
                    </td>
                </tr>
                <tr>
                <td>
                    <label for="datecommande">datecommande:
                    </label>
                </td>
                <td>
                    <input type="date" name="datecommande" id="datecommande" value="<?php echo $livraison['datecommande']; ?>">
                </td>
            </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name="Modifier">
                        <input type="hidden" name="id_ini" value="<?PHP echo $_GET['idlivraison'];?>">
                    </td>
                    <td>
                        <input type="reset" value="Annuler">
                    </td>
                </tr>
            </table>
        </form>
</body>


</html>
                    
<?PHP
    }
 } 

if (isset($_POST['Modifier'])){
  $livraison=new Livraison($livraison['idlivraison'],$_POST['nbproduit'],$_POST['prixtotal'],$_POST['datecommande'],$_POST['ref_commande']);
  $livraisonC->modifierlivraison($livraison,$_POST['id_ini']);
  
  echo $_POST['id_ini'];
  header('Location: afficherLivraison.php');
}

?>