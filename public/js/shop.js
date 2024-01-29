$(document).ready(function () {
    $('.add-to-cart-btn').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const product_id = $(this).data('id');

        console.log(product_id);

        $.ajax({
            url: "/add-to-cart",
            method: "POST",
            data: {
                'product_id': product_id,
                'quantity': 1
            },
            success: function (response) {
                alert('success');
                console.log(response);

            },
        });
    });
});
