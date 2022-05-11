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
   
    <div class='login'>
       Thank you for registering! 
    </div>

  </head>
  <body>



  </body>
</html>