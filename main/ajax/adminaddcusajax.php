<?php
include("../../config/connect.php");

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    // Delete product from the database
    $delete_product_query = "DELETE FROM `product` WHERE `pro_id` = '$productId'";
    $delete_product_result = mysqli_query($con, $delete_product_query);

    if ($delete_product_result) {
        echo 1; // Success response
    } else {
        echo 0; // Failure response
    }
} else {
    echo 0; // Incomplete data response
}
?>
