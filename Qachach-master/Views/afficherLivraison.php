<?php
	include '../Controller/livraisonC.php';
	$livraisonC=new livraisonC();
	$liste=$livraisonC->afficherLivraison(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterlivraison.php">Ajouter un livraison</a></button>
		<center><h1>Liste des livraisons</h1></center>
		<table border="1" align="center">
			<tr>
				<th>idlivraison</th>
				<th>nbproduit</th>
				<th>adresse</th>
				<th>datelivraison</th>
				<th>ref_commande</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($liste as $livraison){
			?>
			<tr>
				<td><?php echo $livraison['idlivraison']; ?></td>
                <td><?php echo $livraison['nbproduit']; ?></td>
				<td><?php echo $livraison['adresse']; ?></td>
				<td><?php echo $livraison['ref_commande']; ?></td>
                <td><?php echo $livraison['datelivraison']; ?></td>
				
				<td>
					
						<a  name="Modifier" href="modifierLivraison.php?idlivraison=<?PHP echo $livraison['idlivraison']; ?>" > modifier </a>
						
						<input type="hidden" value=<?PHP echo $livraison['idlivraison']; ?> name="idlivraison">
				
				</td>
				<td>
					<a href="supprimerlivraison.php?idlivraison=<?php echo $livraison['idlivraison']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
