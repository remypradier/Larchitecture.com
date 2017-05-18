<?php

function debug($variable)
{
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_rand($length)
{
    $alphabet = "1234567890AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

function not_log() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "Cette espace est privé";
        header("Location: index.php");
        exit();
    }
}