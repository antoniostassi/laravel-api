<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::withoutForeignKeyConstraints(function () { // If the Pokemon database has some foreignIds, it will disable them and make it truncate properly.
            Pokemon::truncate();
        });
        
        $sexs = [
            'M',
            'F',
            'U',
        ];

        for ($i=0; $i < 10; $i++) { 
            //
            $randomSexsIndex = rand(0, count($sexs)-1);
            $pokemon = Pokemon::create([
                'name' => fake()->word(),
                'description' => fake()->paragraph(),
                'weight' => rand(0, 200),
                'height' => rand(0, 200),
                'sex' => $sexs[$randomSexsIndex],
            ]);
        };

        

    }
}
