<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Checkout\StoreRequest;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Cookie;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $request->validated();
        $data = $request->validated();

        $cart = Cart::getCart();

        $data['products'] = stripslashes(Cookie::get('shopping_cart'));
        $data['total_price'] = $cart['product_total'];
//        $data['verify_key'] =

        $order = Order::create($data);

        return redirect()->route('checkout.index', $order->id);
    }
}
