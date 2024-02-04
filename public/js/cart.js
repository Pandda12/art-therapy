

    function updateCart() {
        $.ajax({
            url: '/cart/get-cart',
            method: "GET",
            success: function (data) {
                // Create a temporary element to hold the HTML content
                const tempElement = $('#cart_reload').html(data);

                // Extract the HTML content from the <body> tag
                const bodyHtml = tempElement.find("body").html();

                // Log or use the HTML content as needed
                console.log(bodyHtml);
            },
            error: function (error) {
                console.error("Error fetching HTML:", error);
            }
        });
    }

    function updateQty(id, action) {
        event.preventDefault();
        const input = $('input#' + id);
        let qty;

        if (action === 'minus') {
            qty = parseInt($(input).val()) - 1; // Convert to integer and decrement
        } else {
            qty = parseInt($(input).val()) + 1; // Convert to integer and increment
        }

        const max_qty = $(input).data('quantity');

        if (qty <= max_qty) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/cart/update-cart",
                method: "PATCH",
                data: {
                    'product_id': id,
                    'quantity': qty
                },
                success: function (response) {
                    if (response.status === 'success') {
                        // alert('Quantity updated');
                        updateCart();
                    } else if (response.status === 'max-qty') {
                        alert('Max quantity');
                    }
                },
                error: function (error) {
                    console.error("Error:", error);
                }
            });
        } else {
            alert('Max quantity');
        }
    }


    $("#update_cart").click(function () {
        updateCart()
    });
window.addEventListener('load', function () {
    updateCart();
})
