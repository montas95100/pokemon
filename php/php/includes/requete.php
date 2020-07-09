<?php

function Insert($table, $tab){
    $lenght = count($tab);
    $tabkey =array_keys($tab);
    $bdd = new PDO ('mysql:host=localhost:3308;dbname=coworking', 'root', 'root');
    $q = "INSERT INTO " . $table. "(";
    for($x=0;$x<$lenght-1;$x++){
        $q.= $tabkey[$x] . ",";

    }
    $q .=$tabkey[$x] .") VALUES('";
    $virgule = implode("','", $tab);
    $q.= $virgule . "')";
    $send = $bdd->query($q);
}

?>