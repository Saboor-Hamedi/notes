<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        Posts::factory(100)->create();

        // User::factory()->create([
        //     'name' => 'Ter',
        //     'email' => 'test@example.com',
        // ]);
    }
}
