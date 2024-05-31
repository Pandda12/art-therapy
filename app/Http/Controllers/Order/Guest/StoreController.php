<?php

namespace App\Http\Controllers\Order\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $products = [];
        $orderTotal = 0;

        foreach ($data['products'] as $product) {
            $product = Product::findOrFail($product['id']);
            if ($product && $product->is_show) {
                $products[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $product['quantity'],
                ];

                $orderTotal += $product->price * $product['quantity'];
            }
        }

        $data['products'] = json_encode($products);
        $data['order_total'] = $orderTotal;
        $data['status'] = 'processing';

        $data['order_number'] = Order::crateOrderNumber();

        $order = Order::create($data);
        return to_route('order.show', $order->id);
    }
}
