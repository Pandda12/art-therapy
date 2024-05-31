<?php

namespace App\Http\Controllers\Brand\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\IndexResource;
use App\Models\{Brand, Product};
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(string $slug)
    {
        $brand = Brand::where('slug', $slug)->firstOrFail();
        $products = Product::where([
            ['brand_id', $brand->id],
            ['is_show', 1]
        ])->get();

        return Inertia::render('Guest/Brand/Show', [
            'brand' => [
                'name' => $brand->name
            ],
            'products' => IndexResource::collection($products)->resolve()
        ]);
    }
}
