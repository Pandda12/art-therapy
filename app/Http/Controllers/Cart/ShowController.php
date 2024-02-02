<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;

class ShowController extends Controller
{
    public function __invoke()
    {
        $cart = Cart::getCart();
        return view('cart.show', compact('cart'));
        //return response()->json( ['cart' => $cart]) ;
    }
}
