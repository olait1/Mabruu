<?php
session_start();
//print_r($_SESSION['order_Product']);
//echo  $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <style>
    .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
} 
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
    </style>
    <script src="main.js"></script>
</head>
<body>

<div class="topnav " id="myTopnav">
<h2 class="brand-Name"> <a href="#"> Mabruur</a></h2>
<div class="topnav" style="float:right;" id="myTopnav">
  <a href="new.php" class="">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#contact">MyChart</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 
</div>


<div style="overflow-x:auto; " class="mt-5">
  <table >
  <thead><h2 class="pl-5">My Cart</h2></thead>
    <tr ><th></th>
      <th>Product</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Remove</th>
      <th>Total</th>
      
    </tr>
    <?php 
    
    $cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] :"[]";
    $cart = json_decode($cart);
    //print_r($cart);
   // $order_Product= new array();
      foreach ($cart as $key)
   {
 
  //   # code...
   
  //}
     
    ?>
    <tr>
    
    <td>
    <input type="hidden" name="id" value="<?php echo $id?>">
    </td>
      <td><img width="50px" style="border-radius:50%;" src="<?php echo $key->product->target; ?>"></td>
      <td class="pname"><?php echo $key->product->pname;?></td>
      <td class="price"><?php echo $key->product->price;

      ?></td>
  <form action="" method="post">
      <td>
      <input type="text" class="quantity" min="1" name="qunty" onkeyup="quantity();">
      
      <input type="hidden" name="id" value="<?php echo $cart[0]->product->id;?>">
      <button class="btn btn-warning" name="Update">Update</button>
 
      </td>
</td>
    
      <form action="delete.php" method="post">
      <td >
           
      <input type="hidden" name="id" value="<?php echo $cart[0]->product->id;?>">
      <button class="btn btn-danger" name="del">Delete</button>
      </td>
           </form>
      <td class="total" >
 
      </td>
      
    </tr>
  
    <?php
   }
  ?>
    <tr>
    <td colspan="4" ><h3 style="float:right;">Total :</h3> <span></span></td>
  <td colspan="3" id="ttotal"></td>  </tr>
  </table>
  <form action="payment.php" method="post">
  <button class="btn btn-lg btn-info mx-5 my-3" name="morder" style="float:right;"> Make Order >> </button>
  </form>
</div>

<?php

if(isset($_POST["morder"])){
//session_destroy();
//echo $_POST['qunty'];  
$_SESSION['order_Product']=array();
   //$_SESSION["qunty"]=array();
  
  for ($i=0; $i < count($cart) ; $i++) { 
    # code...
  // echo $_POST['qunty'];
    array_push($_SESSION['order_Product'],$cart[$i]);
  //array_push($_SESSION["qunty"],$_POST['qunty'][$i]);
  }
 //print_r($_SESSION['qunty']);
}                                                          
?>
  <?php
      if (isset($_POST['Update'])) {
        # code...
        $qunt=$_POST['qunty'];
        print_r($qunt);
      }
     // echo $cart[0]->product->id;
      // print_r($cart);
     
      ?>
</body>
</html>
<script src="script.js"></script>
<script>

</script>