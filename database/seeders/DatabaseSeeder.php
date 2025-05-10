<?php

namespace Database\Seeders;

use App\Models\User;

use Database\Seeders\StadionSeeder;
use Database\Seeders\BookingSeeder;
use Database\Seeders\StadionFieldSeeder;
use Database\Seeders\TelegramUserSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin')
        ]);

        $this->call([
            StadionSeeder::class,
            TelegramUserSeeder::class,
            StadionFieldSeeder::class,
            BookingSeeder::class
        ]);
    }
}
