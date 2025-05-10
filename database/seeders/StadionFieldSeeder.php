<?php

namespace Database\Seeders;

use App\Models\Stadion;
use App\Models\StadionField;
use Illuminate\Database\Seeder;

class StadionFieldSeeder extends Seeder
{
    public function run(): void
    {
        $stadions = Stadion::limit(5)->get();

        foreach ($stadions as $stadion) {
            foreach (range(1, rand(1, 3)) as $i) {
                StadionField::create([
                    'stadion_id'  => $stadion->id,
                    'name'        => 'Maydon ' . $i,
                    'pictures'    => json_encode([
                        'https://via.placeholder.com/600x400?text=Field+' . $i,
                    ]),
                    'description' => 'Yashil sun’iy qoplamali futbol maydonchasi.',
                    'status'      => true,
                ]);
            }
        }
    }
}