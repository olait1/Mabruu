<?php
session_start();
//echo var_dump($_SESSION['order_Product']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
<style>
#container{
    width:700px;
    height:auto;
    padding-top:10px;
    margin:auto;
    
}
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>
<div id="container">
    <?php
     $conn=new mysqli("localhost","root","","roffy");
 
    ?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<table>
    <tr>
        <th style="text-align:center;" colspan="6">
        <h2>Mabruur Integrated Service Limited</h2>

            <p style="margin:10px 0;">Poly Road Bida Niger State</p>
           
        <p>08134............,070............ </p>
        <i ><a href="mailto:mabruur@gmail.com" >mabruur@gmail.com</a></i>
        <p style="margin:10px 0;">CASHSALES RECEIPT</p>
        <p><span>Ref No: </span> 
        <span> En91501 </span>
         <span>Date:</span> <span><?php echo  date("Y-m-d");?></span>
        <span>Time : </span><span> <?php echo date("h:i:sa");?></span> </p>
        </th>
    </tr>
    <tr>
    <!-- 
        <th colspan="5">Customer Name : <span id="cname"><?php echo $rows['fname']?></span> </th>
    </tr>
    <tr>
        <th colspan="5" >Address : <span id="add"></span><?php echo $rows['city'].", ".$rows['state'];?> </th>
    </tr>
    <tr>
        <th colspan="3">GSM : <span id="GSM"></span></th> <th colspan="2">Staff: <span id="staff"></span> </th>
    </tr>
    <?php
        // }}}
    ?> -->
  <tr>
    <th>S/N</th>
    <th>Stock Name</th>
    <th>Qty</th>
    <th>Unit Price</th>
   
    <th>Total</th>
  </tr>
  <?php
  
  for ($i=0; $i < count($_SESSION['order_Product']) ; $i++) { 
      # code...
  
      # code...
  
?>
  <tr class="tr">
    <td class="id"></td>
    <td><?php
    print($_SESSION['order_Product'][$i]->product->pname);
    ?></td>
   
    <td></td>
    <td class="price"><?php  print($_SESSION['order_Product'][$i]->product->price);?></td>
   
    <td> </td>

  </tr>
  <?php 
  }
            
           
  ?>
  <tr>
  <td colspan="6"  style="text-align:center;">
  <h3>Actual Total :  <?php echo"# ". $GLOBALS['ttotal'] ?> </h3></td>
 
  </tr>
 <tr>
     <td colspan="5" style="padding-bottom:2px;">BY CUSTOMER......................................................................................</td>
 </tr>
 <tr>
     <td colspan="5" style="padding-bottom:2px; text-align:center"> 
     <h6>Discover What We Can Do For You</h6>
    <p>Goods bought in good condition are not returnable and also money are not refundable too.</p>
    <p>Thank you</p>
    </td>
 </tr>
 <tr>
     <td colspan="5" style="padding-bottom:2px; padding:0px 50%;">
     <a href="javascript:void(0)"
      value="Print" onclick="window.print();" 
      style=" color:#222; font-size:16px; text-align:center;text-decoration:none;">
     Print</a>
     <input type="submit"
      value="clear"  name="cleare"
      style=" color:#222; font-size:16px; text-align:center;
      font-size:16px;
      text-decoration:none;
       background:none; border:none; cursor:pointer;">
    <a href="javascript:void();" onclick="window.history.back();">Back</a>
    </td>
 </tr>
</table>
<?php
if (isset($_POST['cleare'])) {
    # code...
echo"cleared";
$D="DELETE  FROM reciepts";
 $result=mysqli_query($conn,$D);
}
?>
            </form>
</div>
<script src="script.js"></script>
<script>

</script>
<?php

// $to = "somebody@example.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";
// mail($to,$subject,$txt,$headers);
?> 
<p id="demo"></p>
</body>
</html>
