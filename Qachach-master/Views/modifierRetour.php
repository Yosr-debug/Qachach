<?php
include_once '../Model/retour.php';
include_once '../Controller/retourC.php';
if (isset($_GET['idretour'])){
    $retour=null;
    $retourC=new retourC();
      $liste=$retourC->recupererretour($_GET['idretour']);
    foreach($liste as $retour){
      $idretour=$retour['idretour'];
      $ref_commande=$retour['ref_commande'];
      $description=$retour['description'];
  
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
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idretour">id retour:
                        </label>
                    </td>
                    <td><input type="text" name="idretour" id="idretour" value="<?php echo $retour['idretour']; ?>" maxlength="20" disabled ></td>
                </tr>
                <tr>
                    <td>
                        <label for="ref_commande">ref_commande:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="ref_commande" id="ref_commande" value="<?php echo $retour['ref_commande']; ?>">
                    </td>
                </tr>
                <tr>
                <td>
                    <label for="description">description:
                    </label>
                </td>
                <td>
                    <input type="textarea" name="description" id="description" value="<?php echo $retour['description']; ?>">
                </td>
            </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name="Modifier">
                        <input type="hidden" name="id_ini" value="<?PHP echo $_GET['idretour'];?>">
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
  $retour=new retour($retour['idretour'],$_POST['ref_commande'],$_POST['description']);
  $retourC->modifierretour($retour,$_POST['id_ini']);
  
  echo $_POST['id_ini'];
  header('Location: afficherretour.php');
}

?>