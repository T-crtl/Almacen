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
            //'numInv' => $row[1], //B
            'descripcion' => $row[1], //C
            'marca' => $row[2], //D
            'modelo' => $row[3],  //E
            'serie' => $row[4],  //F
            'precio' => $row[5],
            'fechaEntrada' =>  $row[6],
            'estatus' => $row[7],
            'articulo' => $row[8],
            'rutaImg' => $row[9],
            'tipoAdq' => $row[10],
            'areaId' => $row[11],
        ]);
    }
}
