<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
* {box-sizing: border-box;
padding:0;
margin:0;
}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;

}
img {vertical-align: middle;max-height:500px!important;
}
.nav{
    float:right;
}
.brand-Name{
    font-weight:6px;
}
.brand-Name a:hover{
background-color:transparent!important;
color:#fff!important;
}
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

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}





    #container{
      
        padding:0;
        /* box-shadow:2px 2px 2px #222;
        border-radius:20px;
        background-color: #f2f2f2; */
        height:600px;
        margin:10px auto;
    }
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 ;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 7.7px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 0px 15px 20px;
  border: 1px solid lightgrey;

}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.container{
  margin:auto;
  width:50%;

}
</style>
    <script src="script.js"></script>
</head>
<body>
<?php
     $conn=new mysqli("localhost","root","","roffy");
  
    ?>
    <div class="topnav " id="myTopnav">
<h2 class="brand-Name"> <a href="#"> Mabruur</a></h2>
  <div class="nav">
  <a href="new.php" >Home</a>
  <a href="#about">About</a>
  <a href="mreceipt.php">Make Receipt</a>

  <a href="login.php">logIn</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
</div>
<div id="container" style="margin:0 auto;" class="container">
<div class="row">
  <div class="col-75">
    <div class="containe" id="form">
        <div class="row">
          <div class="col-50">
            <h3>Delivery Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <form action="payment.php" method="post">
            <select name="des" id="des" style="width:100%; height:3em;" onchange="destination();">

            <?php
            $destination=array("Esso"=>450,"Emir Palace"=>500,"Old Market"=>600,"Small Market"=>"700","Poly area"=>"50","GRA"=>1000);
            
            foreach ($destination as $key => $value) {
              # code...
         
         
            ?>
            <option value="<?php echo $value;?>" name="destination"><?php echo $key;?></option>
            <?php
        if ($key) {
          # code...
         $_SESSION['b']=$_POST['destination']; 
        } 
        }
            ?>
            
            </select>

                        <div class="row">
         <?php
 echo $_SESSION['b'];
         ?>
              <input type="submit" value="Continue to checkout"  name="check" class="btn check">
            </div>
            </form>
          </div>

          

</div>
<script>
function destination(){
  var des= document.getElementById('des');
console.log(des.value);

}
var id;
var chart = document.getElementsByClassName("chart"); 
var cart = document.getElementById("cart"); 
cart.innerHTML=chart.length;
</script>
<?php
if (isset($_POST['check'])) {
  # code...
 echo"<script>
 if(cart.innerHTML===0){
   alert('i am zero');
  }else{
    alert('Transaction Successfull !!!. You can now print your reciept');
    document.location.href='receipt.php';
  }
  
 </script>";
}

// // if (strlen($_POST['cart'])===0) {
// //   # code...

// // echo"<script>
// // alert('PLEASE PLACE YOUR ORDER FIRST');
// // </script>";
// // }else{
// //   echo"<script>   document.location.href='receipt.php';</script>";
// // }
?>
</body>
</html>