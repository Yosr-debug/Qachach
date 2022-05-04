<?php
	// include '../config.php';
	class config {
        private static $pdo = NULL;
    
        public static function getConnexion() {
          if (!isset(self::$pdo)) {
            try{
              self::$pdo = new PDO('mysql:host=localhost;dbname=9ach', 'root', '',
              [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
              
            }catch(Exception $e){
              die('Erreur: '.$e->getMessage());
            }
          }
          return self::$pdo;
        }
      }
    // include_once '../Model/retour.php';
	class RetourC {

		function afficherretour(){
			$sql="SELECT * FROM retour";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function supprimerretour($idretour){
			$sql="DELETE FROM retour WHERE idretour=:idretour";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idretour', $idretour);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterretour($retour){
			$sql="INSERT INTO retour (idretour, ref_commande, description ) 
			VALUES (:idretour,:ref_commande,:description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idretour' => $retour->getidretour(),
					'ref_commande' => $retour->getref_commande(),
                    'description' => $retour->getdescription(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererretour($idretour){
			$sql="SELECT * from retour where idretour=$idretour";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierretour($retour,$idretour){
			$sql="UPDATE retour SET idretour=:idd, ref_commande=:ref_commande, description=:description WHERE idretour=:idretour";
			
			$db = config::getConnexion();
			//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
			$req=$db->prepare($sql);
			$idd=$retour->getidretour();
			$ref_commande=$retour->getref_commande();
            $description=$retour->getdescription();

	
	
			$datas = array(':idd'=>$idd, ':idretour'=>$idretour,':ref_commande'=>$ref_commande,':description'=>$description);
			$req->bindValue(':idd',$idd);
			$req->bindValue(':idretour',$idretour);
			$req->bindValue(':description',$description);
			$req->bindValue(':ref_commande',$ref_commande);
            
			
				$s=$req->execute();
				
			   // header('Location: index.php');
			}
			catch (Exception $e){
				echo " Erreur ! ".$e->getMessage();
	   echo " Les datas : " ;
	  print_r($datas);
			}
			
		}

	}
?>