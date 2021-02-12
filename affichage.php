<!doctype html>
<html lang="fr">
<head>
  <title>Liste des contacts</title>
  <link rel="stylesheet" href="style.css" />
</head>

<?php
include 'includes/nav.php';
?>
<body>
<br>
<?php
$sql = "SELECT * FROM contact";

$req = $cnx->prepare($sql);

$req->execute();

?>

<div class="container">
    <table class="table" border="1" align="center" width="100%">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Rue</th>
            <th>Code Postale</th>
            <th>Ville</th>
            <th>Tel</th>
            <th>@Mail</th>
        </tr>
        <?php 
        
        while ($rep = $req->fetch()) {
        ?>
            <tr>
                <td><?php echo $rep['nom']; ?></td>
                <td><?php echo $rep['prenom']; ?></td>
                <td><?php echo $rep['rue']; ?></td>
                <td><?php echo $rep['cp']; ?></td>
                <td><?php echo $rep['ville']; ?></td>
                <td><?php echo $rep['tel']; ?></td>
                <td><?php echo $rep['mail']; ?></td>
                <td><a href="modification.php?id=<?php echo $rep['id']; ?>"> Modifier </a>
                </td>
                <td>
                    <a href="supprimer.php?id=<?php echo $rep['id']; ?>"> supprimer </a>
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