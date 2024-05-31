<?php

namespace App\Http\Controllers\Order\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Store;
use Inertia\Inertia;

class EditController extends Controller
{
    public function __invoke(int $orderId)
    {
        return Inertia::render('Dashboard/Order/Edit', [
            'order' => Order::find($orderId),
            'order_statuses' => Order::getOrderStatuses(),
            'shops' => Store::all()
        ]);
    }
}
