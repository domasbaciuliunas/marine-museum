<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => '$2y$12$T7DoBnhO61sXjslCoZkM5uFgAddVNjNEJd8lNLSoOkym8FY2ldkRK'
        ]);
    }
}
