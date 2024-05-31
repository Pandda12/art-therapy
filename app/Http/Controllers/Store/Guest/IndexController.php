<?php

namespace App\Http\Controllers\Store\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Store\IndexResource;
use App\Models\Store;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Guest/Store/Index', [
            'stores' => IndexResource::collection(Store::all())->resolve()
        ]);
    }
}
