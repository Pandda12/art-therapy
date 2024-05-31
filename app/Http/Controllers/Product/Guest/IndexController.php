<?php

namespace App\Http\Controllers\Product\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\IndexResource;
use App\Models\Product;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::where('is_show', 1)->get();

        return Inertia::render('Guest/Product/Index', [
            'products' => IndexResource::collection($products)->resolve()
        ]);
    }
}
