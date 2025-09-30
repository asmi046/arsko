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
        $this->call([
            SeoDataSeeder::class,
            PageSeeder::class,
            PartnersSeeder::class,
            NewsSeeder::class,
            ContactSeeder::class,
            MenuSeeder::class,
            ParametrSeeder::class,
            UserSeeder::class,
            MipSeeder::class,
        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
