<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->delete();

        return to_route('dashboard.product.index');
    }
}
