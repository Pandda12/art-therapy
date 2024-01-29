@extends('layouts.guest')
@section('content')
    <x-shop>
        @foreach($products as $product)
            <a href="{{ route('guest.product.show', $product->id) }}" class="group relative bg-purple-light p-5 rounded-2xl">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="{{ $product->getImage() }}" alt="{{ $product->title }}">
                </div>
                <h3 class="mt-10 text-lg">{{ $product->title }}</h3>
                <div class="flex justify-between mt-5   ">
                    <div class="price text-2xl">
                        {{ $product->price }}$
                    </div>
                    <button class="add-to-cart" data-id="{{ $product->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="33" viewBox="0 0 31 33" fill="none">
                            <path d="M5.14284 5.94443H29.9999L26.8928 20.3888H8.24997M26.8928 24.8332H9.28568L4.10713 1.5H1" stroke="#13100E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M24.8209 31.5001C25.9649 31.5001 26.8924 30.5052 26.8924 29.2779C26.8924 28.0506 25.9649 27.0557 24.8209 27.0557C23.6769 27.0557 22.7495 28.0506 22.7495 29.2779C22.7495 30.5052 23.6769 31.5001 24.8209 31.5001Z" stroke="#13100E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.3571 31.5001C12.5011 31.5001 13.4285 30.5052 13.4285 29.2779C13.4285 28.0506 12.5011 27.0557 11.3571 27.0557C10.2131 27.0557 9.28564 28.0506 9.28564 29.2779C9.28564 30.5052 10.2131 31.5001 11.3571 31.5001Z" stroke="#13100E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </a>
        @endforeach
    </x-shop>

@endsection
