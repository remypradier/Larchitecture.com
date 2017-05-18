<?php

require_once "Class/Connexion.class.php";
require_once "Class/Session.class.php";

$session = new Session();
$session->sessionAuth();

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

<h1>Bienvenue <?= $_SESSION['pseudo'] ?></h1>


<a href="Revues/listRevues.php">Revues</a>
<a href="Commandes/listCommandes.php">Commandes</a>
<a href="deconnexion.php">Déconnexion</a>

</body>
</html>
