<?php

require('dbconnect.php');
$req = "select * from user_tab";
$reponse = $bdd->query($req);
$users = $reponse->fetchAll(PDO::FETCH_OBJ);
$a = false;
foreach ($users as $user){
    if ($_POST['username']==$user->username || $_POST['email']==$user->email){
        $a = true;
    }
}
if ($a){
    $_SESSION['user'] = 'Anonyme';
    $_SESSION['auth'] = false;
    header('location:register.php');
}
else{

    $req = $bdd->prepare('INSERT INTO user_tab(username, email, password)
                        VALUES(:username, :email, :password)');
    $req->execute(array(
	'username' => $_POST['username'],
	'email' => $_POST['email'],
    'password' => $_POST['psw'],
	));
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['auth'] = true;
    header('location:../index.php');
}



?>