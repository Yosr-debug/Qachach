<?php
	class evenement{
		private $id_evenement=null;
		private $date_evenement=null;
		private $duree=null;
		private $nom_evenement=null;
		
		
		
		function __construct($id_evenement, $date_evenement, $duree, $nom_evenement){
			$this->id_evenement=$id_evenement;
			$this->date_evenement=$date_evenement;
			$this->duree=$duree;
			$this->nom_evenement=$nom_evenement;
		}

		function getid_evenement(){
			return $this->id_evenement;
		}
		function getdate_evenement(){
			return $this->date_evenement;
		}
		function getduree(){
			return $this->duree;
		}
		function getnom_evenement(){
			return $this->nom_evenement;
		}
		function setNom(string $id_evenement){
			$this->id_evenement=$id_evenement;
		}
		function setPrenom(string $date_evenement){
			$this->date_evenement=$date_evenement;
		}
		function setAdresse(string $duree){
			$this->duree=$duree;
		}
		function setEmail(string $nom_evenement){
			$this->nom_evenement=$nom_evenement;
		}
		
		
	}
