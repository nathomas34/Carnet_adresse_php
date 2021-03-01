<?php

$bdd = "mysql:host=localhost:3308;dbname=carnetadresse;charset=utf8";
$user = "root";
$mdp = "";

$cnx = new PDO( $bdd, $user, $mdp);

?>


<nav id="nav-3">
  <a class="link-3" href="index.php">Acceuil</a>
  <a class="link-3" href="formulaire.php">Ajouter</a>
  <a class="link-3" href="recherche.php">Rechercher</a>
  <a class="link-3" href="affichage.php">List Contact</a>
</nav>