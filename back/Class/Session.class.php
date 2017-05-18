<?php

/**
 * Created by PhpStorm.
 * User: lucaslecot
 * Date: 18/05/2017
 * Time: 09:42
 */
class Session
{

    public function __construct()
    {
        session_start();
        return $this;
    }

    public function sessionAuth()
    {
        if(!isset($_SESSION['pseudo']))
        {
            header("Location: Connexion.php");
        }
    }

}