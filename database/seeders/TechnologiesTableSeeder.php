<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['php', 'laravel', 'js','vue'];

        foreach ($technologies as $technology) {
            $new_technonology = new Technology();
            $new_technonology->name = $technology;
            $new_technonology->slug = Str::slug($new_technonology->name);     
            $new_technonology->save();       
        }
    }
}
