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

<!-- button to add customer -->
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex m-4 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 me-2" aria-hidden="true"  viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm4,11H13v3a1,1,0,0,1-2,0V13H8a1,1,0,0,1,0-2h3V8a1,1,0,0,1,2,0v3h3a1,1,0,0,1,0,2Z"/></svg>
        Add customer  
    </button>



<!-- table -->


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-3 py-3">
                    Customer Email
                </th>

                <th scope="col" class="px-3 py-3">
                    Customer Password
                </th>

                <th scope="col" class="px-3 py-3">
                    First Name
                </th>

                <th scope="col" class="px-3 py-3">
                    Last Name
                </th>

                <th scope="col" class="px-3 py-3">
                    Phone Number
                </th>

            </tr>
        </thead>
        <tbody>
            <?php                
                $customer = "SELECT * FROM `customer`";
                $executequery = mysqli_query($con,$customer);
                if(mysqli_num_rows($executequery))
                {
                    while($row_of_customer=mysqli_fetch_assoc($executequery))
                    {
                        $customerid=$row_of_customer["cus_email"];

                    
                        ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                           
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php
                            echo $row_of_customer["cus_email"];
                            ?>
                            </th>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_customer["cus_password"];
                            ?>
                            </td>

                            <!-- line-clamp-1 hover:line-clamp-none -->
                            <td class="px-6 py-4 ">
                            <?php
                            echo $row_of_customer["cus_fname"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_customer["cus_lname"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_customer["cus_phone"];
                            ?>
                            </td>

                            


                            <!-- <td class="flex items-center px-4 py-2">
                                <a href="editcustomer.php?pro_id=$row[pro_id]" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="deletecustomer.php?pro_id=$row[pro_id]" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
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
