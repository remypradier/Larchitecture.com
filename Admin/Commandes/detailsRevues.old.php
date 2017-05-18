<?php
/**
 * Created by PhpStorm.
 * User: lucaslecot
 * Date: 17/05/2017
 * Time: 15:23
 */
require_once "../Class/Revue.class.php";
require_once "../Class/Session.class.php";

$session = new Session();
$stock = new Revue();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stock->update($_POST);

    header("Location: listRevues.old.php");
}

$affiche = $stock->select($_GET['id']);
$session->sessionAuth();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>Modifier</h2>
<p><a href="../listRevues.old.php">< Retour</a></p>
<form action="" method="post">
    <p>
        <label for="">
            <input type="hidden" value="<?= $affiche['id'] ?>" name="id">
        </label>
    </p>

    <p>
        <label for="">
            <input type="text" value="<?= $affiche['nom'] ?>" name="nom">
        </label>
    </p>

    <p>
        <label for="">
            <input type="text" value="<?= $affiche['prenom'] ?>" name="prenom">
        </label>
    </p>

    <p>
        <label for="">
            <input type="number" value="<?= $affiche['age'] ?>" name="age">
        </label>
    </p>

    <p>
        <label for="">
            <input type="text" value="<?= $affiche['ville'] ?>" name="ville">
        </label>
    </p>

    <p>
        <label for="">
            <input type="submit" value="Modifier">
        </label>
    </p>
</form>

</body>
</html>
