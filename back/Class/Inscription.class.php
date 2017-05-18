<?php

require_once "Database.class.php";

class Inscription
{
    private $pseudo;
    private $pass;
    private $confirme_pass;
    private $email;
    private $bdd;

    //On initialise le construct
    public function __construct($pseudo, $pass, $confirme_pass, $email)
    {
        // htmlentities convertit les caractères spéciaux en entités HTML pour la sécurité
        $pseudo = htmlentities($pseudo);
        $email  = htmlentities($email);

        // le this est un pointeur
        $this->setPseudo($pseudo);
        $this->setPass($pass);
        $this->setConfirmePass($confirme_pass);
        $this->setEmail($email);
        $this->bdd = Database::getPdo();
    }

    //on fait une fonction pour faire les verif
    public function verif()
    {
        $sql = "SELECT `email` FROM `users` WHERE `email` = :email";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'email' => $this->email
        ));

        $reponse = $requete->fetch();

        if($reponse != null)
        {
            return "L'adresse e-mail est déjà prise";
        }
        //avec strlen on calcul la taille de la string et avec la condition on lui demande que le pseudo soit entre 5 et 20 caractère
        if(strlen($this->pseudo) >= 5 && strlen($this->pseudo) <= 20)
        {
            $syntaxe = "#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#";

            //le preg_match effectue une recherche de correspondance
            if(preg_match($syntaxe,$this->email))
            {

                if($this->pass == $this->confirme_pass)
                {
                    return 'Votre compte viens d être créé';
                }
                else
                {
                    return "Le mot de passe doit être identique à la confirmation";
                }
            }
        }
        else
        {
            return "Le pseudo n'est pas conforme il doit contenir au moins 5 caractère";
        }

    }


    public function enregistrement()
    {

        $sql =  "INSERT INTO 
                     users(pseudo, pass, confirme_pass, email) 
                     VALUES (:pseudo, :pass, :confirme_pass, :email)";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'pseudo'        => $this->pseudo,
            'pass'          => $this->pass,
            'confirme_pass' => $this->confirme_pass,
            'email'         => $this->email
        ));

        return 1;
    }

    public function session()
    {
        $sql = "SELECT id FROM users WHERE pseudo = :pseudo ";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array('pseudo'=> $this->pseudo));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['pseudo'] = $this->pseudo;

        return 1;
    }

//===========================getter et setter===================================

    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    // le getter sert à retourné une valeur
    public function getPass(){
        return $this->pass;
    }
    // le setter sert à charger la valeur dans la class
    public function setPass($pass){
        $this->pass = sha1($pass);
    }

    public function getConfirmePass()
    {
        return $this->confirme_pass;
    }

    public function setConfirmePass($confirme_pass)
    {
        $this->confirme_pass = sha1($confirme_pass);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

