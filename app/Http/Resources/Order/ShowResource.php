<?php

namespace App\Http\Resources\Order;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $order_statuses = Order::getOrderStatuses();

        return [
            'order_number' => $this->order_number,
            'order_status' => $order_statuses[$this->status],
            'store_address' => $this->store->address
        ];
    }
}
