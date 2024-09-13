
/** Cart  */

$(document).ready(function() {
    // Function to update the cart count
    function updateCartCount() {
        $.ajax({
            url: '/shopcart/cart/count', // The endpoint that returns the number of items in the cart
            type: 'GET',
            success: function(response) {
                $('#cart-count').text(response.cartCount); // Update cart count in the floating button
            },
            error: function(error) {
                console.error('Error fetching cart count:', error);
            }
        });
    }
  
    // Call the updateCartCount function on page load
    updateCartCount();
    
    // Optionally, refresh the cart count periodically or on specific events
    // setInterval(updateCartCount, 10000); // Update every 10 seconds
  });