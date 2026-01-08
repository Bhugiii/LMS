<?php

require 'config.php';

$Full_Name=$_POST["fullname"];
$Library_ID=$_POST["libraryID"];
$Cash_amt=$_POST["cashamount"];

$Donations_sql="INSERT INTO donations VALUES ('$Full_Name','$Library_ID','$Cash_amt')";

if($con->query($Donations_sql))
{
    echo "<script> alert('Insert successful')</script>";
}
else{
    echo "Error".$con->error;
}

$con->close();

?>