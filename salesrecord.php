

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
    width:1100px;
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
   <h2 style="margin:10px 0; color:#00f;">Sales Record</h2>
    
  <tr>
    <th>S/N</th>
    <th>Customer Name</th>
    <th>Customer Address</th>
    <th>Stock Name</th>
    <th>Phone No</th>
    <th>E-mail</th>
    <th>Qty</th>
    <th>Unit Price</th>
    <th>Price Total</th>
  </tr>
  <?php
      $sql="SELECT * FROM transactions" ;
      $result=mysqli_query($conn,$sql);
        
         if ($result) {
          
             # code...
             $ttotal=0;
             while ($row = mysqli_fetch_assoc($result)) {
                 # code...
                 
                 $id = $row['id'];
                 $cname=$row['cname'];
                 $cadd =$row['cadd'];
                
                 $sname = $row['sname'];
               $phoneNo= $row['phoneNo'];
               $email = $row['email'];
                 $qunty = $row['Qunty'];
                 $uprice=$row['uprice'];
                 $rprice = substr($uprice,1);
                 $total=(int)$qunty * (int)$rprice;
                 $GLOBALS['ttotal'] +=  $GLOBALS['total'];
?>
  <tr class="tr">
    <td ><?php echo $id;?></td>
    <td><?php echo   $cname?></td>
    <td><?php echo   $cadd?></td>
    <td><?php echo   $sname?></td>
    <td><?php echo   $phoneNo?></td>
    <td><?php echo   $email?></td>
    <td><?php echo $qunty  ?></td>
    <td class="price"><?php echo $uprice ?></td>
   
    <td><?php echo"# ". $total; ?></td>

  </tr>
  <?php 
             }}
            
           
  ?>
  <tr>
  <td colspan="6"  style="text-align:center;"><h3>Actual Total :  <?php echo"# ". $GLOBALS['ttotal'] ?> </h3></td>
 
  </tr>
 <tr>
     <td colspan="5" style="padding-bottom:2px; padding:0px 50%;">
     <a href="javascript:void(0)"
      value="Print" onclick="window.print();" 
      style=" color:#222; font-size:16px; text-align:center;text-decoration:none;">
     Print</a>
    
    <a href="javascript:void();" onclick="window.history.back();">Back</a>
    </td>
 </tr>
</table>

            </form>
</div>
<script src="script.js"></script>
<script>

</script>
</body>
</html>