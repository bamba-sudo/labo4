<?php
/*
   Description : fonctions d'affichage pour les menus et les classements 
   Session     : H2020 (défini au Labo4)
   Auteurs     : Walid Gharbi	
*/
   $tabItemsMenu = [
				"Accueil;../index.php;non-actif",
				"Classement;;actif",
				"TestEquipe;../modele/tests/testEquipe.php;non-actif",
				"TestMatch;../modele/tests/testMatch.php;non-actif",
				"Collège;https://www.crosemont.qc.ca;non-actif",
				"Impact;https://www.impactmontreal.com;non-actif"
			];	

// Fonction qui affiche les menus en fonction du tableau de chaine de caracrtères reçu en paramètre
// Le format des chaines est le suivant
//    TexteÀAfficher:Hyperliens:IndicateurItemActif(actif ou non-actif)
// Chaque phrase doit créer :
//    Une division ayant la classe css "menu-item" contenant l'hyperlien contenant le texte à afficher
//    Si l'indicateur d'item est à actif, on ajoute la classe css "menu-item-selectionne" à la division
function afficherItemsMenu($tableau) {
  // *************** À compléter (avec une boucle obligatoirement)**************************

	$longueur = count($tableau);

  	for ($i=0; $i < $longueur; $i++) { 
  		explode(";", $tableau[$i]));
  	}
  
  // Jusqu'ici
}

// on remonte qu'une seule fois car cette ne sera utilisée
// que dans les du dossier vue (on va arranger cela au Labo6 ou 7) 
include_once "../modele/equipe.class.php"; 

// Fonction qui le classement dans un tableau HTML
function afficherClassement($tableau){
	echo "<table>";
	echo "<thead>";
	echo "<tr>";
	echo "<th></th><th>Parties<br/>Jouées</th><th>Victoires</th><th>Défaites</th><th>Nulles</th><th>Points</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	// ***************** À compléter cette partie (avec ue boucle obligatoirement) *****************************
	
	
	
	// ... fin de la boucle
	echo "</tbody>";
	echo "</table>";
}

afficherItemsMenu($tabItemsMenu);
?>