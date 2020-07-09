<!DOCTYPE html>
<html>
<head>
	<title>inscription</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/stylesheet-pokemon.css" type="text/css" rel="stylesheet">

</head>
<body>
<?php

require 'Requete.php';
include('config.php');
 // on se connecte à MySQL et on sélectionne la base //On créé la requête
$values = [
    'pseudo' => $_POST['pseudo'],
    'password' => $_POST['password'],
    'Verifpassword' => $_POST['Verifpassword'],
    'email' => $_POST['email']
];


if(!empty($_POST['pseudo']) and (strlen($_POST['pseudo']) >= 4) and !preg_match("/ /i", $_POST['pseudo'])){

	if((strlen($_POST['password']) >= 8) and !empty($_POST['password'])  and !preg_match("/ /i", $_POST['password'])){

		if(!empty($_POST['Verifpassword']) and (($_POST['Verifpassword']) == ($_POST['password']))){
				$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);	
					$values['password']=$pass;				
					$test =insert('users',$values);

			if((preg_match("/gmail.com/",$_POST['email'])) and !empty($_POST['email'])  and !preg_match("/ /i", $_POST['email'])){
					echo '<h2>inscription confirmée</h2>';
					echo '<form method="POST" action="addnew_pokemon.php" enctype="multipart/form-data">
        				<input type="text" name="nom" placeholder="nom"><br>
        				<input type="text" name="PV" placeholder="PV"><br>
        				<input type="text" name="attaque" placeholder="attaque"><br>
        				<input type="text" name="defense" placeholder="defense"><br>
        				<input type="text" name="vitesse" placeholder="vitesse"><br>
        				<label>Image de profil :</label>
        				<input class="image" type="file" name="image"><br>
        				<input type="submit" value="Envoyer"> 
					</form>';
					$bdd = new PDO ('mysql:host=localhost:3308;dbname=pokedex', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
					$q = "INSERT INTO users (pseudo, password, Verifpassword, email) VALUES( :pseudo, :password, :Verifpassword, :email)";
					$stmt = $bdd->prepare($q);
					$data = $stmt->execute($values);


				}else
					echo "email incorrect ou non validé";

			}else
				echo "Les mots de passes ne sont pas identiques";

	}else
		echo "Mot de passe trop court ou non validé";

}else
	echo "pseudo trop court ou non validé";



?>
</div>

<?php include('footer.php');?>
