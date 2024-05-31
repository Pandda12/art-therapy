<?php

namespace App\Http\Controllers\Brand\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard/Brand/Index', [
            'brands' =>  Brand::all()
        ]);
    }
}
