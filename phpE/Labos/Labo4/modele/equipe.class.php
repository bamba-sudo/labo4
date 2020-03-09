<?php
// *******************************************
// Labo #3 Partie A
// Classe  : Equipe 
// Auteurs : Pierre Coutu 
// *******************************************


// Classe représentant une Equipe
class Equipe {
	// Attributs
	private $nom;         // String
	private $ville;       // String
	private $victoires;   // int
	private $defaites;    // int
	private $nulles;      // int
	
	// Constructeur
	public function __construct($unNom, $uneVille, $desVictoires = 0, $desDefaites = 0, $desNulles=0) {
		$this->nom = $unNom;
		$this->ville = $uneVille;
		$this->victoires = $desVictoires;
		$this->defaites = $desDefaites;
		$this->nulles = $desNulles;
	}
	
	// Accesseurs et mutateurs
	public function getNom() { return $this->nom; }
	public function getVille() { return $this->ville; }
	public function getVictoires() { return $this->victoires; }
	public function getDefaites() { return $this->defaites; }
	public function getNulles() { return $this->nulles; }

	// Autres méthodes
	public function calculerMatchsJoues() { return $this->victoires + $this->defaites + $this->nulles; }
	public function calculerPoints() { return 3 * $this->victoires + $this->nulles; }
	public function ajusterStatsUnMatch($butsMarques, $butsEncaisses) {
		if ($butsMarques > $butsEncaisses) {
			$this->victoires += 1;
		} elseif ($butsMarques < $butsEncaisses) {
			$this->defaites += 1;
		} else {
			$this->nulles += 1;
		}
	}
	// Affichage
	public function __toString() {
		$message = $this->nom.", ".$this->ville." (MJ:".$this->calculerMatchsJoues();
		$message.= ", V:".$this->victoires.", D:".$this->defaites;
		$message.= ", N:".$this->nulles.", PTS:".$this->calculerPoints().")";
		return $message;
	} 
}	

?>