<?php

class Udomitelj 
{
	public $sifraUdomitelja = "";
	public $ime = "";
	public $prezime = "";
	public $adresa = "";
	public $email = "";
	public $telMob = ""; 
	public $status = "";

	public function __construct($sifraUdomitelja, $ime, $prezime, $adresa, $email, $telMob, $status)
	{
		$this->sifraUdomitelja = $sifraUdomitelja;
		$this->ime = $ime;
		$this->prezime = $prezime;
		$this->adresa = $adresa;
		$this->email = $email;
		$this->telMob = $telMob;
		$this->status = $status;
	}
}
?>