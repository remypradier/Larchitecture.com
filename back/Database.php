<?php

/**
 * Class Database
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 */

class Database
{
    private static $pdo = null;
    /**
     * @return \PDO $pdo
     */
    public static function getPdo()
    {
        if(is_null(self::$pdo)){
            try{
                self::$pdo = new \PDO('mysql:host=localhost;dbname=larchitecture','root', 'root');
                self::$pdo->exec("SET NAMES UTF8;");
            } catch(\PDOException $exception) {
                die("ERROR.");
            }
        }
        return self::$pdo;
    }
}