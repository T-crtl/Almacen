<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campus;

class campusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Campus::create([
            'numero' => 1,
            'descripcion' => 'Plantel Tonala',
            'ubicacion' => 'Loma Dorada Tonala Centro',
        ]);
    }
}
