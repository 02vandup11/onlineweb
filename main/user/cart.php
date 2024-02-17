<?php 
session_start(); 
if(isset($_SESSION["email"]) && isset($_SESSION["firstname"]) && isset($_SESSION["lastname"]) && isset($_SESSION["type"])  )
{
    $email = $_SESSION["email"];
    $firstname=$_SESSION["firstname"];
    $lastname=$_SESSION["lastname"];
}else{
    echo ("<script>location.href='login.php'</script>");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


</head>
<body onload="getcartdetails()">

<?php
    include("./layout/header/header.php");
  ?>

<div class="font-[sans-serif] mt-10">
      <div class="grid lg:grid-cols-3">
        <div class="lg:col-span-2 p-10 bg-white overflow-x-auto">
          <div class="flex border-b pb-4">
            <h2 class="text-2xl font-extrabold text-[#333] flex-1">Shopping Cart</h2>
            <h3 class="text-xl font-extrabold text-[#333]">3 Items</h3>
          </div>
          <div>
            <table class="mt-6 w-full border-collapse divide-y">
              <thead class="whitespace-nowrap text-left">
                <tr>
                  <th class="text-base text-[#333] p-4">Description</th>
                  <th class="text-base text-[#333] p-4">Quantity</th>
                  <th class="text-base text-[#333] p-4">Price</th>
                </tr>
              </thead>
              <tbody class="whitespace-nowrap divide-y" id="cart_container">
                <tr>
                  <td class="py-6 px-4">
                    <div class="flex items-center gap-6 w-max">
                      <div class="h-36 shrink-0">
                        <img src='https://readymadeui.com/images/product6.webp' class="w-full h-full object-contain" />
                      </div>
                      <div>
                        <p class="text-md font-bold text-[#333]">Black T-Shirt</p>
                        <button type="button" class="mt-4 font-semibold text-red-400 text-sm">
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
                    <h4 class="text-md font-bold text-[#333]">$18.5</h4>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="bg-gray-50 p-10">
          <h3 class="text-xl font-extrabold text-[#333] border-b pb-4">Order Summary</h3>
          <ul class="text-[#333] divide-y mt-6">
            <li class="flex flex-wrap gap-4 text-md py-4 font-bold">Total <span class="ml-auto">Rs.<span id="cart_price"></span></span></li>
          </ul>
          <button type="button" id="rzp-button1" class="mt-6 text-md px-6 py-2.5 w-full bg-amber-800 hover:bg-amber-700 text-white rounded">Check
            out</button>

        </div>
      </div>
    </div>
    <input type="text" id="user_email" class="hidden" value="<?php echo($email); ?>">

    <?php
    include("./layout/footer/footer.php");
    ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


</body>
</html>