<?php

require_once "Database.class.php";

class Utilisateur
{
    private $bdd;

    /**
     * Revue.class constructor.
     * @param $bdd
     */
    public function __construct()
    {
        $this->bdd = Database::getPdo();
    }

    public function select($param)
    {
        $sql = "SELECT
                  id,
                  nom,
                  prenom,
                  age,
                  fonction,
                  adresse,
                  cp,
                  telephone,
                  email
                FROM
                 utilisateur
                WHERE
                id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id' => $param
        ));
       return $requete->fetch();
    }

    public function selectAll()
    {
        $sql = "SELECT
                  id,
                  nom,
                  prenom,
                  age,
                  fonction,
                  adresse,
                  cp,
                  telephone,
                  email
                FROM
                 utilisateur";

        $requete = $this->bdd->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function insert($param)
    {
        $sql = "INSERT
                INTO
                  utilisateur (nom, prenom, age, fonction, adresse, cp, telephone, email)
                VALUES(
                  :nom,
                  :prenom,
                  :age,
                  :fonction,
                  :adresse,
                  :cp,
                  :telephone,
                  :email
                )";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'nom'       => $param['nom'],
            'prenom'    => $param['prenom'],
            'age'       => $param['age'],
            'fonction'  => $param['fonction'],
            'adresse'   => $param['adresse'],
            'cp'        => $param['cp'],
            'telephone' => $param['telephone'],
            'email'     => $param['email']

        ));
    }

    public function update($param)
    {

       $sql = "UPDATE
                utilisateur
              SET
                 nom        = :nom,
                 prenom     = :prenom,
                 age        = :age,
                 fonction   = :fonction,
                 adresse    = :adresse,
                 cp         = :cp,
                 telephone  = :telephone,
                 email      = :email
              WHERE
               id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id'        => $param['id'],
            'nom'       => $param['nom'],
            'prenom'    => $param['prenom'],
            'age'       => $param['age'],
            'fonction'  => $param['fonction'],
            'adresse'   => $param['adresse'],
            'cp'        => $param['cp'],
            'telephone' => $param['telephone'],
            'email'     => $param['email']
        ));

    }

    public function delete($param)
    {
        $sql = "DELETE FROM 
                  utilisateur
                WHERE
                  id = :id";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id' => $param
        ));
    }


}

