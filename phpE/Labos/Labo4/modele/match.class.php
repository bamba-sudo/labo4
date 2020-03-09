<?php
// *******************************************
// Labo #3 Partie B
// Classe  : Match 
// Auteurs : Pierre Coutu
// *******************************************

// Importer la classe Equipe
include_once "equipe.class.php"; 

// Classe représentant un Match
class Match {
	// Attributs
	private $numero;                 // int
	private $equipeVisiteuse;        // Equipe
	private $equipeLocale;           // Equipe
	private $butsEquipeVisiteuse=-1; // int (-1 inidique un match pas encoure joué)
	private $butsEquipeLocale=-1;    // int
	
	// Constructeur
	public function __construct($unNumero, $visiteur, $locaux) {
		$this->numero = $unNumero;
		$this->equipeVisiteuse=$visiteur;
		$this->equipeLocale=$locaux;
	}
	
	// Accesseurs et mutateurs
	public function getNumero() { return $this->numero; }
	public function getEquipeVisiteuse() { return $this->equipeVisiteuse; }
	public function getEquipeLocale() { return $this->equipeLocale; }
	public function getButsEquipeVisiteuse() { return $this->butsEquipeVisiteuse; }
	public function getButsEquipeLocale() { return $this->butsEquipeLocale; }

	// Autres méthodes
	public function matchTermine() {
		return $this->butsEquipeVisiteuse >= 0 && $this->butsEquipeLocale >= 0;
	}
	public function enregistrerResultat($butsVisiteurs,$butsLocaux) {
		// Enregister les buts dans les 2 attributs de cet objet
		$this->butsEquipeVisiteuse = $butsVisiteurs;
		$this->butsEquipeLocale = $butsLocaux;
		// Ajuster les stats des 2 attributs de type Equipe
		$this->equipeVisiteuse-> ajusterStatsUnMatch($butsVisiteurs, $butsLocaux);//buts marqués, encaissés par les visiteurs
		$this->equipeLocale-> ajusterStatsUnMatch($butsLocaux, $butsVisiteurs);//buts marqués, encaissés par les locaux
	}

	// Affichage
	public function __toString(){
		$message = "[#".$this->numero."] ";
		$message.= $this->butsEquipeVisiteuse." : ".$this->equipeVisiteuse-> getVille()." @ ";
		$message.= $this->equipeLocale-> getVille()." : ".$this->butsEquipeLocale;
		$message=str_replace("-1 :","--- :",$message);
		$message = str_replace(": -1", ": ---", $message);
		return $message;
	}
	
}
?>