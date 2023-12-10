<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add this to the head of your HTML file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title> Jewelry Shop</title>
    
</head>
<body class="">
 <!-- Navigation Bar -->
 <?php
    include("./layout/header/header.php");
   ?>

<!-- component -->
<div class="font-sans mt-20  ">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-yellow-800 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-orange-800 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Registration
                </label>
                <form  class="mt-10">
                                    
                    <div>
                        <input type="text" placeholder="First Name" id="first-name" class=" mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">
                    </div>

                    <div class="mt-7">
                        <input type="text" placeholder="Last Name" id="last-name" class=" mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">
                    </div>
        
                    <div class="mt-7">                
                        <input type="email" placeholder="Email" id="email" class=" mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">                           
                    </div>

                    <div class="mt-7">
                        <input type="number" placeholder="Phone Number" id="phone-number" class=" mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">
                    </div>

                    <!-- <div class="mt-7">
                        <input type="text" placeholder="Username" id="username" class=" mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">
                    </div> -->

                    <div class="mt-7">                
                        <input type="password" placeholder="Password" id="password" class=" mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">                           
                    </div>

                    <div class="mt-7">                
                        <input type="password" placeholder="Confirm Password" id="confirm-password" class=" mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">                           
                    </div>

                    
        
                    <div class="mt-7">
                        <button class="bg-yellow-950 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Register
                        </button>
                    </div>
        <!--
                    <div class="flex mt-7 items-center text-center">
                        <hr class="border-gray-300 border-1 w-full rounded-md">
                        <label class="block font-medium text-sm text-gray-600 w-full">
                            Registrate con
                        </label>
                        <hr class="border-gray-300 border-1 w-full rounded-md">
                    </div>
        
                    <div class="flex mt-7 justify-center w-full">
                        <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Facebook
                        </button>
        
                        <button class="bg-red-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Google
                        </button>
                    </div>
                -->
                    <div class="mt-7">
                        <div class="flex justify-center items-center">
                            <label class="mr-2" >Do you already have an account?</label>
                            <a href="./login.php" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Login Here
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- Add script for validation -->
<script>
    $(document).ready(function () {
        $("form").submit(function (event) {
            event.preventDefault();
            if (validateForm()) {
                $("form").unbind("submit").submit();
            }
        });

        function validateForm() {
            $(".error-message").remove();
            let isValid = true;

            // Validate First Name
            const firstName = $("#first-name").val().trim();
            if (firstName === "") {
                $("#first-name").after('<div class="error-message text-red-500">First Name is required.</div>');
                isValid = false;
            }

            // Validate Last Name
            const lastName = $("#last-name").val().trim();
            if (lastName === "") {
                $("#last-name").after('<div class="error-message text-red-500">Last Name is required.</div>');
                isValid = false;
            }

            // Validate Email
            const email = $("#email").val().trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === "" || !emailRegex.test(email)) {
                $("#email").after('<div class="error-message text-red-500">Enter a valid Email address.</div>');
                isValid = false;
            }

            // Validate Phone Number
            const phoneNumber = $("#phone-number").val().trim();
            const phoneRegex = /^\d{10}$/;
            if (phoneNumber === "" || !phoneRegex.test(phoneNumber)) {
                $("#phone-number").after('<div class="error-message text-red-500">Enter a valid Phone Number (10 digits).</div>');
                isValid = false;
            }

            // Validate Username
            // const username = $("#username").val().trim();
            // if (username === "") {
            //     $("#username").after('<div class="error-message text-red-500">Username is required.</div>');
            //     isValid = false;
            // }

            // Validate Password
            const password = $("#password").val().trim();
            if (password === "") {
                $("#password").after('<div class="error-message text-red-500">Password is required.</div>');
                isValid = false;
            }

            // Validate Confirm Password
            const confirmPassword = $("#confirm-password").val().trim();
            if (confirmPassword === "" || confirmPassword !== password) {
                $("#confirm-password").after('<div class="error-message text-red-500">Passwords do not match.</div>');
                isValid = false;
            }

            return isValid;
        }
    });
</script>



      <!-- Footer -->
    <!-- component -->
    <?php
    include("./layout/footer/footer.php");
    ?>
</div>
</body>

</html>