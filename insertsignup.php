<?php

require 'config.php';

$First_Name=$_POST["FirstName"];
$Last_Name=$_POST["LastName"];
$Contact_num=$_POST["ContactNumber"];
$email=$_POST["EmailAddress"];
$Library_ID=$_POST["LibraryID"];
$Password=$_POST["Password"];
$Con_passsword=$_POST["ConfirmPassword"];

$SignUp_sql="INSERT INTO signup VALUES ('$First_Name','$Last_Name','$Contact_num','$email','$Library_ID','$Password','$Con_passsword')";

if($con->query($SignUp_sql))
{
    echo "<script> alert('Insert successful')</script>";
}
else{
    echo "Error".$con->error;
}

$con->close();

?>