<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>

<?php
include'includes/nav.php';
?>

<br>

<?php

$bdd = "mysql:host=localhost:3308;dbname=carnetadresse;charset=utf8";
$user = "root";
$mdp = "";

$cnx = new PDO( $bdd, $user, $mdp);

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];


$req = $cnx->prepare("SELECT * FROM contact WHERE nom LIKE ? AND prenom LIKE ? AND rue LIKE ? AND cp LIKE ? AND ville LIKE ? ");
$req->bindValue(1,"%" .$_POST['nom']. "%");
$req->bindValue(2,"%" .$_POST['prenom']. "%");
$req->bindValue(3,"%" .$_POST['rue']. "%");
$req->bindValue(4,"%" .$_POST['cp']. "%");
$req->bindValue(5,"%" .$_POST['ville']. "%");
$req->execute();

?>

<div class="container">
    <table class="table" border="1" align="center" width="100%">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Rue</th>
            <th>Code Postale</th>
            <th>Ville</th>

        </tr>
        
        <?php 
        


         while ($rep = $req->fetch()) {

        ?>
            <tr>
                <td><?php echo $rep['id']; ?></td>
                <td><?php echo $rep['nom']; ?></td>
                <td><?php echo $rep['prenom']; ?></td>
                <td><?php echo $rep['rue']; ?></td>
                <td><?php echo $rep['cp']; ?></td>
                <td><?php echo $rep['ville']; ?></td>
                </td>
            </tr>
            <?php    
        }
        $req->closeCursor(); 
    ?>
    </table>
</div>

</body>
</html>