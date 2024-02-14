<?php
    include("../../config/connect.php");
?>

<?php
    if(
        !empty($_POST["id"]) 
    )
    {
        $id=$_POST["id"];
        $deleteproduct="DELETE FROM product WHERE `product`.`pro_id` = '$id' ";

        $exutequery=mysqli_query($con,$deleteproduct);
    if($exutequery)
    {
        echo("1");
    }
    else{
        echo("2");
    }
    }
?>