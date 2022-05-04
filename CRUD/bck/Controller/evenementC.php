<?php
	include '../config.php';
	include_once '../Model/evenement.php';
	class evenementC {

		function afficherevenements(){
			$sql="SELECT * FROM evenement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function supprimerevenement($evenement_id){
			$sql="DELETE FROM evenement WHERE id_evenement=:id_evenement";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_evenement', $evenement_id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterevenement($evenement){
			$sql="INSERT INTO evenement (id_evenement, date_evenement, duree, nom_evenement) 
			VALUES (:id_evenement,:date_evenement, :duree, :nom_evenement)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_evenement' => $evenement->getid_evenement(),
					'date_evenement' => $evenement->getdate_evenement(),
					'duree' => $evenement->getduree(),
					'nom_evenement' => $evenement->getnom_evenement()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererevenement($id_evenement){
			$sql="SELECT * from evenement where id_evenement=$id_evenement";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierevenement($evenement, $nom_evenement){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET 
						date_evenement= :date_evenement, 
						duree= :duree, 
						nom_evenement= :nom_evenement
					WHERE id_evenement= :id_evenement'
				);
				$query->execute([
					'id_evenement' => $evenement->getid_evenement(),
					'date_evenement' => $evenement->getdate_evenement(),
					'duree' => $evenement->getduree(),
					'nom_evenement' => $evenement->getnom_evenement()
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>