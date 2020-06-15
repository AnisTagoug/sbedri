<?php
require('dbconnect.php');
$req = "select * from user_tab";
$reponse = $bdd->query($req);
$users = $reponse->fetchAll(PDO::FETCH_OBJ);
$a = false;
foreach ($users as $user){
    if ($_POST['username']==$user->username && $_POST['psw']==$user->password){
        $a = true;
    }
}
if ($a){

    $_SESSION['user'] = $_POST['username'];
    $_SESSION['auth'] = true;
 
}
else{
    $_SESSION['user'] = 'Anonyme';
    $_SESSION['auth'] = false;

}
header('location:../index.php');





?>