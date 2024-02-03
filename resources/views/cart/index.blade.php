@push('additional_meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
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
                <div id="cart_reload">
                    <div role="status" class="flex justify-center">
                        <svg aria-hidden="true" class="inline w-10 h-10text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                        </svg>
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
        <button id="update_cart">Update</button>
    @else
        <div class="text-3xl">You cart is empty</div>
    @endif

    <pre>
{{ var_dump($cart) }}
    </pre>
    <script>
        $(document).ready(function () {

        });
    </script>
@endsection
@push('script')
    <script src="{{ asset('js/cart.js') }}"></script>
@endpush
