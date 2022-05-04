<?php
	include '../Controller/retourC.php';
	$retourC=new retourC();
	$liste=$retourC->afficherRetour(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterretour.php">Ajouter un retour</a></button>
		<center><h1>Liste des retours</h1></center>
		<table border="1" align="center">
			<tr>
				<th>idretour</th>
				<th>ref_commande</th>
                <th>description</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($liste as $retour){
			?>
			<tr>
				<td><?php echo $retour['idretour']; ?></td>
				<td><?php echo $retour['ref_commande']; ?></td>
                <td><?php echo $retour['description']; ?></td>
				
				<td>
					
						<a  name="Modifier" href="modifierretour.php?idretour=<?PHP echo $retour['idretour']; ?>" > modifier </a>
						
						<input type="hidden" value=<?PHP echo $retour['idretour']; ?> name="idretour">
				
				</td>
				<td>
					<a href="supprimerretour.php?idretour=<?php echo $retour['idretour']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
