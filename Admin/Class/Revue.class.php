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
                  titre,
                  numero,
                  pdf,
                  date,
                  img
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
                  titre,
                  numero,
                  pdf,
                  date,
                  img
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
                  revue (titre, numero, pdf, date, img)
                VALUES(
                  :titre,
                  :numero,
                  :pdf,
                  :date,
                  :img
                )";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'titre'      => $param['titre'],
            'numero'   => $param['numero'],
            'pdf'      => $param['pdf'],
            'date'    => $param['date'],
            'img'    => $param['img']
        ));
    }

    public function update($param)
    {

       $sql = "UPDATE
                revue
              SET
                 titre= :titre,
                 numero = :numero,
                 pdf = :pdf,
                 date = :date,
                 img = :img
              WHERE
               id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id'       => $param['id'],
            'titre'      => $param['titre'],
            'numero'   => $param['numero'],
            'pdf'      => $param['pdf'],
            'date'    => $param['date'],
            'img'    => $param['img']
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