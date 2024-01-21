<?php

namespace App\Http\Controllers\Brand\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class EditController extends Controller
{
    public function __invoke(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }
}
