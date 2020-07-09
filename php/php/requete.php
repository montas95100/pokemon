<?php

function pokemonMine(){
    $q = 'SELECT pokemon.nom, pokemon.pv, pokemon.attaque, pokemon.defense, pokemon.vitesse, pokemon.image FROM pokemon';
    $q.=' Where id_user=:id_user';
    $prepare = ['id_user'=>$_SESSION['id']];
    $bdd =  new PDO('mysql:host=localhost:3308;dbname=pokedex','root','root');
    $stmt = $bdd->prepare($q);
    $data = $stmt->execute($prepare);
    $data = $stmt->fetchALL();
    return $data;
}

?>