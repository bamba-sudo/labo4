<!DOCTYPE html>
<!------------------------------------------------------------------>
<!---- labo #3 partie B                                          --->
<!---- Fichier de test unitaire pour la classe Match             ---> 
<!---- Auteurs :                                                 --->
<!------------------------------------------------------------------>
<html lang="fr">
<head>
	<title>Labo3B test</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../../css/styleTable.css" />
</head>
<body >
	<img alt="Diagramme de classes" src="../../images/DiagrammeDeClasses.png" height="400" />

	<!---- Création de 2 équipes et un match ---->
	<h1>Fichier de test pour la classe Match</h1>
	<?php
		include_once "../match.class.php";
		$equipeV=new Equipe("Blaireaux","Blainville",5,2,1);
		$equipeL=new Equipe("Marmottes","Montréal",3,1,4);
		$unMatch=new Match(34,$equipeV,$equipeL);
		
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
				<td><?php echo $unMatch;?> </td>
			</tr>
			<tr>
				<td>matchTermine?</td>
				<td><?php echo $unMatch->matchTermine()?"Termine":"Pas Termine";?> </td>
			</tr>
			<tr>
				<td>
					enregistrerResultat <br/>(Blaireaux 5, Marmottes : 3)<br/>
				    matchTermine?</td>
				<td>
					<br/>
					<?php
						// enregistrer le résultat et vérifier que le match est terminé
						$unMatch->enregistrerResultat(5, 3);
						echo $unMatch."<br/>";
						echo $unMatch->matchTermine()?"Termine":"Pas Termine";
					?>
				</td>
			</tr>
			<tr>
				<td>
					getNumero (34)<br/>
					getEquipeVisiteuse (maintenant 6,2,1)<br/>
					getEquipeLocale (maintenant 3,2,4)<br/>
					getButsEquipeVisiteuse (maintenant 5)<br/>
					getButsEquipeLocale (maintenant 3)</td>
				<td>
					<?php
						// test sur les get avec le résultat enregistré
						echo $unMatch->getNumero()."<br/>";
						echo $unMatch->getEquipeVisiteuse()."<br/>";
						echo $unMatch->getEquipeLocale()."<br/>";
						echo $unMatch->getButsEquipeVisiteuse()."<br/>";
						echo $unMatch->getButsEquipeLocale();
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
