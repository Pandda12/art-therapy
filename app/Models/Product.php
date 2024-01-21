<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = false;

    public function statuses(): array
    {
        return array(
            0 => 'Draft',
            1 => 'Publish'
        );
    }

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
            return asset('/images/products/placeholder.png' );

        if ( !file_exists( public_path('images/products/' . $this->image) ) )
            return asset('/images/products/placeholder.png' );

        return asset('/images/products/' . $this->image );
    }

}
