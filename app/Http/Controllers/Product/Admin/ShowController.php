<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }
}
