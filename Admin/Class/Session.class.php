<?php

class Session
{

    public function __construct()
    {
        //session_start();
        return $this;
    }

    public function sessionAuth()
    {
        if(!isset($_SESSION['pseudo']))
        {
            header("Location: connexion.php");
        }
    }

}