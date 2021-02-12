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
$req = $cnx->prepare("DELETE FROM contact WHERE id=?");
$req->bindValue(1,$_GET['id']);
$reponse = $req->execute();
if ($reponse) {
echo 'Le contact '.$reponse.' a bien été supprimé !';
}

header('location: affichage.php');
?>

</body>
</html>