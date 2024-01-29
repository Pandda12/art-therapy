<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function __invoke()
    {

        $cart = Cart::getCart();

        return view('guest.cart', compact('cart'));
    }
}
