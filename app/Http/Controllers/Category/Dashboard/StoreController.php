<?php

namespace App\Http\Controllers\Category\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Helper::CreateSlug( Str::slug( $data['name'] ), 'category');

        Category::create($data);

        return to_route('dashboard.category.index');
    }
}
