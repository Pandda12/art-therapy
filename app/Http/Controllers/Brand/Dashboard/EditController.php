<?php

namespace App\Http\Controllers\Brand\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Inertia\Inertia;

class EditController extends Controller
{
    public function __invoke( int $brandId )
    {
        return Inertia::render('Dashboard/Brand/Edit', [
            'brand' => Brand::findOrFail($brandId)
        ]);
    }
}
