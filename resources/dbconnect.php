<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = false;
}

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = 'Anonyme';
}





try {
    $bdd = new PDO('mysql:host=localhost;dbname=sbedri;', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
