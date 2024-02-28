<?php 
session_start(); 
if(isset($_SESSION["email"]) && isset($_SESSION["type"])  )
{
  if($_SESSION["type"]=="a")
  {
    $email = $_SESSION["email"];
  }
  else
  {
    echo ("<script>location.href='adminlogin.php'</script>");
  }

}
else{
    echo ("<script>location.href='adminlogin.php'</script>");
}

?>

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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">



</head>

<body class="">

<?php                
    include("../../config/connect.php");
?>




<!-- table -->


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-3 py-3">
                    Product id
                </th>

                <th scope="col" class="px-3 py-3">
                    Product name
                </th>

                <th scope="col" class="px-3 py-3">
                    Description
                </th>

                <th scope="col" class="px-3 py-3">
                    Price
                </th>

                <th scope="col" class="px-3 py-3">
                    Customization
                </th>

                <th scope="col" class="px-3 py-3">
                    Category
                </th>

                <th scope="col" class="px-3 py-3">
                    Materials
                </th>

                <th scope="col" class="px-3 py-3">
                    Colors
                </th>

                <th scope="col" class="px-5 py-3">
                    Image
                </th>

                <th scope="col" class="px-5 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php                
                $product = "SELECT * FROM `product`";
                $executequery = mysqli_query($con,$product);
                if(mysqli_num_rows($executequery))
                {
                    while($row_of_product=mysqli_fetch_assoc($executequery))
                    {
                        $productid=$row_of_product["pro_id"];

                    
                        ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                           
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php
                            echo $row_of_product["pro_id"];
                            ?>
                            </th>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_product["pro_name"];
                            ?>
                            </td>

                            <!-- line-clamp-1 hover:line-clamp-none -->
                            <td class="px-6 py-4 ">
                            <?php
                            echo $row_of_product["pro_descrip"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_product["pro_price"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_product["pro_customization"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_product["pro_category_id"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            $getmaterials="SELECT * FROM `pmaterialsl`, `materials`,`product`WHERE `pmaterialsl`.`pmaterial_product_id`=`product`.`pro_id` AND `pmaterialsl`.`pmaterial_material_id`=`materials`.`material_id` AND `product`.`pro_id`='$productid'";
                            $executegetmaterial = mysqli_query($con,$getmaterials);
                            if(mysqli_num_rows($executegetmaterial))
                            {
                                while($row_of_mproduct=mysqli_fetch_assoc($executegetmaterial))
                                {
                                    echo $row_of_mproduct["material_name"];
                                }
                            }
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            $getcolors="SELECT * FROM `pcolors`, `colors`,`product`WHERE `pcolors`.`pcolor_product_id`=`product`.`pro_id` AND `pcolors`.`pcolor_color_id`=`colors`.`color_id` AND `product`.`pro_id`='$productid'";
                            $executegetcolor = mysqli_query($con,$getcolors);
                            if(mysqli_num_rows($executegetcolor))
                            {
                                while($row_of_cproduct=mysqli_fetch_assoc($executegetcolor))
                                {
                                    echo $row_of_cproduct["color_name"];
                                }
                            }
                            ?>
                            </td>
                        
                            

                            <td class="px-4 py-4 ">
                                <div class="">
                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description"> 

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">
                                </div>
                            </td>

                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button type="button"  onclick="delete_chan(<?php echo $productid; ?>)"  data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block">
                                    <svg class="w-[31px] h-[31px] text-gray-800 dark:text-white m-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                    </svg>
  
                                        
                                    </button>
                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block" 
                                    type="button" id="editbtn" onclick="update_chan(<?php echo $productid; ?>)">                                    
                                    <svg class="w-[31px] h-[31px] text-gray-800 dark:text-white m-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                    </svg>
                                    </button>
                                </div>
                            </td>

                        </tr>

                        <!-- Delete products -->

                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="w-[50px] h-[50px] text-red-800 dark:text-white m-2 mx-auto mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                        <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Yes, I'm sure
                                        </button>
                                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--End Delete products -->


                        <!-- Edit products  -->
                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8 py-4 ">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 ">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Edit Product
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Id</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Type product name" required="">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Type product name" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Rs.2999" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" required="">
                                                    <option selected="">Select category</option>
                                                    <option value="Necklace">Necklace</option>
                                                    <option value="Earnings">Earnings</option>
                                                    <option value="Ring">Ring</option>
                                                    <option value="Bracelet">Bracelet</option>
                                                    <option value="Watch">Watch</option>
                                                    <option value="Bangle">Bangle</option>
                                                    <option value="JewelrySet">Jewelry Set</option>
                                                    <option value="OxidizedSet">Oxidized Set</option>
                                                    <option value="HairAccessories">Hair Accessories</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Material</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" required="">
                                                    <option selected="">Select material</option>
                                                    <option value="TV">Gold-Plate</option>
                                                    <option value="PC">Silver-Plate</option>
                                                    <option value="GA">Acrylic</option>
                                                    <option value="PH">Resin</option>
                                                    <option value="TV">Polymer Clay</option>
                                                    <option value="PC">Glass Beads</option>
                                                    <option value="GA">Wood</option>
                                                    <option value="PH">Plastic</option>
                                                    <option value="PH">Fabric</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Color</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" required="">
                                                    <option selected="">Select color</option>
                                                    <option value="TV">Black</option>
                                                    <option value="PC">White</option>
                                                    <option value="GA">Brown</option>
                                                    <option value="PH">Gold</option>
                                                    <option value="TV">Silver</option>
                                                    <option value="PC">Gray</option>
                                                    <option value="GA">Orange</option>
                                                    <option value="PH">Yellow</option>
                                                    <option value="PH">Red</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Customization</label>
                                                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" required="">
                                                    <option selected="">Select Customization Option</option>
                                                    <option value="TV">Yes</option>
                                                    <option value="PC">No</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Write product description here" required=""></textarea>                    
                                            </div>
                                            
                                            <div class="col-span-2">
                                                <div class="mt-4">
                                                    <label for="images" class="block text-sm font-medium text-gray-700">Select Image Files (Max 5)</label>
                                                    <input id="images" name="images[]" type="file" accept="image/*" multiple class="mt-1 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm" required="">
                                                    <div id="selectedImages" class="mt-2 flex flex-col space-y-2"></div>
                                                </div>

                                                <script>
                                                    // Stop click event propagation on the images input
                                                    document.getElementById('images').addEventListener('click', function(event) {
                                                        event.stopPropagation();
                                                    });

                                                    document.getElementById('images').addEventListener('change', function(event) {
                                                        const fileList = event.target.files;
                                                        const selectedImagesContainer = document.getElementById('selectedImages');
                                                        selectedImagesContainer.innerHTML = ''; // Clear previous selection

                                                        if (fileList.length > 5) {
                                                            alert('Maximum 5 images allowed');
                                                            event.target.value = ''; // Clear the selected files
                                                            return;
                                                        }

                                                        for (let i = 0; i < fileList.length; i++) {
                                                            const fileName = fileList[i].name;
                                                            const fileItem = document.createElement('div');
                                                            fileItem.textContent = fileName;
                                                            fileItem.classList.add('text-sm', 'text-gray-700');
                                                            selectedImagesContainer.appendChild(fileItem);
                                                        }
                                                    });
                                                </script>

                                            </div>


                                            <div class="col-span-2 flex justify-center">
                                                <button type="submit" class="w-full md:w-auto text-white flex items-center bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm md:text-base px-5  md:py-1 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                                                    <svg class="w-[30px] h-[28px] text-gray-800 dark:text-white m-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                                    </svg>
                                                    Edit product
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                        <!-- Edit product end -->





                    <?php
                    }
                }
            ?>           
        </tbody>
    </table>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="../../js/adminaddcus.js"></script>

</body>

</html>
