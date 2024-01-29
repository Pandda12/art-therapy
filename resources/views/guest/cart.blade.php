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
                <div class="flex justify-between">
                    <div class="flex flex-col gap-5 max-w-6xl w-3/4">
                        @foreach( $cart as $item )
                            <div class="flex bg-purple-light rounded-2xl p-4">
                                <div>
                                    <img
                                        src="{{ $item['image'] }}"
                                        alt="{{ $item['title'] }}"
                                        style="height: 120px; width: 120px"
                                    >
                                </div>
                                <div class="flex flex-col">
                                    <div>{{ $item['title'] }}</div>
                                    <div>
                                        <button>Delete</button>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button id="decrement-btn" data-action="decrement" class="hover:text-white hover:bg-art-black w-10 border rounded-s-2xl cursor-pointer outline-none h-12">
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
                                    <button id="increment-btn" data-action="increment" class="hover:text-white hover:bg-art-black w-10 border rounded-e-2xl cursor-pointer outline-none h-12">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>
                                <div>
                                    {{ $item['price'] }}$
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col bg-purple-light rounded-2xl py-7 px-6">
                        <div>Total amount: 40$</div>
                        <div>Products: 3</div>
                        <div>Delivery: 5$</div>
                        <div class="flex">
                            <label for="privacy-policy">I agree with the terms of the Public Offer and the return policy</label>
                            <input id="privacy-policy" type="checkbox" required/>
                        </div>
                        <div>
                            <input type="submit" value="Make an order">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <div class="mb-14 text-4xl uppercase">Delivery</div>
                        <fieldset class="flex flex-col">
                            <input id="delivery" type="radio">
                            <label for="delivery">Delivery</label>
                            <input id="courier" type="radio">
                            <label for="courier">Courier</label>
                            <input id="pickup" type="radio">
                            <label for="pickup">Pickup</label>
                        </fieldset>
                    </div>
                    <div></div>
                </div>
            </div>
        </form>
    @else
        <div class="text-3xl">You cart is empty</div>
    @endif


    <pre>

    </pre>
@endsection
