<?php

if(!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {
    require_once "connect.php";
    require_once "functions.php";
    $sql = "SELECT
                `id`,
                `nom`,
                `prenom`,
                `email`,
                `adresse`,
                `password`,
                `confirmed_at`
            FROM users 
            WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->execute(array(
            'email' => $_POST['email']
    ));
    $user = $stmt->fetch();

    if(password_verify($_POST['password'], $user['password'])) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
//        $token == $user['confirmation_token'];
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Vous êtes maintenant connecté.";
        header("Location: compte.php");
        exit();
    } else {
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrect.";
    }
}


require_once 'connect.php';
require_once "functions.php";
?>

    <h2>Connexion</h2>
    <div>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email">

            <label for="password">Mot de passe</label>
            <input type="password" name="password">

            <input type="submit" value="Se connecter">
            <a href="Inscription.php">Inscrivez-vous !</a>
        </form>
    </div>
<?php
//require_once "footer.php";