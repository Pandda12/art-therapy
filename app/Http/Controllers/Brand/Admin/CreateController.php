<?php

namespace App\Http\Controllers\Brand\Admin;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.brand.create');
    }
}
