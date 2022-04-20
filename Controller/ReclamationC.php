<?php
include_once '../config.php';
include_once 'C:/xampp/htdocs/Reclamation/Model/Reclamation.php';

class ReclamationC{
    function afficherreclamation(){
        $sql="SELECT * FROM reclamations WHERE (mail='trabelsi.dali484@gmail.com')" ;
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }
    function supprimerreclamation($Id){
        $sql="DELETE FROM reclamations WHERE id_reclamation=:Id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Id', $Id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}

    }
    function ajouterreclamation($reclamation){
        $sql="INSERT INTO  reclamations (type, date_reclamation, description,mail, sujet) 
        VALUES (:type,:date_reclamation,:description, :mail, :sujet)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'type' => $reclamation->gettype(),
                'date_reclamation' => $reclamation->getdate(),
                'description' => $reclamation->getdescription(),
                'mail' => $reclamation->getmail(),
                'sujet' => $reclamation->getsujet()
                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function recupererreclamation($Id){
        $sql="SELECT * from reclamations where id_reclamation=$Id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $reclamation=$query->fetch();
            return $reclamation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierreclamation($reclamation, $Id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reclamations SET 
                    type= :type, 
                    date_reclamation= :date, 
                    description= :description, 
                    mail= :mail, 
                    sujet=:sujet
                WHERE id_reclamation= :id'
            );
            $query->execute([
                'id' => $Id,
                'type' => $reclamation->gettype(),
                'date' => $reclamation->getdate(),
                'description' => $reclamation->getdescription(),
                'mail' => $reclamation->getmail(),
                'sujet' => $reclamation->getsujet(),
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    }
