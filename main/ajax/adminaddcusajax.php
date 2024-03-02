<?php
include("../../config/connect.php");
if(
    !empty($_POST['product_id'])&& !empty($_POST['product_name'])&& !empty($_POST['product_price'])&& !empty($_POST['product_category'])&& !empty($_POST['product_material'])&& !empty($_POST['product_color'])&& !empty($_POST['product_customization'])&& !empty($_POST['product_description'])
)
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_category=$_POST['product_category'];
$product_material=$_POST['product_material'];
$product_color=$_POST['product_color'];
$product_customization=$_POST['product_customization'];
$product_description=$_POST['product_description'];
// $images=$_POST['images'];


$editquerry="UPDATE `product` SET `pro_name` = '$product_name', `pro_descrip` = '$product_description', `pro_price` = '$product_price', `pro_customization` = '$product_customization', `pro_category_id` = '$product_category' WHERE `product`.`pro_id` = '$product_id'";
$executeeditquerry=mysqli_query($con,$editquerry);
if($executeeditquerry)
{
    echo("1");
}
else{
    echo("2");
}
?>