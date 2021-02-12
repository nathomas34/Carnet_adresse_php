<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>

<?php
include'includes/nav.php';
?>

<body>
	<h1>Ajouter un nouveau Contact :</h1>
	<p>
	<form action="ajoute.php" method="post">
		<fieldset>
			<legend>Généralités</legend>
			<label for='nom'>Nom*</label>
			<input type="text" name="nom" required/><br/>
			<label for='prenom'>Prénom*</label>
			<input type="text" name="prenom" required/><br/>
		</fieldset>
		<fieldset>
			<legend>Adresse</legend>
			<label for='rue'>Rue*</label>
			<input type="text" name="rue" required/><br/>
			<label for='cp'>Code postal*</label>
			<input type="number" name="cp" required/><br/>
			<label for='ville'>Ville*</label>
			<input type="text" name="ville" required/><br/>
		</fieldset>
        <fieldset>
			<legend>Contact</legend>
			<label for='tel'>Tel</label>
			<input type="number" name="tel"/><br/>
			<label for='mail'>Mail</label>
			<input type="text" name="mail"/><br/>
		</fieldset>
		<br>
		<input type="submit" value="Ajouter"/>
	</form>
	</p>
</body>
</html>