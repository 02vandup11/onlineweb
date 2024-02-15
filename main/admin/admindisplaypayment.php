<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jewelry Shop</title>

    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


</head>

<body class="">

<?php                
    include("../../config/connect.php");
?>





<!-- table -->


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-3 py-3">
                    Payment Id
                </th>

                <th scope="col" class="px-3 py-3">
                    Payment Date
                </th>

                <th scope="col" class="px-3 py-3">
                    Payment Amount
                </th>

                <th scope="col" class="px-3 py-3">
                    Payment Status
                </th>

                <th scope="col" class="px-3 py-3">
                    Payment Order Id
                </th>

                <th scope="col" class="px-3 py-3">
                    Payment Customer Email
                </th>

            </tr>
        </thead>
        <tbody>
            <?php                
                $payment = "SELECT * FROM `payment`";
                $executequery = mysqli_query($con,$payment);
                if(mysqli_num_rows($executequery))
                {
                    while($row_of_payment=mysqli_fetch_assoc($executequery))
                    {
                        $paymentid=$row_of_payment["pay_id"];

                    
                        ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                           
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php
                            echo $row_of_payment["pay_id"];
                            ?>
                            </th>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_payment["pay_date"];
                            ?>
                            </td>

                            <!-- line-clamp-1 hover:line-clamp-none -->
                            <td class="px-6 py-4 ">
                            <?php
                            echo $row_of_payment["pay_amount"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_payment["pay_status"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_payment["pay_order_id"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_payment["pay_cus_email"];
                            ?>
                            </td>

                            


                            <!-- <td class="flex items-center px-4 py-2">
                                <a href="editorder.php?pro_id=$row[pro_id]" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="deleteorder.php?pro_id=$row[pro_id]" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                            </td> -->

                            

                        </tr>
                    <?php
                    }
                }
            ?>   
        </tbody>
    </table>
</div>

                
                
            </form>
        </div>
    </div>
</div> 





<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>



</body>

</html>
