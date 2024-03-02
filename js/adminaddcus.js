
    $(document).ready(function() {
        // Function to validate the form
        function validateForm() {

           
            let isValid = true;

            // Reset error messages
            $('.error-msg').remove();


            // Validate Product Name
            if ($('#product-name').val().trim() === '') {
                $('#product-name').after('<p class="error-msg text-red-500">Product Name is required</p>');
                isValid = false;
            }

            // Validate Product Price
            if ($('#product-price').val().trim() === '') {
                $('#product-price').after('<p class="error-msg text-red-500">Product Price is required</p>');
                isValid = false;
            }

            // Validate Product Category
            if ($('#product-category').val() === '' || $('#product-category').val() === 'Select category') {
              $('#product-category').after('<p class="error-msg text-red-500">Please select a Product Category</p>');
              isValid = false;
          }

          // Validate Product Material
          if ($('#product-material').val() === '' || $('#product-material').val() === 'Select material') {
              $('#product-material').after('<p class="error-msg text-red-500">Please select a Product Material</p>');
              isValid = false;
          }

          // Validate Product Color
          if ($('#product-color').val() === '' || $('#product-color').val() === 'Select color') {
              $('#product-color').after('<p class="error-msg text-red-500">Please select a Product Color</p>');
              isValid = false;
          }

          // Validate Product Customization
          if ($('#product-customization').val() === '' || $('#product-customization').val() === 'Select Customization Option') {
              $('#product-customization').after('<p class="error-msg text-red-500">Please select a Product Customization Option</p>');
              isValid = false;
          }

            // Validate Product Description
            if ($('#product-description').val().trim() === '') {
                $('#product-description').after('<p class="error-msg text-red-500">Product Description is required</p>');
                isValid = false;
            }


            // Validate Image
            const fileList = $('#images')[0].files;
            if (fileList.length === 0) {
                $('#images').after('<p class="error-msg text-red-500">Please select at least one image</p>');
                isValid = false;
            } else if (fileList.length > 5) {
                $('#images').after('<p class="error-msg text-red-500">Maximum 5 images allowed</p>');
                isValid = false;
            }

            return isValid;
        }
        

        // Submit event handler for the form
        $('#productForm').submit(function(event) {
            if (!validateForm()) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
            else
            {
                event.preventDefault(); // Prevent form submission if validation fails

                var product_id = $('#product-id').val().trim();
                var product_name = $('#product-name').val().trim();
                var product_price = $('#product-price').val().trim();
                var product_category = $('#product-category').val().trim();
                var product_material = $('#product-material').val().trim();
                var product_color = $('#product-color').val().trim();
                var product_customization = $('#product-customization').val().trim();
                var product_description = $('#product-description').val().trim();
                var images = $('#images').val().trim();
    
                   

                $.ajax({
                    type: 'POST',
                    url: '../ajax/adminaddcusajax.php',
                    data: {
                        product_id:product_id,
                        product_name:product_name,
                        product_price:product_price,
                        product_category:product_category,
                        product_material:product_material,
                        product_color:product_color,
                        product_customization:product_customization,
                        product_description:product_description,
                        images:images
                    },
                    success: function(data) {
                        if(data==1){
                            jSuites.notification({
                                message: 'Successfully Added a Product',
                            });
                            // Delay reload by 2 seconds
                        setTimeout(function() {
                        }, 2000);
                        }else{
                            jSuites.notification({
                                error: 1,
                                message: 'Failed to Add a Product',
                            })
                        }
                        
                        console.log(data);
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }
        });
    });
