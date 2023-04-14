<?php
$conn=new mysqli("localhost","root","","roffy");
$id=$_POST['id'];
$cart =isset($_COOKIE["cart"])? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
$result = mysqli_query($conn,"SELECT * FROM  homepage WHERE id=$id");
$product = mysqli_fetch_object($result);
array_push($cart,array(
    "product" => $product
));
setcookie("cart", json_encode($cart));
header("location:new.php")
?>