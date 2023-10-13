<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consulta;
use Carbon\Carbon;

class consultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaEspecifica = Carbon::createFromDate(2000, 4, 24);
        //
        Consulta::create([
            'resguardatario' => 1,
            'fecha' => $fechaEspecifica,
            'area' => 1,
            'observaciones' => 'lorem lorem lorem',
            'documento' => 'documento.pdf', 
            'numInv' => 1,
            
            'firma' => 1,
            'inventarios' => 1,
        ]);
        Consulta::create([
            'resguardatario' => 1,
            'fecha' => $fechaEspecifica,
            'area' => 2,
            'observaciones' => 'lorem lorem lorem',
            'documento' => 'documento.pdf', 
            'numInv' => 2,
    
            'firma' => 2,
            'inventarios' => 2,
        ]);/*
        Consulta::create([
            'resguardatario' => 3,
            'fecha' => $fechaEspecifica,
            'area' => 2,
            'observaciones' => 'lorem lorem lorem',
            'documento' => 'documento.pdf', 
            'numInv' => 2,
            'articulo' => 2,
            'descripcion' => 2,
            'marca' => 2,
            'modelo' => 2,
            'serie' => 2,
            'fechaEntrada' => 2,
            'total' => 2,
            'monto' => 2,
            'firma' => 2,
            'inventarios' => 2,
        ]);
        Consulta::create([
            'resguardatario' => 1,
            'fecha' => $fechaEspecifica,
            'area' => 1,
            'observaciones' => 'lorem lorem lorem',
            'documento' => 'documento.pdf', 
            'numInv' => 1,
            'articulo' => 1,
            'descripcion' => 1,
            'marca' => 1,
            'modelo' => 1,
            'serie' => 1,
            'fechaEntrada' => 1,
            'total' => 1,
            'monto' => 1,
            'firma' => 1,
            'inventarios' => 1,
        ]);*/
    }
}
