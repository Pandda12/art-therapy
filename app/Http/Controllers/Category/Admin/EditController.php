<?php

namespace App\Http\Controllers\Category\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke( Category $category )
    {
        return view('admin.category.edit', compact('category'));
    }
}
