<?php

namespace App\Http\Controllers\Order\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Order $order)
    {
        $order->delete();

        return to_route('dashboard.order.index');
    }
}
