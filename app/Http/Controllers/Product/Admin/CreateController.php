<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Brand, Category};

class CreateController extends Controller
{
    public function __invoke()
    {

        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.product.create', compact('categories', 'brands'));
    }
}
