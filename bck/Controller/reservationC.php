<?php
	include '../config.php';
	include_once '../Model/reservation.php';
	class reservationC {

		function afficherreservation(){
			$sql="SELECT * FROM reservation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function rechercherid($id)
        {
            $requete = "select * from reservation where id_evenement like '$id'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $e) {
                 $th->getMessage();
            }
        }

		function supprimerreservation($id_reservation){
			$sql="DELETE FROM reservation WHERE id_reservation=:id_reservation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_reservation', $id_reservation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterreservation($reservation){
			$sql="INSERT INTO reservation (id_reservation,nbr_place,date_reservation,id_evenement) 
			VALUES (:id_reservation,:nbr_place,:date_reservation,:id_evenement)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_reservation' => $reservation->getid_reservation(),
					'nbr_place' => $reservation->getnbr_place(),
					'date_reservation' => $reservation->getdate_reservation(),
					'id_evenement' => $reservation->getid_evenement()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererreservation($id_reservation){
			$sql="SELECT * from reservation where id_reservation=$id_reservation";
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
		
		function modifierreservation($reservation, $id_reservation){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reservation SET 
						nbr_place= :nbr_place, 
						date_reservation= :date_reservation 	
					WHERE id_reservation= :id_reservation'
				);
				$query->execute([
					'id_reservation' => $reservation->getid_reservation(),
					'nbr_place' => $reservation->getnbr_place(),
					'date_reservation' => $reservation->getdate_reservation(),
					
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>