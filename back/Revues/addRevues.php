<?php

require_once "../Class/Revue.class.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stock->insert($_POST);

    header("Location: listRevues.php");
}

$stock = new Revue();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Ajouter</h2>
    <p><a href="listRevues.php"><strong>Retour</strong></a></p>
    <p><a href="listRevues.php">Liste</a></p>
    <form action="" method="post">
        <input type="text" placeholder="Nom" name="nom">
        <input type="text" placeholder="Prenom" name="prenom">
        <input type="number" placeholder="Age" name="age">
        <input type="text" placeholder="Ville" name="ville">
        <input type="submit">
    </form>
<div>

</div>

</body>
</html>