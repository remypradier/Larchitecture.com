<?php

require_once "Class/Revue.class.php";
require_once "Class/Connexion.class.php";
require_once "Class/Session.class.php";

$session = new Session();
$stock = new Revue();
$session->sessionAuth();


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stock->insert($_POST);

    header("Location: revueAll.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Ajouter</h2>
    <h4><a href="revueAll.php">Liste</a></h4>
    <form action="" method="post">
        <input type="text" placeholder="Nom" name="nom">
        <input type="text" placeholder="Prenom" name="prenom">
        <input type="number" placeholder="Age" name="age">
        <input type="text" placeholder="Ville" name="ville">
        <input type="submit">
    </form>
<div>
    <?php
        echo 'Bienvenue : '.$_SESSION['pseudo']. '<a href="deconnexion.php">Déconnexion</a>';
    ?>
</div>

</body>
</html>