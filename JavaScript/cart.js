function addCartElm(userId) {
    const productBox = $(event.target).closest('.box');
    const productId = productBox.data('product-id');
    const productName = productBox.find('h3').text();
    const productPrice = productBox.find('.price').text().replace('Rs ', '').replace('/-', '');
    const productImageUrl = productBox.find('.image img').attr('src');

    const data = {
        product_id: productId,
        product_name: productName,
        price: productPrice,
        image_url: productImageUrl,
        user_id: userId 
    };

    $.ajax({
        type: 'POST',
        url: '../Includes/add-to-cart.php',
        data: data,
        success: function(response) {
            console.log(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr, status, error);
        }
    });
}

function rmvItem(productName, userId) {
    const data = {
        product_name: productName,
        user_id: userId
    };

    $.ajax({
        type: 'POST',
        url: '../Includes/remove-from-cart.php',
        data: data,
        success: function(response) {
            console.log(response);
            // Reload the page or update the cart display
        },
        error: function(xhr, status, error) {
            console.error(xhr, status, error);
        }
    });
}

function checkout(userId, deliveryAddress) {
    const data = {
        user_id: userId,
        delivery_address: deliveryAddress
    };

    $.ajax({
        type: 'POST',
        url: '../Includes/checkout.php',
        data: data,
        success: function(response) {
            console.log(response);
            // Redirect or display a success message
        },
        error: function(xhr, status, error) {
            console.error(xhr, status, error);
        }
    });
}