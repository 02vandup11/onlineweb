<?php
include("../../config/connect.php");
if(!empty($_POST["data"])){
    $data = $_POST["data"];
    // Example fixing the error
$decodedData = json_decode($data, true);

    // Check if decoding was successful
    if ($decodedData !== null) {
        // Access individual elements
        $cart = $decodedData['cart'];
        if (empty($cart)) {
            // If the cart is empty, display a message
            echo "Your cart is empty!!";
        } else {
        // Loop through the cart items
        foreach ($cart as $item) {

            $pro_id = $item['pro_id'];

            $get_product = "SELECT * FROM `product` WHERE pro_id = '$pro_id' ";
            $execute_get_product = mysqli_query($con,$get_product);
            if(mysqli_num_rows($execute_get_product)>0)
            {
                while($row=mysqli_fetch_assoc($execute_get_product))
                {
                    ?>

                <tr>
                  <td class="py-6 px-4">
                    <div class="flex items-center gap-6 w-max">
                      <div class="h-36 shrink-0">
                        <?php
                            $imageQuery = "SELECT image_name 
                            FROM image 
                            WHERE image_product_id = $pro_id 
                            LIMIT 1";
                            $execute_image = mysqli_query($con,$imageQuery);
                            if(mysqli_num_rows($execute_image))
                            {
                                while($row_of_image=mysqli_fetch_assoc($execute_image))
                                {
                                ?>
                                    <img src=" <?php echo($row_of_image["image_name"]); ?>" alt="Product 1" class="h-full w-full object-contain" />
                                <?php
                                
                                }
                            }

                                ?>
                     </div>
                      <div>
                        <p class="text-md font-bold text-[#333]"><?php echo($row["pro_name"]); ?></p>
                        <button type="button" class="mt-4 font-semibold text-red-400 text-sm"  onclick="deletefromcart(<?php echo $row['pro_id']; ?>,'c')">
                          Remove
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="py-6 px-4">
                    <div class="flex divide-x border w-max">
                      <button type="button" class="bg-gray-100 px-4 py-2 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 124 124">
                          <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                        </svg>
                      </button>
                      <button type="button" class="bg-transparent px-4 py-2 font-semibold text-[#333] text-md">
                        1
                      </button>
                      <button type="button" class="bg-gray-800 text-white px-4 py-2 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current" viewBox="0 0 42 42">
                          <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                        </svg>
                      </button>
                    </div>
                  </td>
                  <td class="py-6 px-4">
                    <h4 class="text-md font-bold text-[#333]">Rs.<span class="item_price"><?php echo($row["pro_price"]); ?> </span></h4>
                  </td>
                </tr>

                
                      <?php
                    
                }
            }
          
            

            // Use the values as needed
            // echo "product ID: $pro_id, User Email: $user_email, Type: $type<br>";
        }
    }
    } else {
        // Handle JSON decoding error
        echo 'Error decoding JSON data.';
    }



}


?>