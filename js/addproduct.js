$(document).ready(function() {
    $('product-form').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting

        // Remove any existing error messages
        $('.error-message').remove();

        // Validate Product Id
        let productId = $('#name').val().trim();
        if (productId === '') {
            $('#name').after('<div class="error-message">Please enter Product Id</div>');
            return;
        }

        // Validate Product Name
        let productName = $('#name').val().trim();
        if (productName === '') {
            $('#name').after('<div class="error-message">Please enter Product Name</div>');
            return;
        }

        // Validate Product Price
        let productPrice = $('#price').val().trim();
        if (productPrice === '') {
            $('#price').after('<div class="error-message">Please enter Product Price</div>');
            return;
        }

        // Validate Product Category
        let productCategory = $('#category').val();
        if (productCategory === 'Select category') {
            $('#category').after('<div class="error-message">Please select Product Category</div>');
            return;
        }

        // Validate Product Material
        let productMaterial = $('#material').val();
        if (productMaterial === 'Select material') {
            $('#material').after('<div class="error-message">Please select Product Material</div>');
            return;
        }

        // Validate Product Color
        let productColor = $('#color').val();
        if (productColor === 'Select color') {
            $('#color').after('<div class="error-message">Please select Product Color</div>');
            return;
        }

        // Validate Product Customization
        let productCustomization = $('#customization').val();
        if (productCustomization === 'Select Customization Option') {
            $('#customization').after('<div class="error-message">Please select Product Customization</div>');
            return;
        }

        // Validate Product Description
        let productDescription = $('#description').val().trim();
        if (productDescription === '') {
            $('#description').after('<div class="error-message">Please enter Product Description</div>');
            return;
        }

        // Validate Image Files
        let imageFiles = $('#images').prop('files');
        if (imageFiles.length === 0) {
            $('#images').after('<div class="error-message">Please select at least one Image File</div>');
            return;
        }

        // If all validations pass, you can submit the form
        $('product-form')[0].submit();
    });
});
