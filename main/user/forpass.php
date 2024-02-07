<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add this to the head of your HTML file -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

    <title> Jewelry Shop</title>
    
</head>
<body class="">
    <!-- Navigation Bar -->
    <?php
        include("./layout/header/header.php");
    ?>

    <!-- component -->
    <div class="font-sans mt-20">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="relative sm:max-w-sm w-full">
                <div id="cardBackground1" class="card bg-yellow-800 shadow-lg w-full h-full rounded-3xl absolute transform -rotate-6"></div>
                <div id="cardBackground2" class="card bg-orange-800 shadow-lg w-full h-full rounded-3xl absolute transform rotate-6"></div>
                <div id="mainContainer" class="relative w-full rounded-3xl px-6 py-4 bg-gray-100 shadow-md">
                    <label for="resetHeading" class="block mt-3 text-xl text-gray-700 text-center font-semibold">
                        You have requested to reset your password!
                    </label>

                    <label for="resetInstructions" class="block mt-3 text-xs text-gray-400 text-center font-semibold">
                        We cannot send you your old password. A unique link to reset your password has been generated for you to reset your password. Click the following link and follow the instructions.
                    </label>

                    <form id="resetForm" class="mt-10">                 
                        <div class="mt-7">                
                            <input type="email" placeholder="Email" id="email" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">                           
                        </div>

                        <div class="mt-7">
                            <button id="resetButton" class="bg-yellow-950 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out transform hover:-translate-x hover:scale-105">
                                Reset Password
                            </button>
                        </div>

                        <div class="mt-7">
                            <div class="flex justify-center items-center">
                                <label class="mr-2" for="loginLink">Do you already have an account?</label>
                                <a id="loginLink" href="./login.php" class="text-blue-500 transition duration-500 ease-in-out transform hover:-translate-x hover:scale-105">
                                    Login Here
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt-7">
                            <div class="flex justify-center items-center">
                                <label class="mr-2" for="signupLink">Create Account?</label>
                                <a id="signupLink" href="./signup.php" class="text-blue-500 transition duration-500 ease-in-out transform hover:-translate-x hover:scale-105">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Add script for validation -->
        <script src="../../js/register.js"></script>

        <!-- Footer -->
        <?php
            include("./layout/footer/footer.php");
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>
