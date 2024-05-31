<?php

namespace Database\Seeders;

use App\Http\Helpers\Helper;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'id' => 1,
                'name' => 'Van Gogh',
                'slug' => Helper::CreateSlug( Str::slug( 'Van Gogh' ), 'brand' )
            ],
            [
                'id' => 2,
                'name' => 'Ladoga',
                'slug' => Helper::CreateSlug( Str::slug( 'Ladoga' ), 'brand' )
            ],
            [
                'id' => 3,
                'name' => 'Rembrandt',
                'slug' => Helper::CreateSlug( Str::slug( 'Rembrandt' ), 'brand' )
            ],
            [
                'id' => 4,
                'name' => 'White nights',
                'slug' => Helper::CreateSlug( Str::slug( 'White nights' ), 'brand' )
            ],
            [
                'id' => 5,
                'name' => 'Royal Talents',
                'slug' => Helper::CreateSlug( Str::slug( 'Royal Talents' ), 'brand' )
            ],
            [
                'id' => 6,
                'name' => 'Sonnet',
                'slug' => Helper::CreateSlug( Str::slug( 'Sonnet' ), 'brand' )
            ],
            [
                'id' => 7,
                'name' => 'Decola',
                'slug' => Helper::CreateSlug( Str::slug( 'Decola' ), 'brand' )
            ],
            [
                'id' => 8,
                'name' => 'Master Class',
                'slug' => Helper::CreateSlug( Str::slug( 'Master Class' ), 'brand' )
            ]
        ];

        Brand::insert($brands);

    }
}
