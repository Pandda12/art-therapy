<?php

namespace App\Http\Resources\Order;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
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
            'id' => $this->id,
            'number' => $this->order_number,
            'customer' => $this->first_name . ' ' . $this->last_name,
            'status' => $order_statuses[$this->status],
            'status_slug' => $this->status,
            'total' => $this->order_total
        ];
    }
}
