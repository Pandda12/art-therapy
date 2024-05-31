<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class Cart extends Model
{
    use HasFactory;

    public static function addToCart(int $product_id, int $quantity)
    {
//
    }

    public static function getCart( array $cart ): array
    {

        $data = [];
        $cartTotal = 0;
        $productCount = 0;

        foreach ($cart as $key => $value) {

            $product = Product::where([
                ['id', $value['id']],
                ['is_show', true]
            ])->first(); // or ->get() if you expect multiple records

//            var_dump($product);

            if (!$product) {
                $data['delete'] = $key;
            } else {

                $quantity = min($value['quantity'], $product->quantity);

                $data[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                    'max_quantity' => $product->quantity,
                    'image' => $product->getImage()
                ];

                $cartTotal += $product->price * $quantity;
                $productCount += $quantity;
            }

        }

        $cartData = [
            'products' => $data,
            'product_count' => $productCount,
            'total' => $cartTotal,
        ];

//        var_dump($cartData);

        return $cartData;
    }
}
