<?php

namespace App\Http\Controllers\Category\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(Category $category, UpdateRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Helper::CreateSlug( Str::slug( $data['name'] ), 'category', $data['id'] );

        $category->update($data);

        return to_route('dashboard.category.edit', $data['id']);
    }
}
