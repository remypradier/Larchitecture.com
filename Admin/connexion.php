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
                header("Location: Revues/listRevues.php");
            }
        }
    }
    else
    {
        echo "Il y à une erreur lors de la connexion";
    }
}

require_once "head.php"; ?>
<div class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 conection">
        <h4 class="col-lg-12 col-md-12 col-xs-12 text-center">Se connecter</h4>
        <form action="" method="post">
            <input type="text" name="pseudo" placeholder="Identifiant" class="col-lg-12 col-md-12 col-xs-12">
            <input type="password" name="pass" placeholder="Mot de passe" class="col-lg-12 col-md-12 col-xs-12">
<!--            <a href="" class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-xs-6 col-xs-offset-6">Mot de passe oublié ?</a>-->
            <input type="submit" name="connexion_bouton" value="Connexion" class="col-lg-3 col-lg-offset-9 col-md-3 col-md-offset-9 col-xs-3 col-xs-offset-9 submit">
        </form>
    </div>
</div>
<?php require_once "foot.php"; ?>