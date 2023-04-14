<?php
  $id=$_POST['id'];
  $qunty=$_POST['qunty'];
  $cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "[]";
  $cart= json_decode($cart);
  if( var_dump($cart)===string){
    echo "i am a string";
  }else{
    echo "i am not a string";
  }
  print_r($cart);
  foreach ($cart as $key) {
    # code...
    
    
    if ($key->id == $id) {
      # code...
      $key->quantity=$qunty;
    }
  }
  setcookie("cart",json_encode($cart));
   header("location:chart1.php");
?>