<?php

namespace App\Http\Controllers\Store\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\UpdateRequest;
use App\Models\Store;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Store $store, UpdateRequest $request)
    {
        $data = $request->validated();

        $store->update($data);

        return redirect()->route('dashboard.store.edit', $data['id']);
    }
}
