<?php
try{
	$bdd = new PDO('mysql:host=localhost:3308;dbname=pokedex', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}

?>