<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class Cart extends Model
{
    use HasFactory;

    public static function getCart(): array
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $data = json_decode($cookie_data, true);

        if ( empty( $data ) )
            return array();

        $cart = array();
        $products = array();

        $quantity = 0;
        $product_total = 0;

        foreach ( $data as $key => $value ) {
            $product = Product::find( $value['product_id'] );

            if ( !$product ) {
                unset($data[$key]);
                continue;
            }

            $products[] = array(
                'product_id' => $product->id,
                'title' => $product->title,
                'quantity' => $value['quantity'],
                'price' => $product->price,
                'image' => $product->getImage()
            );

            $product_total += $product->price;
            $quantity++;

        }

        //$cart += array_fill_keys( array('products'), $products );

        $cart['products'] = $products;

        $cart['quantity'] = $quantity;
        $cart['product_total'] = $product_total;

        return $cart;
    }
}
