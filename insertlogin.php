<?php

   require 'config.php';

    $Library_ID=$_POST["LIBRARY_ID"];
    $Password=$_POST["Password"];

    $login_sql = "INSERT login VALUES ('$Library_ID','$Password')";


    if($con->query($login_sql))
    {
        echo "<script> alert('Insert successful')</script>";
    }

    else{
        echo "Error".$con->error;
    }

    $con->close();
  

?>