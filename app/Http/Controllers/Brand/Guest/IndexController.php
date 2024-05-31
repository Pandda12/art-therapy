<?php

namespace App\Http\Controllers\Brand\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Brand\IndexResource;
use App\Models\Brand;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Guest/Brand/Index', [
            'brands' => IndexResource::collection(Brand::orderBy('name')->get())->resolve()
        ]);
    }
}
