<?php
/**
 * Created by PhpStorm.
 * User: lucaslecot
 * Date: 17/05/2017
 * Time: 15:51
 */

require_once "../Class/Commande.class.php";

$stock = new Commande();

$stock->delete($_GET['id']);

header("Location: listCommandes.php");