<?php
session_start();
include_once '../config.php';
include_once 'C:/xampp/htdocs/Reclamation/Model/Reclamation.php';

class ReclamationC{
    function afficherreclamation($email){
        $sql="SELECT * FROM reclamations WHERE mail=('$email')" ;
        $db = config::getConnexion();
       
        try{
            $query=$db->prepare($sql);
            $query->execute();
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
                'mail' => $_SESSION['email'],
                'sujet' => $reclamation->getsujet(),
                

                
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
    function afficherreclamation1(){
        $sql="SELECT * FROM reclamations ";
        $db = config::getConnexion();
       
        try{
            $query=$db->prepare($sql);
            $query->execute();
            

            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }
    function rechercherreclamation($id)
    {
        $requete = "select * from reclamations where id_reclamation like '%$id%'";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }
    function trierreclamation($email){
    $requete = "SELECT  * FROM reclamations WHERE mail=('$email') ORDER BY  date_reclamation DESC  ";
    $config = config::getConnexion();
    try {
        $querry = $config->prepare($requete);
        $querry->execute();
        $result = $querry->fetchAll();
        return $result ;
    } catch (PDOException $th) {
         $th->getMessage();
    }
}
function trierreclamation1(){
    $requete = "SELECT  * FROM reclamations  ORDER BY  date_reclamation DESC  ";
    $config = config::getConnexion();
    try {
        $querry = $config->prepare($requete);
        $querry->execute();
        $result = $querry->fetchAll();
        return $result ;
    } catch (PDOException $th) {
         $th->getMessage();
    }
}



    }
    ?>
