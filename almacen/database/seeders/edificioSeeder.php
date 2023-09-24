<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Edificio;

class edificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Edificio::create([
            'numero' => 1,
            'descripcion' => 'Edificio A',
            'nivelId' => 1,
            'areaId' => 1,
        ]);
        Edificio::create([
            'numero' => 2,
            'descripcion' => 'Edificio K',
            'nivelId' => 2,
            'areaId' => 3,
        ]);
        Edificio::create([
            'numero' => 2,
            'descripcion' => 'Edificio I',
            'nivelId' => 3,
            'areaId' => 1,
        ]);
        Edificio::create([
            'numero' => 2,
            'descripcion' => 'Edificio C',
            'nivelId' => 1,
            'areaId' => 1,
        ]);
        Edificio::create([
            'numero' => 4,
            'descripcion' => 'Edificio L',
            'nivelId' => 1,
            'areaId' => 4,
        ]);
    }
}
