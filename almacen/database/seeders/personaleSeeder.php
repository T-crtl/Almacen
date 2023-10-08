<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peopledatabase;

class personaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Peopledatabase::create([
            'nomina' => 123,
            'nombre' => 'Cesar Duran',
            'adscripcion' => 'Estudiante',
            'tipo_contrato' => 'completo',
            'plantelID' => 1,
            'funcion' => 'administrador',
            'password' => 'admin123',
            'correo' => 'correo@mail.com',
            'foto' => 'imagen.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'ingenieria',
            

        ]);
    }
}
