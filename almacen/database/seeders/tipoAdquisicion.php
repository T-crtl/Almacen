<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoAdquisicion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('tipoAdquisicion')->insert([
            'id' => 1,
            'tipoAdquisicion' => 'Compras',
        ]);
        DB::table('tipoAdquisicion')->insert([
            'id' => 2,
            'tipoAdquisicion' => 'Donacion',
        ]);
        DB::table('tipoAdquisicion')->insert([
            'id' => 3,
            'tipoAdquisicion' => 'Transferencia',
        ]);
    }
}
