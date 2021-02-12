<!doctype html>
<html lang="fr">
<head>
  <title>Liste des contacts</title>
  <link rel="stylesheet" href="style.css" />
</head>

<?php
        include 'includes/nav.php';
    ?>

<?php

$sql = "SELECT * FROM contact WHERE id=?";

$req = $cnx->prepare($sql);

$req->bindValue(1, $_GET['id']);

$req->execute();

?>

<?php     
    $rep = $req->fetch() ;
?>

<body>

	<h1>Modifier Contact :</h1>
	<p>
	<form action="modifier.php?id=<?php echo $_GET['id']; ?>" method="post">
		<fieldset>
			<legend>Généralités</legend>
			<label for='nom'>Nom*</label>
			<input type="text" name="nom" value='<?php echo $rep['nom']; ?>' required/><br/>
			<label for='prenom'>Prénom*</label>
			<input type="text" name="prenom" value='<?php echo $rep['prenom']; ?>' required/><br/>
		</fieldset>
		<fieldset>
			<legend>Adresse</legend>
			<label for='rue'>Rue*</label>
			<input type="text" name="rue" value='<?php echo $rep['rue']; ?>' required/><br/>
			<label for='cp'>Code postal*</label>
			<input type="number" name="cp" value='<?php echo $rep['cp']; ?>' required/><br/>
			<label for='ville'>Ville*</label>
			<input type="text" name="ville" value='<?php echo $rep['ville']; ?>' required/><br/>
		</fieldset>
        <fieldset>
			<legend>Contact</legend>
			<label for='tel'>Tel</label>
			<input type="number" name="tel" value='<?php echo $rep['tel']; ?>' /><br/>
			<label for='mail'>Mail</label>
			<input type="text" name="mail" value='<?php echo $rep['mail']; ?>'/><br/>
		</fieldset>
		<br>
		<input type="submit" value="Modifier"/>
	</form>
	</p>

</body>
</html>