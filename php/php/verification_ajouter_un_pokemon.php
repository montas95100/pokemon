<?php 
require('config.php');

$nom = htmlspecialchars($_POST['nom']);
$pv = htmlspecialchars($_POST['pv']); 
$attaque = htmlspecialchars($_POST['attaque']);
$defense = htmlspecialchars($_POST['defense']);
$vitesse = htmlspecialchars($_POST['vitesse']);

$q = "SELECT id FROM pokemon WHERE nom = ? ";
$req = $bdd->prepare($q);
$req->excute([$_POST['nom']]);
$results = $req->fetchall();


if (count($results) !=0) {
 header('location:ajouter_un_pokemon.php?msg=nom existe déja');
 exit;
}


$q = 'INSERT INTO pokemon(nom,pv,attaque,defense,vitesse,image) VALUES(:val1, :val2, :val3, :val4, :val5, :val6)';
$req = $bdd-> prepare($q);
$req->excute([
   'val1' => $nom ,
   'val2' => $pv ,
   'val3' => $attaque,
   'val4' => $defense,
   'val5' => $vitesse,
   'val6' => $image
   ]);
   exit;
?>