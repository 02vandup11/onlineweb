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



<!-- button to add product -->
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex m-4 block text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 me-2" aria-hidden="true"  viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm4,11H13v3a1,1,0,0,1-2,0V13H8a1,1,0,0,1,0-2h3V8a1,1,0,0,1,2,0v3h3a1,1,0,0,1,0,2Z"/></svg>
        Add Product  
    </button>

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

                <th scope="col" class="px-3 py-3">
                    Image
                </th>

                <th scope="col" class="px-3 py-3">
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
                        
                            <!-- <td class="px-4 py-4 flex ">
                                

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description"> 

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <svg width="64px" height="64px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13 4H8.8C7.11984 4 6.27976 4 5.63803 4.32698C5.07354 4.6146 4.6146 5.07354 4.32698 5.63803C4 6.27976 4 7.11984 4 8.8V15.2C4 16.8802 4 17.7202 4.32698 18.362C4.6146 18.9265 5.07354 19.3854 5.63803 19.673C6.27976 20 7.11984 20 8.8 20H15.2C16.8802 20 17.7202 20 18.362 19.673C18.9265 19.3854 19.3854 18.9265 19.673 18.362C20 17.7202 20 16.8802 20 15.2V11" stroke="#000000" stroke-width="1.392" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 16L8.29289 11.7071C8.68342 11.3166 9.31658 11.3166 9.70711 11.7071L13 15M13 15L15.7929 12.2071C16.1834 11.8166 16.8166 11.8166 17.2071 12.2071L20 15M13 15L15.25 17.25" stroke="#000000" stroke-width="1.392" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M18 8V3M18 3L16 5M18 3L20 5" stroke="#000000" stroke-width="1.392" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </td> -->

                            <td class="px-4 py-4 ">
                                <div class="">
                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description"> 

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">

                                <img class="size-6 m-1" src="https://media.istockphoto.com/id/1993984108/photo/religious-necklace-with-christ-on-the-cross.jpg?s=612x612&w=0&k=20&c=vCo0mliMZu9Y2TfztmRVpf0YW9rDO27N9HcjRuzIDhc=" alt="image description">
                                </div>
                            </td>
                        

                            <!-- <td class="flex items-center px-4 py-2">
                                <a href="editproduct.php?pro_id=$row[pro_id]" class="font-medium text-amber-600 dark:text-amber-500 hover:underline">Edit</a>
                                <a href="deleteproduct.php?pro_id=$row[pro_id]" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                            </td> -->

                            <td class="p-2">
                                <div class="flex justify-center">
                                    <button type="button"  onclick="delete_chan(<?php echo $productid; ?>)">
                                        <svg class="h-8 w-8 rounded-full p-1 text-gray-800 hover:bg-gray-100 hover:text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        
                                    </button>
                                    <button id="editbtn" data-modal-target="crud-modal1" data-modal-toggle="crud-modal1" onclick="update_chan(<?php echo $productid; ?>)">                                    
                                        <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-amber-600" fill="#000000" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                        <title>edit</title>
                                                        <path d="M17.438 22.469v-4.031l2.5-2.5v7.344c0 1.469-1.219 2.688-2.656 2.688h-14.625c-1.469 0-2.656-1.219-2.656-2.688v-14.594c0-1.469 1.188-2.688 2.656-2.688h14.844v0.031l-2.5 2.469h-11.5c-0.531 0-1 0.469-1 1.031v12.938c0 0.563 0.469 1 1 1h12.938c0.531 0 1-0.438 1-1zM19.813 7.219l2.656 2.656 1.219-1.219-2.656-2.656zM10.469 16.594l2.625 2.656 8.469-8.469-2.625-2.656zM8.594 21.094l3.625-0.969-2.656-2.656z"></path>
                                                        </svg>
                                    </button>
                                </div>
                            </td>

                        </tr>
                    <?php
                    }
                }
            ?>   
        </tbody>
    </table>
</div>

<!-- update product model main -->
<!-- Main modal -->
<!-- button to edit product -->

   
<div id="crud-modal1" data-modal-target="crud-modal1" data-modal-toggle="crud-modal1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Product Details
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" >
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
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Customization Option</option>
                            <option value="TV">Yes</option>
                            <option value="PC">No</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Write product description here"></textarea>                    
                    </div>
                    
                    <div class="col-span-2">
                        <div class="mt-4">
                            <label for="images" class="block text-sm font-medium text-gray-700">Select Image Files (Max 5)</label>
                            <input id="images" name="images[]" type="file" accept="image/*" multiple class="mt-1 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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

                    <div class="col-span-2">  
                        <button type="submit" class="w-full text-white flex items-center bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Edit product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  




<!-- add product Main modal -->
<div id="crud-modal" data-modal-target="crud-modal" data-modal-toggle="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" >
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
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Customization Option</option>
                            <option value="TV">Yes</option>
                            <option value="PC">No</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Write product description here"></textarea>                    
                    </div>
                    
                    <div class="col-span-2">
                        <div class="mt-4">
                            <label for="images" class="block text-sm font-medium text-gray-700">Select Image Files (Max 5)</label>
                            <input id="images" name="images[]" type="file" accept="image/*" multiple class="mt-1 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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





                    <div class="col-span-2">  
                        <button type="submit" class="w-full text-white flex items-center bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add new product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>



<!-- <script>
    $(document).ready(function () {
        $('#file-input').change(function () {
            $('#image-preview').empty();
            $('#base64-input').empty();
            const files = $(this)[0].files;
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imageUrl = e.target.result;
                    const imageElement = '<div class="image-container"><img src="' + imageUrl + '" class="preview-image"><p class="image-url">' + imageUrl + '</p></div>';
                    $('#image-preview').append(imageElement);
                    const base64 = imageUrl.split(',')[1];
                    const base64Input = '<input type="text" name="base64_' + i + '" value="' + base64 + '" readonly>';
                    $('#base64-input').append(base64Input);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script> -->





<script src="../../js/adminaddcus.js"></script>

</body>

</html>
