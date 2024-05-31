<?php

namespace App\Http\Controllers\Brand\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\Brand\StoreRequest;
use App\Models\Brand;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Helper::CreateSlug( Str::slug( $data['name'] ), 'brand' );

        Brand::create($data);

        return to_route('dashboard.brand.index');
    }
}
