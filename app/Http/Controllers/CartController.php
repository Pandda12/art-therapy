<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cart\ShowRequest;
use App\Http\Requests\Cart\StoreRequest;
use App\Http\Requests;
use App\Models\Cart;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Inertia\Inertia;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Guest/Cart/Index', [
            'stores' => Store::all()
        ]);
    }

    public function show(ShowRequest $request)
    {
        $data = $request->validated();
        return Cart::getCart(json_decode($data['cart'], true));
    }

    public function addToCart(StoreRequest $request) {
        $data = $request->validated();

        cookie()->queue(cookie('shopping_cart', '11111', 60));

        $product_id = $data['id'];
        $quantity = $data['quantity'];

        $cookieName = 'shopping_cart';
        $minutes = 60; // Default expiration time for the cookie

        $cart_data = [];
        $cookieData = Cookie::get($cookieName);

        if ($cookieData) {
            $cart_data = json_decode(stripslashes($cookieData), true);
        }

        $item_id_list = array_column($cart_data, 'product_id');

        if (in_array($product_id, $item_id_list)) {
            foreach ($cart_data as &$item) {
                if ($item['product_id'] === $product_id) {
                    $item['quantity'] += $quantity;
                    break;
                }
            }
        } else {
            $cart_data[] = [
                'product_id' => $product_id,
                'quantity' => $quantity,
            ];
        }

        $encodedData = json_encode($cart_data);
        Cookie::queue(Cookie::make($cookieName, $encodedData, $minutes));
        Cookie::queue(Cookie::make('test', 'hi', 1));

        return response()->json(['status' => 'success']);


//
//        return Cart::addToCart($data['id'], $data['quantity']);

    }

}
