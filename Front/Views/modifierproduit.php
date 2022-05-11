<?php
include_once '../Model/produit.php';
include_once '../Controller/produitC.php';

$error = "";

// create produit
$produit = null;

// create an instance of the controller
$produitC = new produitC();

    if (
        isset($_POST["id_produit"]) &&
			
        isset($_POST["descriptionn"]) &&
		isset($_POST["prix"]) &&
        isset($_POST["imagee"]) &&
        isset($_POST["nom_categorie"])
    
        
    ) {
        
        if (
            !empty($_POST["id_produit"]) && 
		
            !empty($_POST["descriptionn"]) && 
			!empty($_POST["prix"])&&
            !empty($_POST["imagee"])&&
            !empty($_POST["nom_categorie"])
        ){
            $produit = new produit(
                $_POST['id_produit'],
		
                $_POST['descriptionn'], 
				$_POST['prix'],
                $_POST['imagee'],
                $_POST['nom_categorie']
            );
        $produitC->modifierproduit($produit, $_POST["id_produit"]);
        header('Location:afficherproduits.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <button><a href="afficherproduits.php">Retour à la liste des produits</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_produit'])) {
        $produit = $produitC->recupererproduit($_POST['id_produit']);

    ?>
    <form action="" method="POST">
                    <div class="form-group">
                        <label for="id_produit" class=" form-control-label">Id produit </label>
                        
                        <input type="number" name="id_produit" id="id_produit" value="<?php echo $produit['id_produit']; ?>" maxlength="20" placeholder="Enter your product id " class="form-control"></div>
                 
                    <div class="form-group">
                        <label for="descriptionn" class=" form-control-label">descriptionn</label>
                        <input type="text" name="descriptionn" id="descriptionn" value="<?php echo $produit['descriptionn']; ?>" placeholder="Enter descriptionn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="prix" class=" form-control-label">prix</label>
                        <input type="number" name="prix" id="prix"  value="<?php echo $produit['prix']; ?>" placeholder="prix" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="imagee" class=" form-control-label">imagee</label>
                        <input type="file" name="imagee" id="imagee" placeholder="Enter photo" value="<?php echo $produit['imagee']; ?>" class="form-control">
                    </div>
                
                    <div class="form-group">
                        <label for="nom_categorie" class=" form-control-label">nom_categorie</label>
                        <input type="text" name="nom_categorie" id="imagee" placeholder="Enter photo" value="<?php echo $produit['nom_categorie']; ?>" class="form-control">
                    </div>
                    <input type="submit" value="Envoyer">
                    <input type="reset" value="Annuler" > 
                </form>

       
    <?php
    }
    ?>
</body>

</html>