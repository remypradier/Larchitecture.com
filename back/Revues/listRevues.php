<?php
/**
 * Created by PhpStorm.
 * User: lucaslecot
 * Date: 17/05/2017
 * Time: 14:05
 */

require_once "../Class/Revue.class.php";

$stock = new Revue();

$afficheAll = $stock->selectAll();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><a href="../listCategories.php"><strong>Retour</strong></a></p>
<p><a href="addRevues.php">Ajouter</a></p>
<table>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Age</td>
        <td>Ville</td>
    </tr>

    <?php foreach ($afficheAll as $affichage) : ?>
        <tr>
            <td><?= $affichage['id'] ?></td>
            <td><?= $affichage['nom'] ?></td>
            <td><?= $affichage['prenom'] ?></td>
            <td><?= $affichage['age'] ?></td>
            <td><?= $affichage['ville'] ?></td>
            <td><a href="detailsRevues.php?id=<?= $affichage['id'] ?>">Modifier</a></td>
            <td><a href="deleteRevues.php?id=<?= $affichage['id'] ?>">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>

</table>


</body>
</html>
