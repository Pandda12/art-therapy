<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class ClearController extends Controller
{
    public function __invoke()
    {
        Cookie::queue(Cookie::forget('shopping_cart'));
        return response()->json(['status'=>'cleared']);
    }
}
