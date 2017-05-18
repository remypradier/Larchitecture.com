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
                  date,
                  architectes,
                  realisations,
                  rubrique,
                  lieu,
                  departement
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
                  date,
                  architectes,
                  realisations,
                  rubrique,
                  lieu,
                  departement
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
                  revue (date, architectes, realisations, rubrique, lieu, departement)
                VALUES(
                  :date,
                  :architectes,
                  :realisations,
                  :rubrique,
                  :lieu,
                  :departement
                )";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'date'          => $param['date'],
            'architectes'   => $param['architectes'],
            'realisations'  => $param['realisations'],
            'rubrique'      => $param['rubrique'],
            'lieu'          => $param['lieu'],
            'departement'   => $param['departement']
        ));
    }

    public function update($param)
    {

       $sql = "UPDATE
                revue
              SET
                 date         = :date,
                 architectes  = :architectes,
                 realisations = :realisations,
                 rubrique     = :rubrique,
                 lieu         = :lieu,
                 departement  = :departement
              WHERE
               id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id'       => $param['id'],
            'date'          => $param['date'],
            'architectes'   => $param['architectes'],
            'realisations'  => $param['realisations'],
            'rubrique'      => $param['rubrique'],
            'lieu'          => $param['lieu'],
            'departement'   => $param['departement']
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