<?php
	class livraison{
		private $idlivraison=null;
		private $nbproduit=null;
		private $ref_commande=null;
		private $datelivraison=null;
        private $adresse=null;
		
		
		
		function __construct($idlivraison, $nbproduit, $adresse,$datelivraison,$ref_commande){
			$this->idlivraison=$idlivraison;
			$this->adresse=$adresse;
			$this->ref_commande=$ref_commande;
			$this->nbproduit=$nbproduit;
			$this->datelivraison=$datelivraison;


		}

		function getidlivraison(){
			return $this->idlivraison;
		}
		function getadresse(){
			return $this->adresse;
		}
		function getref_commande(){
			return $this->ref_commande;
		}
		function getnbproduit(){
			return $this->nbproduit;
		}
		function getdatelivraison(){
			return $this->datelivraison;
		}
		function setnbproduit(string $idlivraison){
			$this->idlivraison=$idlivraison;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setref_commande(string $ref_commande){
			$this->ref_commande=$ref_commande;
		}
		function setidlivraison(string $idlivraison){
			$this->idlivraison=$idlivraison         ;
		}
		function setdatelivraison(string $datelivraison){
			$this->datelivraison=$datelivraison         ;
		}
		
		
	}