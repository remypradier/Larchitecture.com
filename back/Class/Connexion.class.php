<?php

require_once "Database.class.php";

class Connexion
{

    //attribut privée
    private $pseudo;
    private $pass;
    private $bdd;

    public function __construct($pseudo, $pass)
    {
        $this->setPseudo($pseudo);
        $this->setPass($pass);
        $this->bdd = Database::getPdo();
    }

    public function verif()
    {
        $requete = $this->bdd->prepare("SELECT pseudo, pass FROM users WHERE pseudo = :pseudo");
        $requete->execute(['pseudo' => $this->pseudo]);
        $reponse= $requete->fetch();

        if($reponse)
        {
            if(sha1($_POST['pass']) === $reponse['pass'])
            {
                return "ok";
            }
            else
            {
                return "Le Mot de passe est incorrecte";
            }
        }
        else
        {
            return "Le pseudo est inexistant";
        }
    }

    public function session()
    {
        $requete = $this->bdd->prepare("SELECT id FROM users WHERE pseudo = :pseudo");
        $requete->execute(['pseudo'=> $this->pseudo]);
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['pseudo'] = $this->pseudo;

        return 1;
    }

    /*===============================getter et setter================================*/
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }
}