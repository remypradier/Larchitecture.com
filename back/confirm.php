<?php

require_once "connect.php";

$user_id = $_GET['id'];
$token = $_GET['token'];
$sql = "SELECT id, nom, prenom, email, adresse, confirmation_token FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($user_id));
$user = $stmt->fetch();

if($user && $user['confirmation_token'] == $token) {
    session_start();
    $sql = "UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ?";
    $stmt = $pdo->prepare($sql)->execute(array($user_id));
    $_SESSION['auth'] = $user;
    header('Location: compte.php');
} else {
    $_SESSION['flash']['danger'] = "Ce Token n'est plus valide";
    header("Location: index.php");
}