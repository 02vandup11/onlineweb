<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<?php
    include("./layout/header/header.php");
    include("../../config/connect.php");
    ?>

<?php 

  if(!isset($_GET["category"])&&!isset($_GET["id"]))
  {
    echo ("<script>location.href='home.php'</script>");
  }
  if(!empty($_GET["category"])&&!empty($_GET["id"]))
  {
    $category=$_GET["category"];
    $id=$_GET["id"];

  }
  	else{
      echo ("<script>location.href='home.php'</script>");
    }

  
?>



<div class="font-[sans-serif] mt-16">
      <div class="p-6 lg:max-w-6xl max-w-2xl mx-auto">
        <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-8">
          <div class="w-full lg:sticky top-0 sm:flex gap-2">
            <div class="sm:space-y-3 w-16 max-sm:flex max-sm:mb-4 max-sm:gap-4">
              <img src="https://readymadeui.com/images/product1.webp" alt="Product1" class="w-full cursor-pointer outline" />
              <img src="https://readymadeui.com/images/product6.webp" alt="Product2" class="w-full cursor-pointer" />
              <img src="https://readymadeui.com/images/product7.webp" alt="Product3" class="w-full cursor-pointer" />
              <img src="https://readymadeui.com/images/product3.webp" alt="Product4" class="w-full cursor-pointer" />
            </div>
            <img src="https://readymadeui.com/images/product2.webp" alt="Product" class="w-4/5 rounded object-cover" />
          </div>
          <div>
            <h2 class="text-2xl font-extrabold text-gray-800">Adjective Attire | T-shirt</h2>
            <div class="flex flex-wrap gap-4 mt-4">
              <p class="text-gray-800 text-xl font-bold">$12</p>
              <p class="text-gray-400 text-xl"><strike>$16</strike> <span class="text-sm ml-1">Tax included</span></p>
            </div>
            <div class="flex space-x-2 mt-4">
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
            </div>
            <!-- <div class="mt-8">
              <h3 class="text-lg font-bold text-gray-800">Sizes</h3>
              <div class="flex flex-wrap gap-4 mt-4">
                <button type="button" class="w-12 h-12 border-2 hover:border-gray-800 font-bold text-sm rounded-full flex items-center justify-center shrink-0">SM</button>
                <button type="button" class="w-12 h-12 border-2 hover:border-gray-800 border-gray-800 font-bold text-sm rounded-full flex items-center justify-center shrink-0">MD</button>
                <button type="button" class="w-12 h-12 border-2 hover:border-gray-800 font-bold text-sm rounded-full flex items-center justify-center shrink-0">LG</button>
                <button type="button" class="w-12 h-12 border-2 hover:border-gray-800 font-bold text-sm rounded-full flex items-center justify-center shrink-0">XL</button>
              </div>
              <button type="button" class="w-full mt-4 px-4 py-3 bg-gray-800 hover:bg-gray-900 text-white font-bold rounded">Add to cart</button>
            </div> -->
            <div class="mt-8">
              <h3 class="text-lg font-bold text-gray-800">About the item</h3>
              <ul class="space-y-3 list-disc mt-4 pl-4 text-sm text-gray-800">
                <li>A gray t-shirt is a wardrobe essential because it is so versatile.</li>
                <li>Available in a wide range of sizes, from extra small to extra large, and even in tall and petite sizes.</li>
                <li>This is easy to care for. They can usually be machine-washed and dried on low heat.</li>
                <li>You can add your own designs, paintings, or embroidery to make it your own.</li>
              </ul>
            </div>

            <button type="button"
                class="px-6 py-2.5 text-white text-sm tracking-wider font-semibold border-none outline-none bg-gray-600 hover:bg-gray-700 active:bg-gray-600 m-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="#fff" class="mr-2 inline animate-spin"
                viewBox="0 0 26.349 26.35">
                <circle cx="13.792" cy="3.082" r="3.082" data-original="#000000" />
                <circle cx="13.792" cy="24.501" r="1.849" data-original="#000000" />
                <circle cx="6.219" cy="6.218" r="2.774" data-original="#000000" />
                <circle cx="21.365" cy="21.363" r="1.541" data-original="#000000" />
                <circle cx="3.082" cy="13.792" r="2.465" data-original="#000000" />
                <circle cx="24.501" cy="13.791" r="1.232" data-original="#000000" />
                <path
                    d="M4.694 19.84a2.155 2.155 0 0 0 0 3.05 2.155 2.155 0 0 0 3.05 0 2.155 2.155 0 0 0 0-3.05 2.146 2.146 0 0 0-3.05 0z"
                    data-original="#000000" />
                <circle cx="21.364" cy="6.218" r=".924" data-original="#000000" />
                </svg>
                Personalization
            </button>

            <div class="max-w-md">
              <h3 class="text-lg font-bold text-gray-800">Reviews(10)</h3>
              <div class="space-y-3 mt-4">
                <div class="flex items-center">
                  <p class="text-sm text-gray-800 font-bold">5.0</p>
                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                  </svg>
                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                    <div class="w-2/3 h-full rounded bg-gray-800"></div>
                  </div>
                  <p class="text-sm text-gray-800 font-bold ml-3">66%</p>
                </div>
                <div class="flex items-center">
                  <p class="text-sm text-gray-800 font-bold">4.0</p>
                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                  </svg>
                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                    <div class="w-1/3 h-full rounded bg-gray-800"></div>
                  </div>
                  <p class="text-sm text-gray-800 font-bold ml-3">33%</p>
                </div>
                <div class="flex items-center">
                  <p class="text-sm text-gray-800 font-bold">3.0</p>
                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                  </svg>
                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                    <div class="w-1/6 h-full rounded bg-gray-800"></div>
                  </div>
                  <p class="text-sm text-gray-800 font-bold ml-3">16%</p>
                </div>
                <div class="flex items-center">
                  <p class="text-sm text-gray-800 font-bold">2.0</p>
                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                  </svg>
                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                    <div class="w-1/12 h-full rounded bg-gray-800"></div>
                  </div>
                  <p class="text-sm text-gray-800 font-bold ml-3">8%</p>
                </div>
                <div class="flex items-center">
                  <p class="text-sm text-gray-800 font-bold">1.0</p>
                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                  </svg>
                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                    <div class="w-[6%] h-full rounded bg-gray-800"></div>
                  </div>
                  <p class="text-sm text-gray-800 font-bold ml-3">6%</p>
                </div>
              </div>
              <div class="flex items-start mt-8">
                <img src="https://readymadeui.com/team-2.webp" class="w-12 h-12 rounded-full border-2 border-white" />
                <div class="ml-3">
                  <h4 class="text-sm font-bold">John Doe</h4>
                  <div class="flex space-x-1 mt-1">
                    <svg class="w-4 fill-gray-800" viewBox="0 0 14 13" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                    </svg>
                    <svg class="w-4 fill-gray-800" viewBox="0 0 14 13" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                    </svg>
                    <svg class="w-4 fill-gray-800" viewBox="0 0 14 13" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                    </svg>
                    <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                    </svg>
                    <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                    </svg>
                    <p class="text-xs !ml-2 font-semibold">2 mins ago</p>
                  </div>
                  <p class="text-xs mt-4">The service was amazing. I never had to wait that long for my food. The staff was friendly and attentive, and the delivery was impressively prompt.</p>
                </div>
              </div>
              <button type="button" class="w-full mt-8 px-4 py-2 bg-transparent border-2 border-gray-800 text-gray-800 font-bold rounded">Read all reviews</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include("./layout/footer/footer.php");
    ?>

</body>
</html>