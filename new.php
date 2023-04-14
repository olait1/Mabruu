<?php 
//session_start();
//setcookie('pname',$_COOKIE['pname'],2*24*60*60);
//print_r($_COOKIE['pname']);
// echo $_SESSION['pname'];
  //if(isset($_POST["order"]))
  //{
    // session_abort();
    
    //  $_SESSION["pname".$_POST["order"]] =  $pname;
     //echo  $_SESSION["pname".$_POST["order"]];
//$_SESSION['id']=$_POST['order'];

//header("LOCATION:chart1.php");
  //}
  //echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<style>
* {box-sizing: border-box;
padding:0;
margin:0;
}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;

}
img {vertical-align: middle;max-height:500px!important;
} /* Add a black background color to the top navigation */
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
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.col{
  width:50%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

</style>
</head>
<body>
<div class="topnav" id="myTopnav">
<h2 class="brand-Name"> <a href="#"> Mabruur</a></h2>
<div class="topnav" style="float:right;" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="chart1.php">Mychart</a>
  
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img/img (1).jpg" style="width:100%">
  <div class="text">t</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="img/img (4).jpeg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/img (5).jpeg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/img (3).jpeg" style="width:100%">
  <div class="text"></div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
  <div class="row mt-5 container mb-5" style="margin:0px auto;">
  <?php
          $conn=new mysqli("localhost","root","","roffy");
          $sql="SELECT * FROM homepage";
          $result=mysqli_query($conn,$sql);
          if ($result) {
              # code...
              while ($row = mysqli_fetch_assoc($result)) {
                  # code...
                  $id=$row['id'];
                  $pname = $row['pname'];
                  $img = $row['target'];
                  $price = $row['price'];
                  $Qunty = $row['Qunty'];
                  ?> 
       <div class="col-md-4 my-5" style="text-align:center;">
    <div class="card">
  <img src="<?php echo $img;?>" name="img" alt="image" style="width:100%">
  <h4><?php echo $pname;?></h4>
  <p class="title"><?php echo $price;?></p>
  <form action="addCart.php" method="post">
 <input type="hidden" name="quantity" value="1">
 <input type="hidden" name="id" value="<?php echo $id;?>">
  <p><button class="btn btn-info" id="order" name="order" value="
  <?php //if(isset($_POST['order'])){
// $_SESSION['pname']=$pname;
// $_SESSION['img']=$img;
// $_SESSION['price']=$price;
// echo $pname.''.$img.''.$price;
// $_COOKIE['pname']=$pname;
//$_SESSION['id']=$id;

//echo $id;  }?>
  ">Add Cart</button></p>
 
</div>

  </div>
  </form>
  <?php
//   if (isset($_POST['order'])) {
// for ($i=1; $i < count($row); $i++) { 
//   # code...
//   echo "i ".$i ."<br/>";
//   echo"order".$_POST['order'];
//   if ($i== $_POST['order']) {
//     # code...
  
// $sql="INSERT  INTO  chart VALUES('','$img','$pname','$price')";
// $resul = mysqli_query($conn,$sql);  
// if($resul){
//   echo "inserted";
// }}

// }}               
             
                
           }
          }
          

      
        //   if (isset($_POST["order"])) {
        //     $sq="SELECT * FROM homepage WHERE id= $idn";
        //   $resu=mysqli_query($conn,$sq);
      
        //   if ($resu) {
        //       # code...
          
        //       while ($row = mysqli_fetch_assoc($resu)) {
        //           # code...
        //           $id=$row['id'];
        
        //           $pname = $row['pname'];
        //           $img = $row['target'];
        //           $price = $row['price'];
        //           $Qunty = $row['Qunty'];

        //     # code...
        //     $sql="INSERT INTO  chart VALUES('','$img','$pname','$price')";
        //     $resul = mysqli_query($conn,$sql);
        //     if (!$resul) {
        //       # code...
        //     echo"<script>alert('not inserted ');</script>";
        //       die(mysqli_error($conn));
        // }
        //   }
        // }}
  ?>
</div>
<div class="container text-center">
<h4>Welcome to Mabrru Integrated Services</h4>
<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Natus amet possimus, vel fugit quod autem eum
 labore vero id ex cupiditate adipisci ipsam.
  Iste esse fugiat eum rem ducimus quod!</p>
</div>
<div class="bg-dark text-center text-white mt-5 py-5" style="background-color:#222;">
copyright  &copy; 2022
</div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html> 
