<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Brand, Category, Product};

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.product.edit', compact('product', 'brands', 'categories'));
    }
}
