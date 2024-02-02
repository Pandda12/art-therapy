$(document).ready(function () {

    function minus(id){
        $.ajax({
            url: url,
            method: "GET",
            success: function (data) {
                // Create a temporary element to hold the HTML content
                var tempElement = $("<div>").html(data);

                // Extract the HTML content from the <body> tag
                var bodyHtml = tempElement.find("body").html();

                // Log or use the HTML content as needed
                console.log(bodyHtml);
            },
            error: function (error) {
                console.error("Error fetching HTML:", error);
            }
        });
    }

    $('.product_minus').click(function (e) {
        e.preventDefault();

        const id = $(this).data('id');

        console.log('Minus id: ' + id);

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        //
        // const product_id = $(this).data('id');
        //
        // console.log(product_id);
        //
        // $.ajax({
        //     url: "/add-to-cart",
        //     method: "POST",
        //     data: {
        //         'product_id': product_id,
        //         'quantity': 1
        //     },
        //     success: function (response) {
        //         alert('success');
        //         console.log(response);
        //
        //     },
        // });
    });
    $('.product_plus').click(function (e) {
        e.preventDefault();

        const id = $(this).data('id');

        console.log('Plus id: ' + id);

    });
    $('.delete').click(function (e) {
        e.preventDefault();

        const id = $(this).data('id');

        console.log('Delete: ' + id);

    });
    $("#update_cart").click(function () {
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
    });
});
