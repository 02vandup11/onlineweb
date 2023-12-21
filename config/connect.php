<?php
$hostname="localhost";
$username="root";
$password="";
$database="`ethnic-jewellery`";
$con=mysqli_connect($hostname,$username,$password,$database);
if(mysqli_connect_errno()){
    echo("not connected");
}
?>