<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;
use Carbon\Carbon;

class equipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaEspecifica = Carbon::createFromDate(2000, 4, 24);
        //
        Equipo::create([
            'numInv' => 1,
            'descripcion' => 'Fuente 23v',
            'marca' => 'Sony',
            'modelo' => '2013',
            'serie' => 'series sony',
            'precio' => 240,
            'fechaEntrada' => $fechaEspecifica ,
            'estatus' => 'activo',
            'articulo' => 'articulo',
            'rutaImg' => 'imagen.png',
            'tipoAdq' => 'compra',
            'areaId' => 1,
        ]);
        $fechaEspecifica = Carbon::createFromDate(2001, 3, 24);
        Equipo::create([
            'numInv' => 2,
            'descripcion' => 'SILLA',
            'marca' => 'VAN BEUREN',
            'modelo' => ' ',
            'serie' => ' ',
            'precio' => 240,
            'fechaEntrada' => $fechaEspecifica ,
            'estatus' => 'activo',
            'articulo' => 'articulo',
            'rutaImg' => 'imagen.png',
            'tipoAdq' => 'compra',
            'areaId' => 2,
        ]);
        $fechaEspecifica = Carbon::createFromDate(2010, 2, 10);
        Equipo::create([
            'numInv' => 3,
            'descripcion' => 'ARCHIVERO',
            'marca' => 'PM-STEELE',
            'modelo' => ' ',
            'serie' => ' ',
            'precio' => 200,
            'fechaEntrada' => $fechaEspecifica ,
            'estatus' => 'activo',
            'articulo' => 'articulo',
            'rutaImg' => 'imagen.png',
            'tipoAdq' => 'compra',
            'areaId' => 1,
        ]);
        $fechaEspecifica = Carbon::createFromDate(2012, 4, 11);
        Equipo::create([
            'numInv' => 4,
            'descripcion' => 'VITRINA',
            'marca' => 'PM-STEELE',
            'modelo' => ' ',
            'serie' => ' ',
            'precio' => 200,
            'fechaEntrada' => $fechaEspecifica ,
            'estatus' => 'activo',
            'articulo' => 'articulo',
            'rutaImg' => 'imagen.png',
            'tipoAdq' => 'compra',
            'areaId' => 4,
        ]);
    }
}
