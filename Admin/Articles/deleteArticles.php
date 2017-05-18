<?php
/**
 * Created by PhpStorm.
 * User: lucaslecot
 * Date: 17/05/2017
 * Time: 15:51
 */

require_once "../Class/Article.class.php";

$stock = new Article();

$stock->delete($_GET['id']);

header("Location: listArticles.php");