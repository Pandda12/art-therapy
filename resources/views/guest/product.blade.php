@push('additional_meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush
@extends('layouts.guest')
@section('content')
    <div id="{{ $product->id }}">
        <div class="product-breadcrumbs">
            <a href="{{ route('main') }}">Home</a>
            <span class="mx-5">/</span>
            <a href="{{ route('shop.index') }}">Products</a>
            <span class="mx-5">/</span>
            <span>{{ $product->title }}</span>
        </div>
    </div>
    <div class="flex justify-between mt-16">
        <div class="flex flex-col w-1/2">
            <div class="flex flex-col mb-20 ">
                <h1 class="text-3xl uppercase mb-12">{{ $product->title }}</h1>
                <div class="text-4xl mb-12">{{ $product->price }}$</div>
                @if( isset($product->description) )
                    <div class="flex flex-col mb-12">
                        <div class="text-xl font-bold mb-4">Product description</div>
                        <div>{{ $product->description }}</div>
                    </div>
                @endif
                <div class="input-counter mb-12">
                    <div class="flex flex-row rounded-lg relative bg-transparent mt-1">
                        <button id="decrement-btn" data-action="decrement" class="hover:text-white hover:bg-art-black w-10 border rounded-s-2xl cursor-pointer outline-none h-12">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <label>
                            <input type="number" id="product-count" class="outline-none focus:outline-none text-center w-20 border font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700 h-12 bg-transparent" name="custom-input-number" data-quantity="{{ $product->quantity }}" value="1"></input>
                        </label>
                        <button id="increment-btn" data-action="increment" class="hover:text-white hover:bg-art-black w-10 border rounded-e-2xl cursor-pointer outline-none h-12">
                            <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button
                        class="add-to-cart-btn py-2.5 px-16 rounded-3xl bg-art-black text-white"
                        data-id="{{ $product->id }}"
                    >
                        Add to cart
                    </button>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="text-xl font-bold mb-4">Specifications</div>
                <table>
                    @if($product->brand)
                        <tr>
                            <td>Brand</td>
                            <td><a href="{{ route('guest.brand.show', $product->brand->id) }}">{{ $product->brand->title }}</a></td>
                        </tr>
                    @endif
                    @if($product->category)
                        <tr>
                            <td>Product Category</td>
                            <td><a href="{{ route('guest.category.show', $product->category->id) }}">{{ $product->category->title }}</a></td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
        <div class="product-img flex justify-center  w-2/5">
            <img
                src="{{ asset('images/products/' . $product->image) }}"
                alt="{{ $product->title }}"
                class="py-10 px-14 object-contain bg-purple-light rounded-3xl"
                style="max-height: 500px; max-width: 500px"
            >
        </div>
    </div>
        <script>
            const decrementButtons = document.getElementById('decrement-btn');
            const incrementButtons = document.getElementById('increment-btn');
            const productCount = document.getElementById('product-count');

            decrementButtons.addEventListener('click', function () {
                let value = productCount.value;

                if ( value > 1 ) {
                    value--;
                    productCount.value = value;
                }
            })

            incrementButtons.addEventListener('click', function () {
                const qty = productCount.dataset.quantity;
                let value = productCount.value;

                if ( value !== qty ) {
                    value++;

                    productCount.value = value;
                }

            });

        </script>
@endsection
@push('script')
    <script src="{{ asset('js/product.js') }}"></script>
@endpush
