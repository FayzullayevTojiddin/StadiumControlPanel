<?php

namespace Database\Seeders;

use App\Models\Stadion;
use App\Models\TelegramUser;
use Illuminate\Database\Seeder;

class TelegramUserSeeder extends Seeder
{
    public function run(): void
    {
        $stadions = Stadion::all();

        foreach ($stadions as $stadion) {
            foreach (range(1, rand(1, 3)) as $i) {
                TelegramUser::create([
                    'chat_id'     => rand(100000000, 199999999), // realga yaqin
                    'stadion_id'  => $stadion->id,
                    'status'      => (bool) rand(0, 1),
                ]);
            }
        }
    }
}