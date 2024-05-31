<?php

namespace App\Http\Controllers\Category\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\IndexResource;
use App\Models\{Category, Product};
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where([
            ['category_id', $category->id],
            ['is_show', 1]
        ])->get();

        return Inertia::render('Guest/Category/Show', [
            'category' => [
                'name' => $category->name
            ],
            'products' => IndexResource::collection($products)->resolve()
        ]);
    }
}
