<!DOCTYPE html>
<html>
<head>
	<title>inscription</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/stylesheet-pokemon.css" type="text/css" rel="stylesheet">

</head>
<body>

	<header>
	<div>
		<nav class="lien">
    	<img class="photo" height="40px" src="../../../pictures/logo.png" alt="Pikachu">
    	
    		<ul>
        		<a href="../index.php">Accueil</a>  
        		<a href="../collection.php">Collection</a>
        		<a href="../add_pokemon.php">Ajouter un Pokemon</a>
        		<a href="../account.php">Compte</a>
        		<a href="../../signout.php">Deconnexion</a> 
    		</ul>
    	</nav> 
	</div>
	</header>
<div style="padding-left:200px;">
	<?php
require 'Requete.php';
include('config.php');
 // on se connecte à MySQL et on sélectionne la base //On créé la requête
$addvalue = [
    'nom' => $_POST['nom'],
    'PV' => $_POST['PV'],
    'attaque' => $_POST['attaque'],
    'defense' => $_POST['defense'],
    'vitesse' => $_POST['vitesse'],
    'image' => $_FILES['image']['name']
];

if(!empty($_POST['nom']) and (strlen($_POST['nom']) >= 4) and !preg_match("/ /i", $_POST['nom'])){

	if((($_POST['PV']) >= 20) and !empty($_POST['PV'])  and !preg_match("/ /i", $_POST['PV'])){

		if(!empty($_POST['attaque']) and (($_POST['attaque']) > 0) and is_numeric($_POST['attaque'])){

			if(!empty($_POST['defense']) and (($_POST['defense']) > 0) and  is_numeric($_POST['defense'])){
				if(!empty($_POST['vitesse']) and (($_POST['vitesse']) > 0)  and is_numeric($_POST['vitesse'])){
					if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
        // Testons si le fichier n'est pas trop gros
        				if ($_FILES['image']['size'] <= 10000000){
                // Testons si l'extension est autorisée
                				$infosfichier = pathinfo($_FILES['image']['name']);

                				$extension_upload = $infosfichier['extension'];

                				$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                					if (in_array($extension_upload, $extensions_autorisees)){
                        // On peut valider le fichier et le stocker définitivement
										echo 'l\'envoi a bien été effectué';
                        					echo '<a href="../collection.php">' . '<button>' . 'collection' . '</button>' . '</a> 
                        					';
                        				$bdd1 = new PDO ('mysql:host=localhost:3308;dbname=pokedex', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
                        				
										$q1 = "INSERT INTO pokemon (nom, PV, attaque, defense, vitesse, image) VALUES( :nom, :PV, :attaque, :defense, :vitesse, :image)";
										$stmt1 = $bdd1->prepare($q1);
										$data1 = $stmt1->execute($addvalue);

                					}else{ 

                	echo '<h1>'  . ' l envoi a échoué, veuillez vérifié l\'extension votre fichier 
                	 ' . '</h1>';
                }
        }else
        	echo "123";
}else
	echo "image incorrect";

				}else
					echo "defense incorrect ou non validé";

				}else
					echo "defense incorrect ou non validé";

			}else
				echo "attaque incorrect ou non validé";

	}else
		echo "PV trop court ou non validé";

}else
	echo "nom trop court ou non validé";



?>
</div>

<?php include('footer.php');?>
</body>
</html>