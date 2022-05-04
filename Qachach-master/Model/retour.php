<?php
	class Retour{
		private $idretour=null;
		private $ref_commande=null;
        private $description=null;
		
		
		
		function __construct($idretour,$ref_commande,$description){
			$this->idretour=$idretour;
			$this->ref_commande=$ref_commande;
			$this->description=$description;


		}

		function getidretour(){
			return $this->idretour;
		}
		function getref_commande(){
			return $this->ref_commande;
		}
		function getdescription(){
			return $this->description;
		}
		function setidretour(string $idretour){
			$this->idretour=$idretour         ;
		}
		function setref_commande(string $ref_commande){
			$this->ref_commande=$ref_commande         ;
		}
        function setdescription(string $description){
            $this->description=$description    ;
        }
		
		
	}