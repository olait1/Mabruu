
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome/fontawesome.min.css">
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
      #contain{
          width:400px;
          height: 600px!important;
          padding-top:30px;
          margin-top:20px!important;
          margin-bottom:0!important;
         }
input[type=text], input[type=tel],input[type=email]{
  width: 100%;
  padding: 12px 20px;
  
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form-container{
  background:#eee;
  width:50%;
  margin:20px auto;
  padding: 100px;
  border-radius:10px;
  position:relative;
}
form{
  width:100%;
}
#link{
  position: absolute;
  top: 0;
  left: 20px;
}
#link a{
  text-decoration: none;
  color: #fff;
  width: 30px;
  height: 30px;
  background: #00f;
  padding: 5px;
  font-size: 16px;
  border-radius: 50%;
}
</style>
<?php
 $id=$_SESSION['id'];

  $conn=new mysqli("localhost","root","","roffy");
  $sql="SELECT * FROM homepage WHERE id=$id";
  // $sql="SELECT * FROM homepage";
  $result=mysqli_query($conn,$sql);
?>
<?php 
?>
<body>
<div class="topnav" id="myTopnav">
<h2 class="brand-Name"> <a href="#"> Mabruur</a></h2>
  <div class="nav">
  <a href="#home" >Home</a>
  <a href="#about">About</a>
  <a href="mreceipt.php">Make Receipt</a>

  <a href="login.php">logIn</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
  </div>
  <div class="form-container jumbotron">
  <!-- <div id="link" style="float:right;">
    <a href="index.php">Home</a>
    <a href="login.php">Admin</a>
      </div>  -->

  <form style="margin-top:10px;" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
  <?php
          if ($result) {
              # code...
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
     <label for="Stock Name">Customer Name</label>
    <input type="text" id="cname" class="cname" require name="cname" placeholder="Customer name..">
    <label for="Stock Name">Customer Address</label>
    <input type="text" id="cadd" require class="cadd" name="cadd" >
    <label for="Stock Name">Stock Name</label>
    <input type="text" id="sname" disabled class="sname"  value="<?php echo $row['pname']?>">
    <label for="Stock Name">Phone No</label>
    <input type="text" require id="phoneNo" class="phoneNo" name="phoneNo" >
    <label for="email">E-mail</label>
    <input type="email" require id="email" class="email" name="email" >
    <label for="modelNo">Quantity</label>
    <input type="text"  id="Qunty" onkeyup="Totalp();" name="Qunty" placeholder="">
    <label for="Price">Unit Price</label>
    <input type="text" disabled  value="<?php echo $row['price']?>" id="uprice" class="uprice" name="uprice" value="# " placeholder="Price">
    <p>Price : <span id="price" class="text-muted"></span> </p>
    <input type="submit" value="Submit" id="submit" name="sub" onclick="submit();">
    <input type="submit" value="Preview/Pay" id="Preview" style="background:#00f; padding:10px;" name="preview" onclick="Preview();">
    <p><?php 
    // if ($_POST['Qunty']>$row['Qunty']) {
    //   # code...
    //   echo"<script>alert('Out of stock');</script>";
    // } else{
    //   echo"<script>alert('we have enough stock');</script>";
    // $qunty=(int)$row['Qunty']-(int)$_POST['Qunty'];
    
    // $up = "INSERT INTO homepage VALUE(Qunty=$qunty) WHERE id=2";
    // echo"quantity";
    // $result=mysqli_query($conn,$up);
    // }    
    ?></p>
    <?php
 
if(isset($_POST["sub"])){
$cname = ucwords($_POST["cname"]);
$cadd = ucwords($_POST["cadd"]);
// $sname=ucwords($_POST["sname"]);
$phoneNo=ucwords($_POST["phoneNo"]);
$email  = ucwords($_POST["email"]);
$Qunty=ucwords($_POST["Qunty"]);
// $uprice = ucwords($_POST["uprice"]);
// $pname=


?>

<?php
// echo $uprice;
// if ($checked)
// {
//   # code...
//   echo "please fill the neccessary field";
// }else{
if (empty($cname) || empty($cadd) ||  empty($phoneNo) || empty($email)  || empty($Qunty) )  {
  # code...
  die();
}else{


// $sql = "UPDATE homepage SET Qunty=555 WHERE id=5";
// echo "the remainig stock is ".$row['Qunty'];
// $sql="INSERT INTO  reciepts VALUES('$cname','$cadd','$sname','$phoneNo','$email','$Qunty','$uprice')";
// $result = mysqli_query($conn,$sql);
//$sq="INSERT INTO transactions   VALUES('','$cname','$cadd','$phoneNo','$email','$Qunty',$row['uprice'],'',$row['sname'])";

if (!$resul) {
  # code...
echo"<script>alert('not inserted ');</script>";
  die(mysqli_error($conn));
}
else{
  echo"<script>alert('inserted');</script>";
  if (isset($_POST['preview'])) {
    # code...
    echo"<script>alert();</script>";
    header("LOCATION:checkout.php");
    }
}

}

// }

}




?>
 <?php }


 
}

?> 

  </form>
             


</div>
</div>
<script>
function Totalp(){
var Qunty=document.getElementById('Qunty').value;
var uprice=document.getElementById('uprice').value;
var tprice=document.getElementById('price');
let unp=uprice.substr(1);
console.log(Qunty,uprice);
tprice.innerHTML="# "+parseInt(unp) * parseInt(Qunty);

}
</script>
<?php

 ?>
</body>
</html>