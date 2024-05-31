<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'pandda.dev@gmail.com',
        ],[
            'name' => 'Pandda',
            'email' => 'pandda.dev@gmail.com',
            'type' => 'admin',
            'password' => Hash::make('HxJ$b+QCq8C%zjdr'),
        ]);
    }
}
