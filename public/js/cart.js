$(document).ready(function () {
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
});
