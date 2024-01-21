<?php

namespace App\Http\Controllers\Category\Guest;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();

        return view('guest.category.index', compact('categories'));
    }
}
