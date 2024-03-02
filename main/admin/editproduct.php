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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




</head>

<body class="">

<?php                
    include("../../config/connect.php");
?>

<!-- Edit products  -->

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4 relative">
        <a href="home.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../../assests/logo/ethnic.jpeg" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ethnic Jewellery</span>
        </a>
        <div class="absolute top-0 right-0 flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <a href="adminpart.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-700 md:p-0 md:dark:hover:text-yellow-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5"/>
                </svg>
              </a>

                
            </ul>
        </div>

    </div>
</nav>

<?php            
if(!isset($_GET["id"]))
{
  echo ("<script>location.href='adminpart.php'</script>");
}
if(!empty($_GET["id"]))
{
  $id=$_GET["id"];

}
    else{
    echo ("<script>location.href='adminpart.php'</script>");
  }

                $product = "SELECT * FROM `product` WHERE `product`.`pro_id`='$id'";
                $executequery = mysqli_query($con,$product);
                if(mysqli_num_rows($executequery))
                {
                    while($row_of_product=mysqli_fetch_assoc($executequery))
                    {
                      
                        ?>

                            <div class="w-full max-w-xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-20">
                                <!-- Modal body -->
                                <form id="productForm" class="p-4 md:p-5">     
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="product-id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Id</label>
                                                <input type="text" name="product-id" id="product-id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" 
                                                readonly value="<?php echo$id; ?>" placeholder="Type product Id">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="product-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                                                <input type="text" name="product-name" id="product-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" 
                                                value="<?php echo($row_of_product["pro_name"]); ?>" placeholder="Type product name">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="product-price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                                                <input type="number" name="product-price" id="product-price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" 
                                                value="<?php echo($row_of_product["pro_price"]); ?>" placeholder="Rs.2999">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="product-category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                                                <select value="<?php echo($row_of_product["pro_category_id"]); ?>" id="product-category" name="product-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">

                                                    <?php
                                                     $category = "SELECT * FROM `category`";
                                                     $executequerycat = mysqli_query($con,$category);
                                                     if(mysqli_num_rows($executequerycat))
                                                     {
                                                         while($row_of_cat=mysqli_fetch_assoc($executequerycat))
                                                         {
                                                           
                                                             ?>
                                                    <option value="<?php echo($row_of_cat["category_id"]); ?>"><?php echo($row_of_cat["category_name"]); ?></option>
                                                    <?php
                                                         }
                                                        }
                                                        ?>
                                                </select>
                                            </div>

                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="product-material" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Material</label>
                                                <select value="<?php echo($row_of_product["pro_category_id"]); ?>" id="product-material" name="product-material" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">

                                                <?php
                                                     $materials = "SELECT * FROM `materials`";
                                                     $executequerymat = mysqli_query($con,$materials);
                                                     if(mysqli_num_rows($executequerymat))
                                                     {
                                                         while($row_of_cat=mysqli_fetch_assoc($executequerymat))
                                                         {
                                                           
                                                             ?>
                                                    <option value="Gold">Gold-Plate</option>
                                                    <?php
                                                         }
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                            
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="product-color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Color</label>
                                                <select id="product-color" name="product-color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">
                                                    <option selected="">Select color</option>
                                                    <option value="Black">Black</option>
                                                    <option value="White">White</option>
                                                    <option value="Brown">Brown</option>
                                                    <option value="Gold">Gold</option>
                                                    <option value="Silver">Silver</option>
                                                    <option value="Gray">Gray</option>
                                                    <option value="Orange">Orange</option>
                                                    <option value="Yellow">Yellow</option>
                                                    <option value="Red">Red</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="product-customization" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Customization</label>
                                                <select id="product-customization" name="product-customization" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">
                                                    <option selected="">Select Customization Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="product-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                                <textarea id="product-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Write product description here"></textarea>                    
                                            </div>
                                            
                                            <div class="col-span-2">
                                                <div class="mt-4">
                                                    <label for="images" class="block text-sm font-medium text-gray-700">Select Image Files (Max 5)</label>
                                                    <input id="images" name="images[]" type="file" accept="image/*" multiple class="mt-1 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
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
<?php
                    }
                }
                ?>

                                   
                               


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="../../js/adminaddcus.js"></script>

</body>

</html>
