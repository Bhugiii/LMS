<?php

require 'config.php';

$title=$_POST["bookTitle"];
$name=$_POST["authorName"];

$books_sql="INSERT INTO books VALUES ('','','$title','$name','','')";

if($con->query($books_sql))
{
    echo "<script> alert('Insert successful')</script>";
}

else {
    echo "Error".$con->error;
}

$con->close();




?>