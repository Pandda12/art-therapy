<?php

namespace Database\Seeders;

use App\Http\Helpers\Helper;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Oil Colour Tube 15 ml Naples Yellow Red',
                'price' => 10,
                'quantity' => 20,
                'description' => 'Professional oil colour carefully crafted in Holland from only the best raw materials. The range consists brilliant, intense colours in all opacity levels. Finely ground pigments are highly concentrated for optimal colour strength. Paints have the highest degree of lightfastness with great durability of the paint coat.',
                'brand_id' => 3,
                'category_id' => 2,
                'is_show' => true,
                'image' => '202.png',
                'slug' => Helper::CreateSlug( Str::slug( 'Oil Colour Tube 15 ml Naples Yellow Red' ), 'product')
            ],
            [
                'name' => 'Oil Colour Tube 15 ml Nickel Titanium Yellow Light',
                'price' => 10,
                'quantity' => 20,
                'description' => null,
                'brand_id' => 3,
                'category_id' => 2,
                'is_show' => true,
                'image' => null,
                'slug' => Helper::CreateSlug( Str::slug( 'Oil Colour Tube 15 ml Nickel Titanium Yellow Light' ), 'product')
            ],
            [
                'name' => 'Oil Colour Tube 15 ml Scarlet',
                'price' => 10,
                'quantity' => 20,
                'description' => null,
                'brand_id' => 3,
                'category_id' => 2,
                'is_show' => true,
                'image' => null,
                'slug' => Helper::CreateSlug( Str::slug( 'Oil Colour Tube 15 ml Scarlet' ), 'product')
            ],
            [
                'name' => 'Oil Colour Tube 15 ml Permanent Violet Medium',
                'price' => 10,
                'quantity' => 20,
                'description' => null,
                'brand_id' => 3,
                'category_id' => 2,
                'is_show' => true,
                'image' => null,
                'slug' => Helper::CreateSlug( Str::slug( 'Oil Colour Tube 15 ml Permanent Violet Medium' ), 'product')
            ],
            [
                'name' => 'Oil Colour Tube 15 ml Mixed White',
                'price' => 10,
                'quantity' => 20,
                'description' => null,
                'brand_id' => 4,
                'category_id' => 2,
                'is_show' => true,
                'image' => null,
                'slug' => Helper::CreateSlug( Str::slug( 'Oil Colour Tube 15 ml Mixed White' ), 'product')
            ]
        ];

        Product::insert($products);
    }
}
