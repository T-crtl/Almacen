<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class areaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Area::create([
            'numero' => 1,
            'descripcion' => 'DIV. ELECTROTECNIA',
            'tipo' => 'Electronica',
            'division' => 'Electronica',
            'plantelID' => 1,
            'edificioID' => 1,
            'nivel' => 1,
        ]);
        Area::create([
            'numero' => 2,
            'descripcion' => 'MAQUINAS Y HERRAMIENTAS',
            'tipo' => 'Maquinaria',
            'division' => 'Mantenimiento',
            'plantelID' => 1,
            'edificioID' => 1,
            'nivel' => 1,
        ]);
        Area::create([
            'numero' => 3,
            'descripcion' => 'Div Electronica',
            'tipo' => 'Electronica',
            'division' => 'Electronica',
            'plantelID' => 2,
            'edificioID' => 2,
            'nivel' => 2,
        ]);
        Area::create([
            'numero' => 4,
            'descripcion' => 'DEPTO. RECURSOS MATERIALES',
            'tipo' => 'General',
            'division' => 'General',
            'plantelID' => 1,
            'edificioID' => 4,
            'nivel' => 2,
        ]);
    }
}
