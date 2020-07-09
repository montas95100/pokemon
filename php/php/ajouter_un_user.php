<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
	<title>Ajouter un pokemon</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="../../css/stylesheet-pokemon.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php include('includes/header.php');?>
    <h1>Ajouter un pokemon</h1>
	<form action="verification_ajouter_un_pokemon.php" method="post" enctype="multipart/form-data"> 
	   <div>
        <input type="text" name="nom" placeholder="Nom"><br>
        <input type="text" name="nV" placeholder="PV"><br>
        <input type="text" name="attaque" placeholder="Attaque"><br>
        <input type="text" name="défense" placeholder="Défense"><br>
        <input type="text" name="vitesse" placeholder="Vitesse"><br>
        <input type="file" name="photo" id="fileUpload"></br>
        <input type="submit" value="ajouter" >
       </div>



	</form>

</body>
</html>