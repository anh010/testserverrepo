<?php

include('connect.php');

$email = $_POST['email'];
$petID = $_POST['PETID'];
$sqlquery = "insert into ID_Emails (petid, owner) values ('$pedID','$email');";

if(!mysqli_query($dbcon,$sqlquery)){
    die('error registering email');
}
$newuser = "Registered sucessfully!";

$dbcon->close();


?>

<html>
  <head>
    <meta charset="utf-8">
    <title> Pep Pets </title>

    
    <link rel="stylesheet" type="text/css" href="public/style.css">
   
  </head>

  <body id ="body">
    <div class="title"> Welcome to Pet Pets!</div>
    <p class="title">To register or login please your email and Pep Pet ID</p>
    <form method ='post' action = 'index.php' >
    <div class ="login">
      E-mail: <input type="text" id="email"  name="email"><br>
      Pep Pet ID: <input type="text" id="petid"name="PETID"><br><br>
     
      <Button  type="submit">Register </Button> 
      <Button type="submit"> Login</Button>
    </div>
    </form>
    <div class="login">
      <p  id="msg"class="title"> </p>
    </div>
    <script src="public/script.js"></script>

  </body>
</html>