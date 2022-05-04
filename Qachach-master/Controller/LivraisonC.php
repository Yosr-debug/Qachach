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
    //include_once '../Model/Livraison.php';
	class livraisonC {
		function trierlivraison(){
			$requete = "select * from livraison ORDER BY  nbproduit DESC";
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

		function rechercherlivraison($idlivraison)
        {
            $requete = "select * from livraison where idlivraison like '%$idlivraison%'";
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




		function afficherlivraison(){
			$sql="SELECT * FROM livraison";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function supprimerlivraison($idlivraison){
			$sql="DELETE FROM livraison WHERE idlivraison=:idlivraison";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idlivraison', $idlivraison);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function ajouterlivraison($livraison){
			$sql="INSERT INTO livraison (idlivraison, nbproduit, adresse, datelivraison,ref_commande) 
			VALUES (:idlivraison,:nbproduit, :adresse, :datelivraison ,:ref_commande)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idlivraison' => $livraison->getidlivraison(),
					'nbproduit' => $livraison->getnbproduit(),
					'adresse' => $livraison->getadresse(),
					'ref_commande' => $livraison->getref_commande(),
					'datelivraison' => $livraison->getdatelivraison(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererlivraison($idlivraison){
			$sql="SELECT * from livraison where idlivraison=$idlivraison";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierlivraison($livraison,$idlivraison){
			$sql="UPDATE livraison SET idlivraison=:idd, nbproduit=:nbproduit , adresse=:adresse ,datelivraison=:datelivraison, ref_commande=:ref_commande WHERE idlivraison=:idlivraison";
			
			$db = config::getConnexion();
			//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
			$req=$db->prepare($sql);
			$idd=$livraison->getidlivraison();
			$nbproduit=$livraison->getnbproduit();
			$adresse=$livraison->getadresse();
			$datelivraison=$livraison->getdatelivraison();
			$ref_commande=$livraison->getref_commande();

	
	
			$datas = array(':idd'=>$idd, ':idlivraison'=>$idlivraison, ':nbproduit'=>$nbproduit,':adresse'=>$adresse,':datelivraison'=>$datelivraison,':ref_commande'=>$ref_commande);
			$req->bindValue(':idd',$idd);
			$req->bindValue(':idlivraison',$idlivraison);
			$req->bindValue(':nbproduit',$nbproduit);
			$req->bindValue(':adresse',$adresse);
			$req->bindValue(':datelivraison',$datelivraison);
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