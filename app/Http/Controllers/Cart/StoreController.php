<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreRequest;
use Illuminate\Support\Facades\Cookie;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $product_id = (int)$data['product_id'];
        $quantity = (int)$data['quantity'];

        if ( Cookie::get('shopping_cart' ) ) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode( $cookie_data, true);
        } else {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'product_id');
        $prod_id_is_there = $product_id;

        if ( in_array($prod_id_is_there, $item_id_list ) ) {
            foreach ( $cart_data as $keys => $item ) {

                if ( $item["product_id"] === $product_id) {

                    $cart_data[$keys]["quantity"] += $quantity;

                    $item_data = json_encode($cart_data);
                    $minutes = 180;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'success']);
                }
            }
        } else {

            $item_array = array(
                'product_id' => $product_id,
                'quantity' => $quantity,
            );
            $cart_data[] = $item_array;

            $item_data = json_encode($cart_data);
            $minutes = 60;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            return response()->json(['status'=>'success']);

        }
    }
}
