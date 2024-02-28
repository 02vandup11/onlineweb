<?php 
session_start(); 
if(isset($_SESSION["email"]) && isset($_SESSION["firstname"]) && isset($_SESSION["lastname"]) && isset($_SESSION["type"])  )
{
    $email = $_SESSION["email"];
    $firstname=$_SESSION["firstname"];
    $lastname=$_SESSION["lastname"];
    $_SESSION["type"] = "c";
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
</head>
<body>

<div
      class="fixed inset-0 p-4 flex flex-wrap justify-end items-end w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif]">
      <div class="w-full max-w-lg bg-white shadow-lg rounded-md p-6 relative">
        <div class="flex items-center pb-3 border-b">
          <h3 class="text-xl font-semibold flex-1">Personalization</h3>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 ml-2 cursor-pointer shrink-0 fill-black hover:fill-red-500"
            viewBox="0 0 320.591 320.591">
            <path
              d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
              data-original="#000000"></path>
            <path
              d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
              data-original="#000000"></path>
          </svg>
        </div>
        <div class="my-8 text-center">
          <p class="text-sm text-gray-500 mt-4">Add a personal touch to your product with customization options.</p>

            <input type="email" placeholder="Enter mold"
            class="px-4 py-3 mt-6 bg-[#f0f1f2] text-black w-full text-sm outline-[#333] rounded" />
            
            
            <label for="underline_select" class="sr-only">Underline select</label>
            <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected>Choose a country</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>


        </div>
        <div class="border-t flex justify-end pt-6 space-x-4">
          <button type="button"
            class="px-6 py-2 rounded-md text-black text-sm font-semibold border-none outline-none bg-gray-200 hover:bg-gray-300 active:bg-gray-200">Cancel</button>
          <button type="button"
            class="px-6 py-2 rounded-md text-white text-sm font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">Save</button>
        </div>
      </div>
    </div>
             
</body>
</html>