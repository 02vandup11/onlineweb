// $(document).ready(function () 
// {
//     $("form").submit(function (event) {
//         event.preventDefault();
//         if (validateForm()) {
//             // $("form").unbind("submit").submit();
//             $firstName=$("#cus_fname").val().trim();
//             $lastName = $("#cus_lname").val().trim();
//             $email = $("#cus_email").val().trim();
//             $phoneNumber = $("#cus_phone").val().trim();
//             $password = $("#cus_password").val().trim();

//             $.ajax({
//                 type: 'POST',
//                 url: '../ajax/adminaddcusajax.php',
//                 data: {
//                     firstName:$firstName,
//                     lastName:$lastName,
//                     email:$email,
//                     phoneNumber:$phoneNumber,
//                     password:$password
//                 },
//                 success: function(data) {
//                     if(data==1){
//                         jSuites.notification({
//                             message: 'Successfully Added Product',
//                         });
//                         window.location.href = "./admindisplaycus.php";
//                     }else{
//                         jSuites.notification({
//                             error: 1,
//                             message: 'Adding Product Failed',
//                         })
//                     }
                    
//                     console.log(data);
//                 },
//                 error: function() {
//                     console.log(response.status);
//                 },
//             })
//         }
//     });
// });