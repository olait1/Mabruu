<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
    <style>
    #container{
        border-radius:50%;
        background: #ddd;
        box-shadow:2px 2px 2px 2px #222;
    }
  #form{
      width:300px;
      height:300px;
      margin:auto;
      margin-top:90px;

  }
  label{
      font-size:16px;
      color:#222;
  }
  input{
width:100%;
margin:10px 0;
height:30px;
border:#ccc;
padding:5px;
font-size:16px;
border-style:solid;
border-width:2px;
border-radius:10px;
box-shadow:inset 4px 4px 4px #ccc;
outline:none;
padding-left:15px;
color:#444;
  }
  input[type=submit]{
width:100%;
height:50px;
cursor:pointer;
color:#fff;
    background:#00f;
    box-shadow:none;
    padding-left:0;
  }
  

    </style>
</head>
<body>
    <div id="container">
    <div id="form">
    <form action="" method="post" autocomplete="off">
    <label for="uname">Username</label>
<input type="text" name="uname" id="uname">
<label for="pwd">Password</label>
<input type="password" name="pwd" id="pwd">

<input type="submit" value="Login" name="login">
</form>
 </div>
 </div>
 <?php
 if (isset($_POST["login"])) {
     # code...
     $uname=$_POST["uname"];
     $pwd=$_POST["pwd"];
     if ($uname==="Group21" && $pwd==="123") {
         # code...
        header("LOCATION:upload.php");
     }else{
echo "wrong password";
     }
 }else{
     echo "please fill the above field";
 }
 ?>
</body>
</html>