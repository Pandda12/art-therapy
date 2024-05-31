<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\IndexResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::whereIn('id', [1, 2, 3, 4, 5, 6, 7])->get();

//        dd($categories);

        return Inertia::render('Home', [
            'categories' => IndexResource::collection($categories)->resolve(),
        ]);
    }
}
