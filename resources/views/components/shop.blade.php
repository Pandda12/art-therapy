@props(['item'])
<div class="breadcrumbs">
    <a href="{{ route('main') }}">Home</a>
    <span class="mx-5">/</span>
    <a href="{{ route('shop.index') }}">Products</a>
    @if( isset($item) )
        <span class="mx-5">/</span>
        <span>{{ $item->title }}</span>
    @endif
</div>
<div class="shop-heading mt-16 mb-20 text-4xl uppercase">
    {{ isset($item) ? $item->title : 'Shop' }}
</div>
<div class="product-list mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
    {{ $slot }}
</div>
