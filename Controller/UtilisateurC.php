<?php
include_once 'C:/xampp/htdocs/Reclamation/config.php';
include_once 'C:/xampp/htdocs/Reclamation/Model/Utilisateur.php';
class UtilisateurC{
    function connexionUser($email,$password){
        $sql="SELECT *FROM user  WHERE (adresse_mail='" .$email ."' AND password ='" .$password ."')";
        $db=config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==0){
                $message="pseudo ou le mot de passe est incorrect";
            }
            else {
                $x=$query->fetch();
                $message=$x['nom'];
            }
        }
        catch(Exception $e){
            $message=" ".$e->getmessage();
        }
        return $message;
    }
}