<?php

namespace App\Http\Controllers\Product\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\IndexResource;
use App\Http\Resources\Product\ShowResource;
use App\Models\Product;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(string $slug)
    {
        $product = Product::where([
            ['slug', $slug],
            ['is_show', true],
        ])->firstOrFail();

        $similarProducts = [];

        $similarProducts = Product::where([
            ['is_show', true],
            ['category_id', $product->category_id],
        ])->take(4)->get();

        return Inertia::render('Guest/Product/Show', [
            'product' => ShowResource::make($product)->resolve(),
            'similarProducts' => IndexResource::collection($similarProducts)->resolve()
        ]);
    }
}
