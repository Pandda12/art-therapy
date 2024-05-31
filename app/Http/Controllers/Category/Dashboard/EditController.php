<?php

namespace App\Http\Controllers\Category\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Inertia\Inertia;

class EditController extends Controller
{
    public function __invoke(int $categoryId)
    {
        return Inertia::render('Dashboard/Category/Edit',[
            'category' => Category::findOrFail($categoryId),
        ]);
    }
}
