<?php

class Compte
{
	private $solde;
	private $code;
	private $client;
	
	public function __construct($solde = 0, $code, $client){
		$this->solde = $solde;
		$this->code = $code;
		$this->client = $client;
	}
	
	public function getSolde(){
		return $this->solde;
	}
	public function getCode(){
		return $this->code;
	}
	public function getClient(){
		return $this->client;
	}
	
	public function infoCompte(){
		$infos='<p>Solde: '. $this->solde .' </p>';
		$infos.='<p>Code: '. $this->code .' </p>';
		$infos.='<p>Client: '. $this->client->infoClient() .' </p>';
		return $infos;
	}
	
	public function crediter($credit){
		$this->solde = $this->solde + $credit;
	}
	public function debiter($credit){
		$this->solde = $this->solde - $credit;
	}
	
	public function crediterDepuisCompteDistant($credit, $compteDistant){
		$this->solde = $this->solde + $credit;
		$compteDistant->solde = $compteDistant->solde - $credit;
	}
	public function debiterVersCompteDistant($credit, $compteDistant){
		$this->solde = $this->solde - $credit;
		$compteDistant->solde = $compteDistant->solde + $credit;
	}
}
?>
