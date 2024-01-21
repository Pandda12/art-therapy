<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
