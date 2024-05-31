<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Helper::CreateSlug( Str::slug( $data['name'] ), 'product');


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

        Product::create($data);

        return to_route('dashboard.product.index');

    }
}
