<?php

require('dbconnect.php');
$req = $bdd->prepare('INSERT INTO contact(idC, email, message)
                        VALUES(:name, :email, :message)');
$req->execute(array(
    'name' => $_POST['name'],
	'email' => $_POST['email'],
    'message' => $_POST['message'],
));
header('location:../index.php');



?>