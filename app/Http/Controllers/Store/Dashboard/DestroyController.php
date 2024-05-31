<?php

namespace App\Http\Controllers\Store\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Store;

class DestroyController extends Controller
{
    public function __invoke(Store $store)
    {
        $store->delete();

        return to_route('dashboard.store.index');
    }
}
