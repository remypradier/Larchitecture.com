<?php
/**
 * Created by PhpStorm.
 * User: lucaslecot
 * Date: 17/05/2017
 * Time: 15:51
 */

require_once "../Class/Utilisateur.class.php";

$stock = new Utilisateur();

$stock->delete($_GET['id']);

header("Location: listUtilisateurs.php");