<?php

namespace App\Http\Controllers\Product\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::where('is_published', 1)->paginate(16);

        return view('guest.shop', compact('products'));
    }
}
