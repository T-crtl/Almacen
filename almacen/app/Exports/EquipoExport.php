<?php

namespace App\Exports;

use App\Models\Equipo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EquipoExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Equipo::all();
    }
    public function map($equipo):array
    {
        return [
            $equipo->id,
            $equipo->descripcion,
            $equipo->marca,
            $equipo->modelo,
            $equipo->serie,
            $equipo->precio,
            $equipo->fechaEntrada,
            $equipo->estatus,
            $equipo->articulo,
            $equipo->tipoAdq,
            $equipo->areas->descripcion??'Sin Area', 
        ];
    }
    public function headings():array
    {
        return [
            "Id",
            "Nombre",
            "marca",
            "modelo",
            "serie",
            "precio",
            "fechaEntrada",
            "estatus",
            "articulo",
            "tipo de adquisicion",
            "area", 
        ];
    }
}
