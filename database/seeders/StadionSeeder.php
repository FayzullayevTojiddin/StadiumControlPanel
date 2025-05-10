<?php

namespace Database\Seeders;

use App\Models\Stadion;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StadionSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::limit(3)->get(); // faqat dastlabki 3 ta user uchun

        $titles = [
            'Milliy stadion',
            'Paxtakor maydoni',
            'Chilonzor arenasi',
            'Yoshlar sport majmuasi',
            'Yangi hayot stadion',
        ];

        foreach ($users as $user) {
            foreach (array_slice($titles, 0, rand(1, 3)) as $title) {
                Stadion::create([
                    'user_id'    => $user->id,
                    'bot_token'  => Str::random(10) . ':' . Str::random(30),
                    'title'      => $title,
                    'about_text' => $title . ' bu zamonaviy mini stadion.',
                    'latitude'   => fake()->latitude,
                    'longitude'  => fake()->longitude,
                    'pictures'   => json_encode([
                        'https://via.placeholder.com/600x400?text=' . urlencode($title),
                    ]),
                    'status'     => 'active',
                ]);
            }
        }
    }
}