<?php

namespace App\Http\Controllers\Category\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard/Category/Index', [
            'categories' => Category::all()
        ]);
    }
}
