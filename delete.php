<?php
$id=$_POST['id'];
$cart = isset($_COOKIE['cart'])? $_COOKIE['cart'] : "[]";
$cart = json_decode($cart);
//print_r($cart);
$new_cart =array();
foreach ($cart as $key ) {
    # code... 
    if ($cart[0]->product->id == $id) {
        # code...
        echo $cart[0]->product->id;
array_pop($cart)
        //array_push($new_cart,$key);
if($enter){
    echo"fully enter";
}else{
    echo"not enter";
}

    }
}

//setcookie("cart",json_encode($new_cart));
//header("location:chart1.php");
?>