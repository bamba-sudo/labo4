<!DOCTYPE html>
<!------------------------------------------------------------------>
<!---- labo #3 partie A                                          --->
<!---- Fichier de test unitaire pour la classe Equipe            ---> 
<!---- Auteurs : Pierre Coutu                                    --->
<!------------------------------------------------------------------>
<html lang="fr">
<head>
	<title>Labo3A test</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/styleTable.css" />
</head>
<body >
	<img alt="Diagramme de classes" src="../../images/DiagrammeDeClasses.png" height="400" />

	<!---- Création d'une equipe ---->
	<h1>Fichier de test pour la classe Equipe</h1>
	<?php
		include_once "../equipe.class.php"; 
		$uneEquipe=new Equipe("Blaireaux","Blainville",4,5,2);
	?>

	<!---- Utilisation et affichage des méthodes -->
	<table>
		<thead>
			<tr>
				<th>Méthode</th>
				<th>Résultat</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>toString</td>
				<td><?php echo $uneEquipe;?></td>
			</tr>
			<tr>
				<td>getNom<br/>getVille<br/>getVictoires<br/>getDefaites<br/>getNulles</td>
				<td>
					<?php
						echo $uneEquipe->getNom()."<br/>";
						echo $uneEquipe->getVille()."<br/>";
						echo $uneEquipe->getVictoires()."<br/>";
						echo $uneEquipe->getDefaites()."<br/>";
						echo $uneEquipe->getNulles();
					?>
				</td>
			</tr>
			<tr>
				<td>calculerMatchsJoues<br/>caclulerPoints</td>
				<td>
					<?php
						echo $uneEquipe->calculerMatchsJoues()."<br/>";
						echo $uneEquipe->calculerPoints();
					?>
				</td>
			</tr>
			<tr>
				<td>
					ajusterStatsUnMatch<br/>
					après un 5 à 3 <br/> 
					après un 1 à 4 <br/> 
					après un 2 à 2 <br/> 
				</td>
				<td>
					<br/>
					<?php
						// Enregistrer une vicoite, une défaite et une nulle
						// et vérifier au fur et à mesures que le résultat s'enregistre
						$uneEquipe-> ajusterStatsUnMatch(5, 3);
						echo $uneEquipe."<br/>";
						$uneEquipe-> ajusterStatsUnMatch(1, 4);
						echo $uneEquipe."<br/>";
						$uneEquipe-> ajusterStatsUnMatch(2, 2);
						echo $uneEquipe;
					?>
				</td>
			</tr>
		</tbody>
	</table>
	<br/>
	
	<!---- Retour au fichier d'accueil -->
	<h2><a href="../../index.php">Retour à la page d'accueil</a></h2>
</body>
</html>
