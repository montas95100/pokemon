<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podédex-Compte</title>
    <link href="../../css/stylesheet-pokemon.css" rel="stylesheet" type="text/css">

</head>
<body>
    <?php include('includes/header.php'); 
    	  require 'requete.php';
   			$pdo = new PDO ('mysql:host=localhost:3308;dbname=pokedex', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
			$a =" SELECT pseudo, email FROM users WHERE id='2'";
			$stmt1 = $pdo->prepare($a);
			$data1 = $stmt1->execute();
			$result = $stmt1->fetchALL(PDO::FETCH_ASSOC);

			$b =" SELECT image FROM pokemon WHERE id='2'";
			$stmt2 = $pdo->prepare($b);
			$data2 = $stmt2->execute();
			$result1 = $stmt2->fetchALL(PDO::FETCH_ASSOC);
    ?>
    <h1 class="headertext">Mon Compte</h1>

    <div class="topwrapper"> 
        <h2 class="titre" style="float:center;">Mes Infos</h2>
        <h3>Pseudo : <?php  echo $result[0]['pseudo'];?></h3>
        <h3>Email : <?php echo $result[0]['email'];?> </h3>
        <h3>Image de Profil :<img style="height:80px;" src="../../pictures/<?= $result1['0']['image']; ?>"/></h3>
    </div>
   <hr>
    <h1 class="headertext">Mes pokemons</h1>

      <?php $c =" SELECT nom, PV, attaque, defense, vitesse, image FROM pokemon WHERE id='2'";
			$stmt3 = $pdo->prepare($c);
			$data3 = $stmt3->execute();
			$result2 = $stmt3->fetchALL(PDO::FETCH_ASSOC);
       ?>

    <div class="topwrapper"> 
        <h2 class="titre" style="float:center;">Infos</h2>
        <h3>nom : <?php  echo $result2[0]['nom'];?></h3>
        <h3>PV : <?php  echo $result2[0]['PV'];?></h3>
        <h3>attaque : <?php  echo $result2[0]['attaque'];?></h3>
        <h3>defense : <?php  echo $result2[0]['defense'];?></h3>
        <h3>vitesse : <?php  echo $result2[0]['vitesse'];?></h3>
        <h3>Image de Profil :<img style="height:80px;" src="../../pictures/<?= $result2['0']['image']; ?>"/></h3>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>