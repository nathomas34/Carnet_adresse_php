<?php
        include 'includes/nav.php';
?>

<?php

$cnx = new PDO($bdd, $user, $mdp);

$id = $_GET['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];


$req = $cnx->prepare('UPDATE contact SET nom=?, prenom=?, rue=?, cp=?,
ville=?, tel=?, mail=? WHERE id=? ');
$req->bindValue(1,$nom);
$req->bindValue(2,$prenom);
$req->bindValue(3,$rue);
$req->bindValue(4,$cp);
$req->bindValue(5,$ville);
$req->bindValue(6,$tel);
$req->bindValue(7,$mail);
$req->bindValue(8,$id);
$reponse = $req->execute();
if ($reponse) {
echo 'Le contact a bien été modifié !';
}

header('location: affichage.php');
?>
