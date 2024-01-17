$(document).ready(function () {
    $('#resetButton').click(function () {
        // Clear previous errors
        $('#emailError').text('');

        // Validate email
        var email = $('#email').val();
        if (!isValidEmail(email)) {
            $('#emailError').text('Please enter a valid email address.');
            return false; // Prevent form submission
        }

        // If validation passes, you can proceed with form submission
        // Uncomment the line below to submit the form
        $('#resetForm').unbind('submit').submit();
    });

    // Function to validate email address
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});