<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Helper::CreateSlug( Str::slug( $data['name'] ), 'product', $data['id']);

        if ( $request->hasFile('image') ) {

            $file = $request->file('image');

            // Get the original name of the uploaded file
            $originalName = $file->getClientOriginalName();

            // Get the filename without extension
            $filename = pathinfo($originalName, PATHINFO_FILENAME);

            // Get the file extension
            $ext = $file->getClientOriginalExtension();

            $main_img = Helper::NameChecker( $filename, $ext );

//            Storage::disk('public')->put('img/products', $main_img);

            // Save the file directly to the public directory
            $file->move(public_path('images/products'), $main_img);

            $data['image'] = $main_img;
        }

        $product->update($data);

        return to_route('dashboard.product.edit', $product->id);

    }
}
