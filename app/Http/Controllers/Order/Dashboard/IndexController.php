<?php

namespace App\Http\Controllers\Order\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Resources\Order\IndexResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard/Order/Index', [
            'orders' => IndexResource::collection(Order::all())->resolve(),
        ]);
    }
}
