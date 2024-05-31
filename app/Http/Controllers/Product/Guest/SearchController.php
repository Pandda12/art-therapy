<?php

namespace App\Http\Controllers\Product\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'search' => 'required|string'
        ]);

        return Product::productSearch( $data['search'] );
    }
}
