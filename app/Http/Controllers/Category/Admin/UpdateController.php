<?php

namespace App\Http\Controllers\Category\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke( UpdateRequest $request, Category $category )
    {
        $data = $request->validated();

        $category->update($data);

        return view('admin.category.show', compact('category'));
    }
}
