<?php
require('dbconnect.php');

$_SESSION['user'] = 'Anonyme';
$_SESSION['auth'] = false;


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>