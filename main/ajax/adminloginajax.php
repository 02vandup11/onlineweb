<?php
include("../../config/connect.php");
if(
    !empty($_POST["email"]) && !empty($_POST["password"])
)
{
    $email=$_POST["email"];
    $password=$_POST["password"];

 if($email=="jeweladmin@gmail.com" && $password=="jeweladmin") {
    echo "1";
 }
 else{
    echo "2";
 }
}
?>