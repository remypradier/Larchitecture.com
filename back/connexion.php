<?php
session_start();

require_once "Class/Connexion.class.php";

if(isset($_POST) && count($_POST) > 0)
{
    if (isset($_POST['connexion_bouton']) && isset($_POST['pseudo']) && isset($_POST['pass']))
    {
        $connexion = new Connexion($_POST['pseudo'], $_POST['pass']);
        $verif = $connexion->verif();

        if ($verif == "ok")
        {
            if($connexion->session())
            {
                header("Location: listCategories.php");
            }
        }
    }
    else
    {
        echo "Il y à une erreur lors de la connexion";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
</head>
<body>
<header>
    <h1>Connexion</h1>
</header>

<main>
    <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
    <form action="" method="post">
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
                <td></td>
                <td><input type="submit"  name="connexion_bouton" class="input_text submit" value="Se Connecter" ></td>
            </tr>
        </table>
        <span><a href="inscription.php">M'inscrire</a></span>
    </form>
</main>
</body>
</html>
