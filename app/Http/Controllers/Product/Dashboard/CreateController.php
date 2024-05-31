<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Inertia\Inertia;

class CreateController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard/Product/Create', [
            'brands' => Brand::all(),
            'categories' => Category::all()
        ]);
    }
}
