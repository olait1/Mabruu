<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
      #container{
          width:400px;
          height: 500px!important;
          padding-top:30px;
          margin-top:20px!important;
          margin-bottom:0!important;
         overflow-y:scroll;
         }
input[type=text], input[type=tel],input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
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
     <label for="Stock Name">Customer Name</label>
    <input type="text" id="cname" class="cname" require name="cname" placeholder="Customer name..">
    <label for="Stock Name">Customer Address</label>
    <input type="text" id="cadd" require class="cadd" name="cadd" >
    <label for="Stock Name">Stock Name</label>
    <input type="text" id="sname" require class="sname" name="sname" placeholder="Stock name..">

    <label for="Stock Name">Phone No</label>
    <input type="text" require id="phoneNo" class="phoneNo" name="phoneNo" >
    <label for="email">E-mail</label>
    <input type="email" require id="email" class="email" name="email" >
    <label for="modelNo">Quantity</label>
    <input type="text" require id="Qunty" name="Qunty" placeholder="">
    <label for="Price">Unit Price</label>
    <input type="text" require id="uprice" class="uprice" name="uprice" value="# " placeholder="Price">
    <input type="submit" value="Submit" id="submit" name="sub" onclick="submit();">
    <input type="submit" value="Preview/Pay" id="Preview" style="background:#00f;" name="preview" onclick="Preview();">
  </form>
</div>
</div>
<script src="script.js"></script>
<?php
if(isset($_POST["sub"])){ 
$cname = ucwords($_POST["cname"]);
$cadd = ucwords($_POST["cadd"]);
$sname=ucwords($_POST["sname"]);
$phoneNo=ucwords($_POST["phoneNo"]);
$email  = ucwords($_POST["email"]);
$Qunty=ucwords($_POST["Qunty"]);
$uprice = ucwords($_POST["uprice"]);
// echo $uprice;
// if ($checked)
// {
//   # code...
//   echo "please fill the neccessary field";
// }else{
if (empty($cname) || empty($cadd) || empty($sname) || empty($phoneNo) || empty($email)  || empty($Qunty) || empty($uprice)  )  {
  # code...
}else{
$conn=new mysqli("localhost","root","","roffy");
if(!$conn){
die(mysqli_error($conn));

}
$sql="INSERT INTO  reciepts VALUES('$cname','$cadd','$sname','$phoneNo','$email','$Qunty','$uprice')";
$result = mysqli_query($conn,$sql);
$sq="INSERT INTO  transactions VALUES('','$cname','$cadd','$sname','$phoneNo','$email','$Qunty','$uprice','')";
$resul = mysqli_query($conn,$sq);
if (!$result || !$resul) {
  # code...
  die(mysqli_error($conn));
}
}}
// }
if (isset($_POST['preview'])) {
  # code...
  header("LOCATION:checkout.php");
}
?>
</body>
</html>