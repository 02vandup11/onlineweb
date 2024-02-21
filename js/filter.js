$(document).ready(function() {
    $('#productNameFilter').on('keyup', function() {
      var searchText = $(this).val().toLowerCase();
      $('.grid > div').each(function() {
        var productName = $(this).find('h3').text().toLowerCase();
        if (productName.includes(searchText)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
      // Show the filter section after search
      $('.mb-4').show();
    });
  });

  document.getElementById('priceRangeInput').addEventListener('input', function() {
    filterProductsByPrice(this.value);
  });

  function filterProductsByPrice(price) {
    let products = document.querySelectorAll('.bg-white');
    products.forEach(product => {
      let productPrice = parseInt(product.querySelector('.text-gray-700').innerText.replace('Rs.', ''));
      if (productPrice <= price) {
        product.style.display = 'block';
      } else {
        product.style.display = 'none';
      }
    });
  }

  function clearPriceFilter() {
    document.getElementById('priceRangeInput').value = 1500; // Set max value
    filterProductsByPrice(1500); // Show all products
  }

  
  