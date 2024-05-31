<?php

namespace App\Http\Controllers\Brand\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\Brand\UpdateRequest;
use App\Models\Brand;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(Brand $brand, UpdateRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Helper::CreateSlug( Str::slug( $data['name'] ), 'brand', $data['id'] );

        $brand->update($data);

        return to_route('dashboard.brand.edit', $data['id']);
    }
}
