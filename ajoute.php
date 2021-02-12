<?php
        include 'includes/nav.php';
?>

<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];



$req = $cnx->prepare('INSERT INTO contact(nom, prenom, rue, cp,
ville, tel, mail) VALUES(?, ?, ?, ?, ?, ?, ?)');
$req->bindValue(1,$nom);
$req->bindValue(2,$prenom);
$req->bindValue(3,$rue);
$req->bindValue(4,$cp);
$req->bindValue(5,$ville);
$req->bindValue(6,$tel);
$req->bindValue(7,$mail);
$rep = $req->execute();
if ($rep==true) {
echo 'Le contact a bien été ajouté !';
}

header('location: affichage.php');
?>