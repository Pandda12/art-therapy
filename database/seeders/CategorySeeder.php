<?php

namespace Database\Seeders;

use App\Http\Helpers\Helper;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Brushes & Painting knives',
                'slug' => Helper::CreateSlug( Str::slug( 'Brushes & Painting knives' ), 'category')
            ],
            [
                'id' => 2,
                'name' => 'Oil colours',
                'slug' => Helper::CreateSlug( Str::slug( 'Oil colours' ), 'category')
            ],
            [
                'id' => 3,
                'name' => 'Graphics',
                'slug' => Helper::CreateSlug( Str::slug( 'Graphics' ), 'category')
            ],
            [
                'id' => 4,
                'name' => 'Accessories',
                'slug' => Helper::CreateSlug( Str::slug( 'Accessories' ), 'category')
            ],
            [
                'id' => 5,
                'name' => 'Paper & Canvas',
                'slug' => Helper::CreateSlug( Str::slug( 'Paper & Canvas' ), 'category')
            ],
            [
                'id' => 6,
                'name' => 'Easels',
                'slug' => Helper::CreateSlug( Str::slug( 'Easels' ), 'category')
            ],
            [
                'id' => 7,
                'name' => 'Painting sets',
                'slug' => Helper::CreateSlug( Str::slug( 'Painting sets' ), 'category')
            ]
        ];

        Category::insert($categories);
    }
}
