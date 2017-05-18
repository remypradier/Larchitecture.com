<?php
session_start();
require_once 'connect.php';
require_once "functions.php";

$sql = "SELECT
                *
            FROM `users` 
            WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
'email'     => $_POST['email'],
));
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$date=date_create($_SESSION['auth']['confirmed_at']);
?>
<main class="Account-main clearfix">
    <h2 class="Title">Mon compte</h2>
    <div class="Infos">
        <h3>Coordonnées</h3>
        <p>Nom: <?= $_SESSION['auth']['nom'] ?></p>
        <p>Adresse mail: <?= $_SESSION['auth']['email'] ?></p>
        <p>Date d'inscription: <?= date_format($date,"d/m/Y") ?></p>
    </div>
</main>