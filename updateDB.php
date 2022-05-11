<?php
if (isset($_POST['submitted'])){
    include('connect.php');

    $email = $_POST['email'];
    $petID = $_POST['PETID'];
    $sqlquery = "insert into ID_Emails (petid, owner) values ('$pedID','$email');";
    
    if(!mysqli_query($dbcon,$sqlquery)){
        die('error registering email');
    }
    $newuser = "Registered sucessfully!";

    $dbcon->close();
}

?>