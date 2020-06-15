<?php
require('../resources/dbconnect.php');
//action.php


if(isset($_POST["action"]))
{
 if($_POST["action"] == "add")
 {
  $product_id = $_POST["product_id"];
  $product_name = $_POST["product_name"];
  $product_price = $_POST["product_price"];
  for($count = 0; $count < count($product_id); $count++)
  {
   $cart_product_id = array_keys($_SESSION["shopping_cart"]);
   if(in_array($product_id[$count], $cart_product_id))
   {
    $_SESSION["shopping_cart"][$product_id[$count]]['product_quantity']++;
    
   }
   else
   {
    $item_array = array(
     'product_id'               =>     $product_id[$count],  
     'product_name'             =>     $product_name[$count],
     'product_price'            =>     $product_price[$count],
     'product_quantity'         =>     1
    );

    $_SESSION["shopping_cart"][$product_id[$count]] = $item_array;
    

    
   }
  }
 }

 if($_POST["action"] == 'remove')
 {
  foreach($_SESSION["shopping_cart"] as $keys => $values)
  {
   if($values["product_id"] == $_POST["product_id"])
   {
    unset($_SESSION["shopping_cart"][$keys]);
   }
  }
 }
 if($_POST["action"] == 'empty')
 {
  unset($_SESSION["shopping_cart"]);
 }

 if($_POST["action"] == 'cmd')
 {
     $i = 0;


     $req = $bdd->prepare('INSERT INTO cmd(idU)
                        VALUES(:idU)');
    $req->execute(array(
	'idU' => $_SESSION["user"]
    ));
    echo '*********************************';
    $req = "select id_c from cmd";
    $reponse = $bdd->query($req);
    $id = $reponse->fetchAll(PDO::FETCH_OBJ);
    $a = count($id) - 1;
    echo ($id[$a]->id_c);
    $b = $id[$a]->id_c;

    $req = "select * from user_tab";
    $reponse = $bdd->query($req);
    $users = $reponse->fetchAll(PDO::FETCH_OBJ);
    
    // foreach ($users as $user){
    //     if ($_SESSION["user"]==$user->login && $_POST['password']==$user->password){
    //         $a = true;
    //         if ($user->role == 'admin'){
    //             $admin = true;
    //         }
    //     }
    // }

  foreach($_SESSION["shopping_cart"] as $keys => $values)
  {
      $i++;
    echo $values["product_id"];
    echo $values["product_quantity"];
    echo $_SESSION["user"];
    echo $i;

    
    
    $req = "select max(id_c) from cmd";
    $reponse = $bdd->query($req);
    $id = $reponse->fetchAll(PDO::FETCH_OBJ);


    $req = $bdd->prepare('INSERT INTO ordp(idU, idP, qte, id_c)
                        VALUES(:idU, :idP, :qte, :id_c)');
    $req->execute(array(
	'idU' => $_SESSION["user"],
	'idP' => $values["product_id"],
    'qte' => $values["product_quantity"],
    'id_c' => $b
    
	));
  }
 }
}





?>
