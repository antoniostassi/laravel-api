<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Schema;

use App\Models\Generation;

class GenerationSeeder extends Seeder
{

    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () { // If the Generation table has some foreignIds, it will disable them and make it truncate properly.
            Generation::truncate();
        });

        $generationsArray = [
            'prima',
            'seconda',
            'terza'
        ];

        for ($i=0; $i < 3; $i++) { 
            $generation = Generation::create([
                'name' => $generationsArray[$i],
                'year' => rand(1990, 2024)
            ]);
        }
    }
}
