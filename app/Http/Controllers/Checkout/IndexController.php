<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Order;

class IndexController extends Controller
{
    public function __invoke(Order $order)
    {
        return view('checkout.index', compact('order'));
    }
}
