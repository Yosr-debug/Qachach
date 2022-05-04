<?php
	class reservation{
		private $id_reservation=null;
		private $nbr_place=null;
		private $date_reservation=null;
		
		
		
		
		function __construct($id_reservation, $nbr_place, $date_reservation){
			$this->id_reservation=$id_reservation;
			$this->nbr_place=$nbr_place;
			$this->date_reservation=$date_reservation;
			

		function getid_reservation(){
			return $this->id_reservation;
		}
		function getnbr_place(){
			return $this->nbr_place
		}
		function getdate_reservation(){
			return $this->date_reservation;
		}
		function setid_reservation(string $id_reservation){
			$this->id_reservation=$id_reservation;
		}
		function setPrenom(string $nbr_place){
			$this->nbr_place=$nbr_place;
		}
		function setAdresse(string $date_reservation){
			$this->date_reservation=$date_reservation;
		}
		
		
	}


?>