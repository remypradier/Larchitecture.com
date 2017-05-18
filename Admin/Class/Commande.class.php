<?php

require_once "Database.class.php";

class Commande
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
                  numero,
                  nom,
                  prenom,
                  adresse,
                  email,
                  quantite,
                  numero_commande,
                FROM
                 commande
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
                  numero,
                  nom,
                  prenom,
                  adresse,
                  email,
                  quantite,
                  numero_commande,
                FROM
                 commande";

        $requete = $this->bdd->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function insert($param)
    {
        $sql = "INSERT
                INTO
                  commande (numero, nom, prenom, adresse, email, quantite, numero_commande)
                VALUES(
                  :numero,
                  :nom,
                  :prenom,
                  :adresse,
                  :email,
                  :quantite,
                  :numero_commande,
                )";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'numero'       => $param['numero'],
            'nom'    => $param['nom'],
            'prenom'       => $param['prenom'],
            'adresse'  => $param['adresse'],
            'email'   => $param['email'],
            'quantite'        => $param['quantite'],
            'numero_commande' => $param['numero_commande']

        ));
    }

    public function update($param)
    {

        $sql = "UPDATE
                commande
              SET
                 numero     = :numero,
                 nom        = :nom,
                 prenom     = :prenom,
                 adresse        = :adresse,
                 email   = :email,
                 quantite    = :quantite,
                 numero_commande  = :numero_commande,
              WHERE
               id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id'        => $param['id'],
            'numero'        => $param['numero'],
            'nom'       => $param['nom'],
            'prenom'    => $param['prenom'],
            'adresse'       => $param['adresse'],
            'email'  => $param['email'],
            'quantite'   => $param['quantite'],
            'numero_commande' => $param['numero_commande']
        ));

    }

    public function delete($param)
    {
        $sql = "DELETE FROM 
                  commande
                WHERE
                  id = :id";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id' => $param
        ));
    }


}

