<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = [
            [
                'id' => 1,
                'name' => 'University store',
                'address' => 'Warsaw, Okopowa 59',
                'phone' => '+48 123 456 789',
                'email' => 'store1@art-therapy.com',
                'working_hours' => 'monday-friday (10:00 - 16:00)'
            ],
            [
                'id' => 2,
                'name' => 'Złote Tarasy store',
                'address' => 'Warsaw, Złota 59',
                'phone' => '+48 123 456 789',
                'email' => 'store2@art-therapy.com',
                'working_hours' => 'monday-friday (10:00 - 22:00)'
            ]
        ];

        Store::insert($stores);
    }
}
