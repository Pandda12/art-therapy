@if ( !empty($cart) )
    <div class="flex justify-between gap-5">
        <div id="cart_products" class="flex flex-col gap-5 max-w-6xl w-3/4">
            @foreach( $cart['products'] as $item )
                <div class="flex bg-purple-light rounded-2xl p-4 justify-between">
                    <div>
                        <img
                            src="{{ $item['image'] }}"
                            alt="{{ $item['title'] }}"
                            style="height: 120px; width: 120px"
                        >
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>{{ $item['title'] }}</div>
                        <div>
                            <button class="delete" data-id="{{ $item['product_id'] }}">Delete</button>
                        </div>
                    </div>
                    <div class="flex">
                        <button
                            class="product_minus hover:text-white hover:bg-art-black w-10 border rounded-s-2xl cursor-pointer outline-none h-12"
                            onclick="updateQty({{ $item['product_id'] }}, 'minus')"
                        >
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <label>
                            <input
                                type="number"
                                id="{{ $item['product_id'] }}"
                                class="product-count outline-none focus:outline-none text-center w-20 border font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700 h-12 bg-transparent"
                                name="custom-input-number"
                                data-quantity="100"
                                value="{{ $item['quantity'] }}">
                        </label>
                        <button
                            class="product_plus hover:text-white hover:bg-art-black w-10 border rounded-e-2xl cursor-pointer outline-none h-12"
                            onclick="updateQty({{ $item['product_id'] }}, 'plus')"
                        >
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                    <div class="text-3xl">
                        {{ $item['price'] }}$
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex flex-col bg-purple-light rounded-2xl py-7 px-6 w-1/4">
            <div class="text-3xl">Total amount: <span id="total">40$</span></div>
            <div class="text-lg">Products: <span class="product_quantity">3</span></div>
            <div class="flex items-center">
                <input id="privacy-policy" type="checkbox" required/>
                <label for="privacy-policy">I agree with the terms of the Public Offer and the return policy</label>
            </div>
            <div>
                <input
                    class="py-2.5 px-16 rounded-3xl bg-art-black text-white"
                    type="submit"
                    value="Make an order">
            </div>
        </div>
    </div>
@else
    Cart empty
@endif
