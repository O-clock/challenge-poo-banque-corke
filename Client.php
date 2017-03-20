<?php
class Client
{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	
	public function __construct($cin, $nom, $prenom, $tel=""){
		$this->cin = $cin;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->tel = $tel;
	}
	
	public function getCin(){
		return $this->cin;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function getTel(){
		return $this->tel;
	}
	
	public function infoClient(){
		$infos='<p>CIN: '. $this->cin .' </p>';
		$infos.='<p>Nom: '. $this->nom .' </p>';
		$infos.='<p>Prénom: '. $this->prenom .' </p>';
		$infos.='<p>Tel: '. $this->tel .' </p>';
		return $infos;
	}
}
