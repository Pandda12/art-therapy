<?php

namespace App\Http\Controllers\Store\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EditController extends Controller
{
    public function __invoke(int $storeId, Request $request)
    {
        return Inertia::render('Dashboard/Store/Edit', [
            'store' => Store::findOrFail($storeId)
        ]);
    }
}
