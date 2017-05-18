<?php

require_once "connect.php";
require_once "functions.php";
$user_id = $_GET['id'];
$token = $_GET['token'];
$sql = "SELECT
            `email`,
            `confirmation_token`
        FROM users 
        WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($user_id));
$tab = $stmt->fetch();

?>

<h2 class="emailconf_title">Confirmez vous votre email : <?= $tab['email']; ?> ?</h2>
<div class="confirm_mail">
    <a class="confirm_mail_response" href="<?='confirm.php?id='.$user_id.'&token='.$token;?>">OUI</a>
    <a class="confirm_mail_response" href="Inscription.php">NON</a>
</div>
