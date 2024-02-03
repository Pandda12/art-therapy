<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $product_id = (int)$data['product_id'];
        $quantity = (int)$data['quantity'];

        $product = Product::find($product_id);

        if ( $quantity > $product->quantity )
            return response()->json(['status'=>'max-qty']);

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart = json_decode( $cookie_data, true);

        $item_id_list = array_column($cart, 'product_id');
        $prod_id_is_there = $product_id;

        if ( in_array($prod_id_is_there, $item_id_list ) ) {
            foreach ( $cart as $keys => $item ) {

                if ( $item["product_id"] === $product_id) {

                    $cart[$keys]["quantity"] = $quantity;

                    $item_data = json_encode($cart);
                    $minutes = 180;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'success', 'qty' => $quantity, 'new_qty' => $cart[$keys]["quantity"]]);
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
