<?php

namespace App\Http\Resources\Product;

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
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'image' => $this->getImage()
        ];

        if ($this->description)
            $data['description'] = $this->description;

        if ($this->brand_id) {
            $data['brand'] = [
                'name' => $this->brand->name,
                'url' => route('brand.show', $this->brand->slug),
            ];
        }

        if ($this->category_id) {
            $data['category'] = [
                'name' => $this->category->name,
                'url' => route('category.show', $this->category->slug),
            ];
        }

        return $data;
    }
}
