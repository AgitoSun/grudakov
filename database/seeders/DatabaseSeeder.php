<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
//
//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'zeke1@mail.ru',
            'password' => Hash::make('RNVKD13zeke5361500'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Irina',
            'email' => 'irina@rusdhouse.ru',
            'password' => Hash::make('Shirina1805)'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
