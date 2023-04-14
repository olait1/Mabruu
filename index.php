<?php 
session_start();
  if(isset($_POST["btnBuy"]))
  {
      session_unset($_SESSION["item_id"]);
      $id = $_POST["item_id"];
      $_SESSION["item_id"] = $id;

  }
?>



<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  
  </head>
  <style></style>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <style type="text/css" media="all">

  *{
    
padding: 0;
      margin: 0;
      box-sizing: border;
      font-family: Sans-Serif;
      
  }
    body{
      background: #ddd;
    }
    .brandName{
      text-align: left;
      color:#00f;
      font-size:10.2em;
      text-shadow:3px 3px 5px  #222;
      margin: 10px;
    }
    .search-input{
      width: 100%;
      height: 50px;
      margin-bottom:30px;
    }
    #myInput {
 /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  border-radius:20%;
}


.sub{
  background: transparent;
  font-size: 16px; 
  border: none;
  cursor: pointer;
}

.row{
    width:100%;
    margin-top:50px;
    height:300px;
  padding: 10px;
  margin-top:300px;
padding:70px 10%;
}

.column {
  float: left;
  width: 30%;
  position:relative;
  margin:70px auto;
  text-align: center;
  background-color: #00f;
  border-radius:10px
}

.column img {
  
  border-radius:10px;
  width:100%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h6{
    color:#00f;
}
#container{
  height:450px;
 position:relative;
  width:100%;
  
}
#link{
  position: absolute;
  bottom: 0;
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
    <div id="container">
   

      <div class="search-input">
<p style="text-align:left;"><img src="logo1.JPG" style="border-radius:5px;width:80px;" alt="LOGO" srcset=""></p>
<p style="font-size:2.2em; text-shadow:2px 2px 2px #222; color:#00f;"><i> Mabruur <br>  Integrated Services</i></p>
<p><a href="mailto:mabruur@gmail.com"> mabruur@gmail.com</a></p>
<p style="text-align:right; margin:5px;">Click here to <a href="admin.php"><i class="fa fa-opencart">order</i></a></p>
<input style="margin-top:20px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for items..">
     
</div>
<div id="link" style="float:right; ">
    <a href="index.php">Home</a>
    <a href="login.php">Admin</a>
      </div> 
<!--       
      <div class="grid-container" id="grid-container"> -->
        
   <div class=" row">
     <form action="index.php" method="POST">
      <?php
          $conn=new mysqli("localhost","root","","roffy");
          $sql="SELECT * FROM homepage";
          $result=mysqli_query($conn,$sql);
          if ($result) {
              # code...
              while ($row = mysqli_fetch_assoc($result)) 
              {
                  # code...
               $id=$row['id'];
                  $pname = $row['pname'];
                  // $size = $row['size'];
                  $price = $row['price'];
                  $Qunty  = $row['Qunty'];
                  $target   = $row['target'];

                  ?>

    <div class="products column" >
        <img src="<?php echo$row['target']; ?>" style=" width:100%;">
        <div   class="product-text" style="text-align:center;">
        <h3 style="margin-top:50px; color:#eee;"><?php echo $pname;?></h3>
<h6 style="color:#ccc;"><?php  echo $price;?></h6>
<!-- <a href="admin.php?id='<?php //echo $id;?>'" type='submit' name='buy' style='background:#0f0; padding:5px;margin-bottom:5px;color:#fff; border:none; border-radius:5px; cursor:pointer;'> -->
<!-- <button type='submit' name='buy' style='background:#0f0; padding:5px;margin-bottom:5px;color:#fff; border:none; border-radius:5px; cursor:pointer;'>
   Buy</button> -->
   </form>

    </div>
    
  <?php
              }
              
              }?>
        </form>
      </div>
       <?php
    
       ?>


                     </div>
    <!-- </div> -->
    <script src="script.js">
    
    </script>
  </body>
</html>