<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected static array $statuses = [
        'processing' => 'Processing',
        'shipped' => 'Shipped',
        'delivered' => 'Delivered',
        'cancelled' => 'Cancelled',
        'completed' => 'Completed'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    static function crateOrderNumber(): string
    {
        $number = Str::random(10);

        return Order::where('order_number', $number)->first() ? self::crateOrderNumber() : $number;
    }

    static function getOrderStatuses(): array
    {
        return self::$statuses;
    }
}
