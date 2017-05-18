<?php
/**
 * Created by PhpStorm.
 * User: lucaslecot
 * Date: 17/05/2017
 * Time: 15:51
 */

require_once "Class/Revue.class.php";

$stock = new Revue();

$stock->delete($_GET['id']);

header("Location: revueAll.php");