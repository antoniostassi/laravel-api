<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () { // If the Pokemon database has some foreignIds, it will disable them and make it truncate properly.
            Type::truncate();
        });
        
        //
        $newTypes = [
            [
                'name'=>'erba',
                'color'=>'green'
            ],
            [
                'name'=>'fuoco',
                'color'=>'red'
            ],
            [
                'name'=>'acqua',
                'color'=>'blue'
            ],
            [
                'name'=>'veleno',
                'color'=>'purple'
            ],
            [
                'name'=>'lotta',
                'color'=>'brown'
            ],
        ];

        foreach ($newTypes as $type) {
            $newType = Type::create([
                'name' => $type['name'],
                'color' => $type['color'],
            ]);
        }
    }
}
