<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  
    <link rel="stylesheet" href="style.css">
<style>
      #container{
          width:400px;
          height: 500px!important;
          padding:0px;
          margin-top:20px!important;
          margin-bottom:0!important;
         
         }
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 15px 0;
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
  margin: 14px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
form{
  padding: 20px;
}
 
#file{
  width: 100%;
}

</style>
  </head>
<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome/fontawesome.min.css">
  <style type="text/css" media="all">
 
    </style>
<body>
     <div id="container">
    <div>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" autocomplete="off">
    <label for="Product Name">Product Name</label>
    <input type="text" id="pname" class="pname" name="pname" placeholder="Product name..">
    <label for="Price">Price</label>
    <input type="text" id="Price" class="Price" name="Price" value="#" placeholder="Price">

    <label for="Size">Size</label>
    <input type="text" id="Size" name="Size" placeholder="">
    
    <label for="modelNo">Quantity</label>
    <input type="text" id="Qunty" name="Qunty" placeholder="">

    <label for="lname">Product Image</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Submit" id="submit" name="sub" onclick="submit();">
    <input type="submit" value="Sales Record" id="Preview" style="background:#00f; padding:15px;" name="preview" onclick="Preview();">
  </form>
</div>
</div>
<script src="script.js"></script>
<?php
if(isset($_POST["sub"])){
  $pname=ucwords($_POST["pname"]);
$price=ucwords($_POST["Price"]);
$size=ucwords($_POST["Size"]);
$Qunty=ucwords($_POST["Qunty"]);

$target="img/".basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){	
  $msg = "<script>alert('Image Uploaded Successfully');</script>";
}
else{
$msg = "<script>alert('there was a problem uploading image');</script>";
}
$conn=new mysqli("localhost","root","","roffy");
if(!$conn){
die(mysqli_error($conn));
}
$sql="INSERT INTO  homepage VALUES('','$pname','$price','$Size','$Qunty','$target')";
$result = mysqli_query($conn,$sql);
if (!$result) {
  # code...
  die(mysqli_error($conn));
}
}

if (isset($_POST['preview'])) {
  # code...
  header("LOCATION:salesrecord.php");
}
?>
</body>
</html>