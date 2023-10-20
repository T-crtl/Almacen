<?php

namespace App\Imports;

use App\Models\Equipo;
use Maatwebsite\Excel\Concerns\ToModel;

class EquipoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Equipo([
            'id' => 0,
            'numInv' => $row[1], //B
            'descripcion' => $row[2], //C
            'marca' => $row[3], //D
            'modelo' => $row[4],  //E
            'serie' => $row[5],  //F
            'precio' => $row[6],
            'fechaEntrada' =>  $row[7],
            'estatus' => $row[8],
            'articulo' => $row[9],
            'rutaImg' => $row[10],
            'tipoAdq' => $row[11],
            'areaId' => $row[12],
        ]);
    }
}
