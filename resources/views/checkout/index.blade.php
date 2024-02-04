@extends('layouts.guest')
@section('title', 'Checkout')
@section('content')
    <div class="breadcrumbs">
        <a href="{{ route('main') }}">Home</a>
        <span class="mx-5">/</span>
        <span>Checkout</span>
    </div>
    <h1 class="shop-heading mt-16 mb-20 text-4xl uppercase">Checkout</h1>
    <div>{{ $order['total_price'] }}$</div>
@endsection

