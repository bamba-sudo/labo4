<!--
  Description   : Inclusions de gabarits et fonctions d'affichages
  Session       : H2020 (défini au Labo4)
  Noms          : 
-->
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Labo 4</title>
	<meta  charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="../css/Labo4_solution.css"/>
</head>
<body>
	
	<!-- ************** Entête ************** -->
	<?php
		include "gabarits/entete.inc.php"
	?>
	
	<!-- ************** Menu ************** -->
	<div class="menu">
		<?php
			$tabItemsMenu = [
				"Accueil;../index.php;non-actif",
				"Classement;;actif",
				"TestEquipe;../modele/tests/testEquipe.php;non-actif",
				"TestMatch;../modele/tests/testMatch.php;non-actif",
				"Collège;https://www.crosemont.qc.ca;non-actif",
				"Impact;https://www.impactmontreal.com;non-actif"
			];	
			//================== À compléter ==============================
			
		?>
	</div>
	
	<!-- ************** Contenu principal ************** -->
	<div class="milieu milieu-bg">
		<!-- ***Contenu#1 *** -->
		<div class="contenu">
			<h2>Classement actuel</h2>
			<div class="indentation">
			<?php
				include_once "../modele/equipe.class.php";
				$tabEquipe = [
					new Equipe("Marmottes", "Montréal", 6, 1, 1),
					new Equipe("Lions", "Laval", 4, 2, 2),
					new Equipe("Carcajous", "Carignan", 4, 2, 2),
					new Equipe("Blaireaux", "Blainville", 3, 4, 1)
				];
				//================== À compléter ==============================

			
			
			?>	
				
			</div>
		</div>
	</div>

	<!-- ************** Pied de page ************** -->
	<?php
		include "gabarits/pied_de_page.inc.php"
	?>
</body>
</html>
