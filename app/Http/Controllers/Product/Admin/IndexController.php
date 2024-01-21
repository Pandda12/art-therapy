<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();

        $products = Product::paginate(16);

        return view('admin.product.index', compact('products'));
    }
}
