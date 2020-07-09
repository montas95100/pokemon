<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pokédex-Collection</title>
	<link href="../../css/stylesheet-pokemon.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include('includes/header.php'); ?>
	<h1 class="headertext">Tous les Pokemons</h1>
	<div class="collection">
	<?php
		$pdo = new PDO ('mysql:host=localhost:3308;dbname=pokedex', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
		$a =" SELECT nom, PV, attaque, defense, vitesse, image FROM pokemon ORDER BY nom ASC";
		$stmt1 = $pdo->prepare($a);
		$data1 = $stmt1->execute();
		$result = $stmt1->fetchALL(PDO::FETCH_ASSOC);
		foreach ($result as $key => $value) : ?>
					<div class="pokemon">
						<div class="row">
							<div class="column">	
								<h2 class="namepokemon"><?= $value['nom']; ?></h2><br>
								<h2>PV:<?= $value['PV'];?></h2><br>
								<h2>Attaque:<?= $value['attaque']; ?></h2><br>
								<h2>Défense:<?= $value['defense']; ?></h2><br>
								<h2>Vitesse:<?= $value['vitesse']; ?></h2>
							</div>	
							<div class="column">	
								<img class="result" src="../../pictures/<?= $value['image']; ?>"/>
							</div>
						</div>
					</div>
		<?php endforeach; ?>
		</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>