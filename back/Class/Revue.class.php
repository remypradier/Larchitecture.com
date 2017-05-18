<?php

require_once "Database.class.php";

class Revue
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
                  ville
                FROM
                 revue
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
                  ville
                FROM
                 revue";

        $requete = $this->bdd->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function insert($param)
    {
        $sql = "INSERT
                INTO
                  revue (nom, prenom, age, ville)
                VALUES(
                  :nom,
                  :prenom,
                  :age,
                  :ville
                )";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'nom'      => $param['nom'],
            'prenom'   => $param['prenom'],
            'age'      => $param['age'],
            'ville'    => $param['ville'],
        ));
    }

    public function update($param)
    {

       $sql = "UPDATE
                revue
              SET
                 nom = :nom,
                 prenom = :prenom,
                 age = :age,
                 ville = :ville
              WHERE
               id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id'       => $param['id'],
            'nom'      => $param['nom'],
            'prenom'   => $param['prenom'],
            'age'      => $param['age'],
            'ville'    => $param['ville']
        ));

    }

    public function delete($param)
    {
        $sql = "DELETE FROM 
                  revue
                WHERE
                  id = :id";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id' => $param
        ));
    }


}