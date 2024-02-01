@extends('layouts.guest')
@section('title', 'Cart')
@section('content')
    <div class="breadcrumbs">
        <a href="{{ route('main') }}">Home</a>
        <span class="mx-5">/</span>
        <span>Cart</span>
    </div>
    <h1 class="shop-heading mt-16 mb-20 text-4xl uppercase">Cart</h1>

    @if( !empty( $cart ) )
        <form action="" method="post">
            @csrf
            <div class="flex flex-col gap-24">
                <div class="flex justify-between gap-5">
                    <div class="flex flex-col gap-5 max-w-6xl w-3/4">
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
                                        data-action="decrement"
                                        class="product_minus hover:text-white hover:bg-art-black w-10 border rounded-s-2xl cursor-pointer outline-none h-12"
                                        data-id="{{ $item['product_id'] }}"
                                    >
                                        <span class="m-auto text-2xl font-thin">−</span>
                                    </button>
                                    <label>
                                        <input
                                            type="number"
                                            id="product-count"
                                            class="outline-none focus:outline-none text-center w-20 border font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700 h-12 bg-transparent"
                                            name="custom-input-number"
                                            data-quantity="100"
                                            value="{{ $item['quantity'] }}">
                                    </label>
                                    <button
                                        data-action="increment"
                                        class="product_plus hover:text-white hover:bg-art-black w-10 border rounded-e-2xl cursor-pointer outline-none h-12"
                                        data-id="{{ $item['product_id'] }}"
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
                <div class="flex justify-between">
                    <div class="flex flex-col gap-5 max-w-6xl w-3/4">
                        <div class="flex flex-col">
                            <div class="mb-14 text-4xl uppercase">Delivery</div>
                            <div class="flex bg-purple-light rounded-2xl p-8">
                                <div class="w-1/3">
                                    Pickup
                                </div>
                                <div>
                                    address
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                        <div class="mb-14 text-4xl uppercase">Payment</div>
                        <div class="flex bg-purple-light rounded-2xl p-8">
                            <fieldset>
                            <div>
                                <input type="radio" id="huey" name="drone" value="huey" checked />
                                <label for="huey">Credit/debit card</label>
                            </div>
                            <div>
                                <input type="radio" id="dewey" name="drone" value="dewey" />
                                <label for="dewey">Сash</label>
                            </div>
                            </fieldset>
                        </div>
                    </div>
                    </div>
                    <div class="flex flex-col bg-purple-light rounded-2xl p-4">
                        <div class="mb-14 text-4xl uppercase">Your details</div>
                        <div class="flex flex-col">
                            <div class="flex flex-col">
                                <label for="first-name">First name</label>
                                <input type="text" name="first_name" id="first-name" />
                            </div>
                            <div class="flex flex-col">
                                <label for="second-name">Second name</label>
                                <input type="text" name="second_name" id="second-name" />
                            </div>
                            <div class="flex flex-col">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" id="phone" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        <div class="text-3xl">You cart is empty</div>
    @endif


    <pre>
{{ var_dump($cart) }}
    </pre>
    <script>

    </script>
@endsection
@push('script')
    <script src="{{ asset('js/cart.js') }}"></script>
@endpush
