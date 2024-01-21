<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart = json_decode($cookie_data, true);

        return view('guest.cart', compact('cart'));
    }
}
