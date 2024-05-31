<?php

namespace App\Http\Controllers\Store\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StoreRequest;
use App\Models\Store;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Store::create($data);

        return to_route('dashboard.store.index');
    }
}
