<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImage(): string
    {
        if ( is_null($this->image) )
            return asset('/images/products/art-therapy-placeholder.png' );

        if ( !file_exists( public_path('images/products/' . $this->image) ) )
            return asset('/images/products/art-therapy-placeholder.png' );

        return asset('/images/products/' . $this->image );
    }

    public static function productSearch( string $search ): array
    {
        $products = [];

        $data = Product::where('name', 'like', '%' . $search . '%')->get();

        foreach( $data as $item ){
            $products[] = [
                'id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'url' => route('product.show', $item->slug),
                'image' => $item->getImage(),
            ];
        }

        return $products;
    }
}
