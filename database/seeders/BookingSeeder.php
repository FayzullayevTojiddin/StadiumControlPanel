<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\StadionField;
use App\Models\TelegramUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        $fields = StadionField::limit(5)->get();
        $TelegramUser = TelegramUser::pluck('id')->toArray(); // mavjud userlar

        foreach ($fields as $field) {
            foreach (range(1, rand(2, 4)) as $i) {
                $date = Carbon::today()->addDays(rand(0, 10));
                $startHour = rand(8, 20);
                $duration = rand(1, 2);

                Booking::create([
                    'stadion_field_id'  => $field->id,
                    'telegram_user_id'  => collect($TelegramUser)->random(),
                    'date'              => $date->toDateString(),
                    'start'             => sprintf('%02d:00', $startHour),
                    'end'               => sprintf('%02d:00', $startHour + $duration),
                    'price'             => rand(50000, 150000),
                    'status'            => 'confirmed',
                ]);
            }
        }
    }
}