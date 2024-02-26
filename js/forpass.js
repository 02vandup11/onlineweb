
$(document).ready(function() {
    // Add validation rules to the form
    $("#resetForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            }
        },
        submitHandler: function(form) {
            // Your form submission code here, e.g., sending the email for password reset
            form.submit();
        }
    });

    // Validate OTP
    $("#verifyOtp").click(function() {
        var otp = $("#first").val() + $("#second").val() + $("#third").val() + $("#fourth").val();
        if (otp.length != 4 || !/^\d+$/.test(otp)) {
            $("#invalidotp").show();
        } else {
            $("#invalidotp").hide();
            // Code to verify OTP
        }
    });

    // Add validation rules for password change form
    $("#changepass").click(function() {
        var password = $("#password").val();
        var confirm_password = $("#confirm-password").val();
        if (password != confirm_password) {
            $("#password-error").text("Passwords do not match");
            return false;
        } else {
            $("#password-error").text("");
            // Your password change submission code here
            return true;
        }
    });
});

