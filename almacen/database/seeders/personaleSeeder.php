<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peopledatabase;

class personaleSeeder extends Seeder
{
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
        Peopledatabase::create([
            'nomina' => 231,
            'nombre' => 'David Gutierrez',
            'adscripcion' => 'Desarrollador',
            'tipo_contrato' => 'Planta',
            'plantelID' => 2,
            'funcion' => 'desarrollador jr',
            'password' => '123456789',
            'correo' => 'test@mail.com',
            'foto' => 'image.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'licenciatura',
        ]);
        Peopledatabase::create([
            'nomina' => 231,
            'nombre' => 'Francisco Montano',
            'adscripcion' => 'Administrador',
            'tipo_contrato' => 'Planta',
            'plantelID' => 2,
            'funcion' => 'administrador de documentos',
            'password' => '123456789',
            'correo' => 'test1@mail.com',
            'foto' => 'test.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'licenciatura',
        ]);
        Peopledatabase::create([
            'nomina' => 1212,
            'nombre' => 'Panchito',
            'adscripcion' => 'Conserje',
            'tipo_contrato' => 'Prueba',
            'plantelID' => 1,
            'funcion' => 'mantenimiento',
            'password' => '123456789',
            'correo' => 'test2@mail.com',
            'foto' => 'test2.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'Secundaria',
        ]);
        Peopledatabase::create([
            'nomina' => 3131,
            'nombre' => 'Adrian',
            'adscripcion' => 'Coordinador',
            'tipo_contrato' => 'Planta',
            'plantelID' => 1,
            'funcion' => 'coordinador division',
            'password' => '123456789',
            'correo' => 'test3@mail.com',
            'foto' => 'test3.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'Ingenieria',
        ]);
        Peopledatabase::create([
            'nomina' => 3131,
            'nombre' => 'Pepe',
            'adscripcion' => 'Director',
            'tipo_contrato' => 'Planta',
            'plantelID' => 1,
            'funcion' => 'director general',
            'password' => '123456789',
            'correo' => 'test4@mail.com',
            'foto' => 'test4.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'Ingenieria',
        ]);
        Peopledatabase::create([
            'nomina' => 1212,
            'nombre' => 'Jose Ramon',
            'adscripcion' => 'Coordinador',
            'tipo_contrato' => 'Planta',
            'plantelID' => 1,
            'funcion' => 'coordinador electronica',
            'password' => '123456789',
            'correo' => 'test5@mail.com',
            'foto' => 'test5.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'Ingenieria',
        ]);
        Peopledatabase::create([
            'nomina' => 2131,
            'nombre' => 'Norma Gonzales',
            'adscripcion' => 'Profesor',
            'tipo_contrato' => 'Prueba',
            'plantelID' => 3,
            'funcion' => 'profesor',
            'password' => '123456789',
            'correo' => 'test6@mail.com',
            'foto' => 'test6.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'Maestria',
        ]);
        Peopledatabase::create([
            'nomina' => 2131,
            'nombre' => 'Jose Luis Hernandez',
            'adscripcion' => 'Profesor',
            'tipo_contrato' => 'Prueba',
            'plantelID' => 2,
            'funcion' => 'profesor',
            'password' => '123456789',
            'correo' => 'test7@mail.com',
            'foto' => 'test7.png',
            'estatus' => 'inactivo',
            'nivel_educativo' => 'Maestria',
        ]);
        Peopledatabase::create([
            'nomina' => 2131,
            'nombre' => 'Pablo Orozco',
            'adscripcion' => 'Arquitecto',
            'tipo_contrato' => 'Planta',
            'plantelID' => 2,
            'funcion' => 'profesor',
            'password' => '123456789',
            'correo' => 'test8@mail.com',
            'foto' => 'test8.png',
            'estatus' => 'activo',
            'nivel_educativo' => 'Maestria',
        ]);
    }
}
