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

        $cart = array();

        foreach ( $data as $key => $value ) {
            $product = Product::find( $value['product_id'] );

            if ( !$product ) {
                unset($data[$key]);
                continue;
            }

            $cart[] = array(
                'product_id' => $product->id,
                'title' => $product->title,
                'quantity' => $value['quantity'],
                'price' => $product->price,
                'image' => $product->getImage()
            );

        }

        return $cart;
    }
}
