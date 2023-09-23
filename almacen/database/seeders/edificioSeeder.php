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
    }
}
