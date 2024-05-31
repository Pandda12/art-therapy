<?php

namespace App\Http\Controllers\Order\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\Order\ShowResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(int $orderId)
    {
        return Inertia::render('Guest/Order/Show', [
            'order' => ShowResource::make( Order::findOrFail($orderId) )->resolve()
        ]);
    }
}
