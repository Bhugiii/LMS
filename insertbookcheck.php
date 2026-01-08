<?php

require 'config.php';

$Book_ID=$_POST["Book_ID"];
$Library_ID=$_POST["Library_ID"];
$Borrowed_Date=$_POST["Borrowed_date"];
$Return_Date=$_POST["Return_date"];

$bookcheck_sql="INSERT INTO books VALUES ('$Book_ID','$Library_ID','','','$Borrowed_Date','$Return_Date')";

if($con->query($bookcheck_sql))
{
    echo "<script> alert('Insert successful')</script>";
}
else
{
    echo "Error".$con->error;
}

$con->close();

?>


