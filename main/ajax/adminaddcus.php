<?php
include("../../config/connect.php");

if(
    !empty($_POST['cus_fname'])&& !empty($_POST['cus_lname'])&& !empty($_POST['cus_email'])&& !empty($_POST['cus_phone'])&& !empty($_POST['cus_password'])
)
{
    $email=$_POST['cus_email'];
    $firstName=$_POST['cus_fname'];
    $lastName=$_POST['cus_lname'];
    $phoneNumber=$_POST['cus_phone'];
    $password=$_POST['cus_password'];

    $addcusquerry="INSERT INTO `customer` (`cus_email`, `cus_password`, `cus_fname`, `cus_lname`, `cus_phone`) VALUES ('$email', '$password', '$firstName', '$lastName', '$phoneNumber')";

    $result=mysqli_query($con,$addcusquerry);
    if($result)
    {
        echo("1");
    }
    else{
        echo("2");
    }
}

?>