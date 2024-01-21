<?php

namespace App\Http\Controllers\Category\Guest;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke( Category $category )
    {
        return view('guest.category.show', compact('category'));
    }
}
