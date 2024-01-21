<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $request->validated();
        $data = $request->validated();

        if ( $request->image ){

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images/products'), $imageName);

            $data['image'] = $imageName;
        }

        Product::firstOrCreate([
            'title' => $data['title']
        ], $data);

        return redirect()->route('admin.product.index');
    }
}
