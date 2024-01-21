<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $request->validated();
        $data = $request->validated();

        if ( $request->image ){

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images/products'), $imageName);

            $data['image'] = $imageName;
        }

        $product->update($data);

        return redirect()->route('product.edit', $product->id);
    }
}
