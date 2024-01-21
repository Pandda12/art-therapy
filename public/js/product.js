$(document).ready(function () {
    $('.add-to-cart-btn').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const product_id = $(this).data('id');
        const quantity = parseInt($('.input-counter input').val());

        console.log(product_id);
        console.log(quantity);

        $.ajax({
            url: "/add-to-cart",
            method: "POST",
            data: {
                'product_id': product_id,
                'quantity': quantity
            },
            success: function (response) {
                alert('success');
                console.log(response);
                // alertify.set('notifier','position','top-right');
                // alertify.success(response.status);
            },
        });
    });
});
