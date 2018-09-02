<?php
// Game object 

include_once('card.php');

class game {
	var $id = NULL;
	var $name = NULL;
	var $year = NULL;
	var $image = 'placeholder.png';
	var $URL = 'https://boardgamegeek.com/';
	var $verified = 0;
	var $cards = array();

	function __construct($id, $name, $year, $img, $URL, $card_arr, $verified) {
		$this->id = $id;
		$this->name = $name;
		$this->year = $year;
		$this->image = $img;
		$this->URL = $URL;
		$this->cards = $card_arr;
		$this->verified = $verified;
	}

	// Setters
	function set_id($id){
		$this->id = $id;
	}
	function set_name($name){
		$this->name = $name;
	}
	function set_year($year){
		$this->year = $year;
	}
	function set_image($img){
		$this->image = $img;
	}
	function set_URL($URL){
		$this->URL = $URL;
	}
	function add_card($card){
		$this->$cards[] = $card;
	}
	function set_verified($verified){
		$this->verified = $verified;
	}

	// Getters
	function get_id(){
		 	 return $this->id;
	}
	function get_name(){
		 	 return $this->name;
	}
	function get_year(){
		 	 return $this->year;
	}
	function get_image(){
		 	 return $this->image;
	}
	function get_URL(){
		 	 return $this->URL;
	}
	function get_cards(){
		return $this->cards;
	}
	function get_verified(){
		return $this->verified;
	}

}
?>