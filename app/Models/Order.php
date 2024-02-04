<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = false;

    function createVerifyKey( $length = 10 ): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$%&#';
        $randomString = '';

        for ($i = 0; $i < $length; $i++)
            $randomString .= $characters[rand(0, strlen($characters) - 1)];


        return $randomString;
    }
}
