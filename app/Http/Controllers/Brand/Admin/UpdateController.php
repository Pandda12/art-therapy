<?php

namespace App\Http\Controllers\Brand\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\UpdateRequest;
use App\Models\Brand;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Brand $brand)
    {
        $data = $request->validated();

        $brand->update($data);

        return view('admin.brand.show', compact('brand'));
    }
}
