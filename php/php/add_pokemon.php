<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/stylesheet-pokemon.css" type="text/css" rel="stylesheet">
    <title>Pokedex 1i1</title>
</head>
<body>
<?php include('includes/header.php');?>
<main> 
    <h1 class="headertext">Formulaire d'Inscription</h1>
    <form method="POST" action="includes/connexion_check.php" enctype="multipart/form-data">
        <div>   
        <input type="text" name="pseudo" placeholder="Pseudo">
        <br>
        <input type="password" name="password" placeholder="Mot de passe">
        <br>
        <input type="password" name="Verifpassword" placeholder="Vérification Mot de Passe">
        <br>
        <input type="mail" name="email" placeholder="email">
        <br>
        <label>Image de profil :</label>
        <input class="image" type="file" name="image">
        <br>
        <input type="submit" value="Envoyer">
        </div>
    </form>
</main>
<?php include('includes/footer.php'); ?>
</body>
</html>
