<?php

namespace App\Http\Controllers\Brand\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Brand $brand)
    {
        $brand->delete();

        return to_route('dashboard.brand.index');
    }
}
