<?php

namespace App\Http\Controllers\Order\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Order $order)
    {
        $data = $request->validated();

        $data['products'] = json_encode($data['products'] ?? []);

        $order->update($data);

        return to_route('dashboard.order.edit', $data['id']);
    }
}
