<?php

namespace App\Http\Helpers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Helper
{
    static function CreateSlug( string $slug, string $type, int $term_id = 0, int $count = 0 ): string
    {

        $data = match ( $type ){
            'brand' => Brand::where( 'slug', $slug )->first(),
            'category' => Category::where( 'slug', $slug )->first(),
            'product' => Product::where( 'slug', $slug)->first(),
            default => null
        };

        if ( !$data )
            return $slug;

        if ( $data['id'] === $term_id )
            return $slug;

        $count++;
        $newSlug = $slug . '-' . $count;

        return self::CreateSlug( $newSlug, $type, $term_id, $count );
    }
    static function NameChecker( string $img, string $extension, int $count = 1 ): string
    {
        $existingImg = Storage::disk('public')->exists('images/products/' . $img . '.' . $extension);

        if ( !$existingImg )
            return $img . '.' . $extension;

        $count++;
        $newName = $img . '-' . $count;
        return self::NameChecker( $newName, $extension, $count );
    }

}
