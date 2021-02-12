<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>

<?php
include'includes/nav.php';
?>

<body>
	<h1>Rechercher un Contact :</h1>
	<p>
	<form action="resultat.php" method="post">
		<fieldset>
			<legend>Généralités</legend>
			<label for='nom'>Nom</label>
			<input type="text" name="nom"/><br/>
			<label for='prenom'>Prénom</label>
			<input type="text" name="prenom"/><br/>
		</fieldset>
		<fieldset>
			<legend>Adresse</legend>
			<label for='rue'>Rue</label>
			<input type="text" name="rue"/><br/>
			<label for='cp'>Code postal</label>
			<input type="number" name="cp"/><br/>
			<label for='ville'>Ville</label>
			<input type="text" name="ville"/><br/>
		</fieldset>
		<br>
		<input type="submit" value="rechercher"/>
	</form>
	</p>
</body>
</html>