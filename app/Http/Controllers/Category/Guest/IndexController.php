<?php

namespace App\Http\Controllers\Category\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\IndexResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Guest/Category/Index', [
            'categories' => IndexResource::collection(Category::all())->resolve()
        ]);
    }
}
