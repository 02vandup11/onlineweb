<script>
    $(document).ready(function() {
        $("#resetButton").click(function() {
            var email = $("#email").val();
            
            // Email Validation
            if(email === "") {
                $("#emailError").text("Please enter your email address.");
                return false;
            } else if (!isValidEmail(email)) {
                $("#emailError").text("Please enter a valid email address.");
                return false;
            } else {
                $("#emailError").text(""); // Clear error message if email is valid
            }
            
            // Other validations...
        });

        $("#changepass").click(function() {
            var password = $("#password").val();
            var confirmPassword = $("#confirm-password").val();

            // Password Validation
            if(password === "") {
                $("#passwordError").text("Please enter a new password.");
                return false;
            } else if(password.length < 8) {
                $("#passwordError").text("Password must be at least 8 characters long.");
                return false;
            } else {
                $("#passwordError").text(""); // Clear error message if password is valid
            }

            // Confirm Password Validation
            if(confirmPassword === "") {
                $("#confirmPasswordError").text("Please confirm your new password.");
                return false;
            } else if(confirmPassword !== password) {
                $("#confirmPasswordError").text("Passwords do not match.");
                return false;
            } else {
                $("#confirmPasswordError").text(""); // Clear error message if passwords match
            }

            // Other validations...
        });

        // Function to validate email format
        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });
</script>

<!-- Validation Error Messages -->
<span id="emailError" class="text-red-500"></span>
<span id="passwordError" class="text-red-500"></span>
<span id="confirmPasswordError" class="text-red-500"></span>
