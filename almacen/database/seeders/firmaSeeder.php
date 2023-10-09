<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Firma;

class firmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Firma::create([
            'NombrePersonal' => 'David Gutierrez',
            'Funcion' => 'Desarrollador',
            'PlantelID' => 1,
            'NivelPuesto' => '1',
            'firmasId' => '1',
        ]);
        Firma::create([
            'NombrePersonal' => 'Cesar Abraham Duran',
            'Funcion' => 'Programador',
            'PlantelID' => 2,
            'NivelPuesto' => '2',
            'firmasId' => '3',
        ]);
        Firma::create([
            'NombrePersonal' => 'Pepe Aguilar',
            'Funcion' => 'Artista de escuela',
            'PlantelID' => 1,
            'NivelPuesto' => '1',
            'firmasId' => '4',
        ]);
        Firma::create([
            'NombrePersonal' => 'Edgar Quintero',
            'Funcion' => 'Personal de limpieza',
            'PlantelID' => 3,
            'NivelPuesto' => '5',
            'firmasId' => '5',
        ]);
        Firma::create([
            'NombrePersonal' => 'Oscar Espinoza',
            'Funcion' => 'Profesor',
            'PlantelID' => 3,
            'NivelPuesto' => '1',
            'firmasId' => '6',
        ]);
        Firma::create([
            'NombrePersonal' => 'Abril Armenta',
            'Funcion' => 'Personal de limpieza',
            'PlantelID' => 1,
            'NivelPuesto' => '5',
            'firmasId' => '7',
        ]);
        
    }
}
