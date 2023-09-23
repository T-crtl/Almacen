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
            'numInv' => 23,
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
    }
}
