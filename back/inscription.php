<?php

require_once "Class/Inscription.class.php";
require_once "Class/Database.class.php";

if (isset($_POST['pseudo']) && isset($_POST['pass']) && isset($_POST['confirme_pass']) && isset($_POST['email']))
{
    //on initialise la class
    $inscription = new Inscription($_POST['pseudo'], $_POST['pass'], $_POST['confirme_pass'], $_POST['email']);
    $verif       = $inscription->verif();
    if($verif == "Votre compte viens d être créé")
    {
        if($inscription->enregistrement())
        {
            if($inscription->session())
            {
                header("Location: listCategories.php");
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
<header>
    <h1>Inscription</h1>
</header>

<main>
    <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
    <form action="inscription.php" method="post">
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo" placeholder="Pseudo" class="input_text" required></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" placeholder="Mot de passe" name="pass" class="input_text" required></td>
            </tr>
            <tr>
                <td>Confirmation du mot de passe</td>
                <td><input type="password" placeholder="Confirmation du mot de passe" name="confirme_pass" class="input_text" required></td>
            </tr>
            <tr>
                <td>Mail</td>
                <td><input type="email" placeholder="E-mail" name="email" class="input_text" required></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit"  name="inscription_bouton" class="input_text submit" value="Inscription"></td>
            </tr>
        </table>
        <span><a href="connexion.php">J'ai déjà un compte</a></span>

    </form>

</main>
</body>
</html>